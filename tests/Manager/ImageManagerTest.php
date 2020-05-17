<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\AuthConfig;
use Docker\API\Model\BuildInfo;
use Docker\API\Model\CreateImageInfo;
use Docker\API\Model\PushImageInfo;
use Docker\Context\ContextBuilder;
use Docker\Manager\ImageManager;
use Docker\Stream\BuildStream;
use Docker\Stream\CreateImageStream;
use Docker\Tests\TestCase;

class ImageManagerTest extends TestCase
{
    /**
     * Return a container manager
     *
     * @return ImageManager
     */
    private function getManager()
    {
        return $this->getDocker()->getImageManager();
    }

    /**
     * @return void
     */
    public function testBuildStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        /** @var BuildStream $buildStream */
        $buildStream = $this->getManager()->build($context->read(), ['t' => 'test-image'], ImageManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\BuildStream', $buildStream);

        $lastMessage = "";

        $buildStream->onFrame(function (BuildInfo $frame) use (&$lastMessage) {
            $lastMessage = $frame->getStream();
        });
        $buildStream->wait();

        $this->assertContains("Successfully", $lastMessage);
    }

    /**
     * @return void
     */
    public function testBuildObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        /** @var BuildInfo[] $buildInfos */
        $buildInfos = $this->getManager()->build($context->read(), ['t' => 'test-image'], ImageManager::FETCH_OBJECT);

        $this->assertInternalType('array', $buildInfos);
        $this->assertContains("Successfully", $buildInfos[count($buildInfos) - 1]->getStream());
    }

    /**
     * @return void
     */
    public function testCreateStream()
    {
        /** @var CreateImageStream $createImageStream */
        $createImageStream = $this->getManager()->create(null, [
            'fromImage' => 'registry:latest'
        ], ImageManager::FETCH_STREAM);

        $this->assertInstanceOf('Docker\Stream\CreateImageStream', $createImageStream);

        $firstMessage = null;

        $createImageStream->onFrame(function (CreateImageInfo $createImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $createImageInfo->getStatus();
            }
        });
        $createImageStream->wait();

        $this->assertContains("Pulling from library/registry", $firstMessage);
    }

    /**
     * @return void
     */
    public function testCreateObject()
    {
        /** @var CreateImageInfo[] $createImagesInfos */
        $createImagesInfos = $this->getManager()->create(null, [
            'fromImage' => 'registry:latest'
        ], ImageManager::FETCH_OBJECT);

        $this->assertInternalType('array', $createImagesInfos);
        $this->assertContains("Pulling from library/registry", $createImagesInfos[0]->getStatus());
    }

    /**
     * @return void
     */
    public function testPushStream()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:latest');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->build($context->read(), ['t' => 'localhost:5000/test-image'], ImageManager::FETCH_OBJECT);

        $registryConfig = new AuthConfig();
        $registryConfig->setServeraddress('127.0.0.1:5000');

        /** @var CreateImageStream $pushImageStream */
        $pushImageStream = $this->getManager()->push('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], ImageManager::FETCH_STREAM);
        $this->assertInstanceOf('Docker\Stream\PushStream', $pushImageStream);

        $firstMessage = null;

        $pushImageStream->onFrame(function (PushImageInfo $pushImageInfo) use (&$firstMessage) {
            if (null === $firstMessage) {
                $firstMessage = $pushImageInfo->getStatus();
            }
        });
        $pushImageStream->wait();
        $this->assertContains("The push refers to repository [localhost:5000/test-image]", $firstMessage);
    }

    /**
     * @return void
     */
    public function testPushObject()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');
        $contextBuilder->add('/test', 'test file content');

        $context = $contextBuilder->getContext();
        $this->getManager()->build($context->read(), ['t' => 'localhost:5000/test-image'], ImageManager::FETCH_OBJECT);

        $registryConfig = new AuthConfig();
        $registryConfig->setServeraddress('localhost:5000');
        /** @var PushImageInfo[] $pushImageInfos */
        $pushImageInfos = $this->getManager()->push('localhost:5000/test-image', [
            'X-Registry-Auth' => $registryConfig
        ], ImageManager::FETCH_OBJECT);

        $this->assertInternalType('array', $pushImageInfos);
        $this->assertContains("The push refers to repository [localhost:5000/test-image]", $pushImageInfos[0]->getStatus());
    }
}
