<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\ContainerConfig;
use Docker\API\Model\ContainerCreateResult;
use Docker\Manager\ContainerManager;
use Docker\Stream\AttachWebsocketStream;
use Docker\Stream\DockerRawStream;
use Docker\Tests\TestCase;
use Http\Client\Plugin\Exception\ClientErrorException;

class ContainerManagerTest extends TestCase
{
    /**
     * Return the container manager
     *
     * @return ContainerManager
     */
    private function getManager()
    {
        return self::getDocker()->getContainerManager();
    }

    /**
     * Be sure to have image before doing test
     * @return void
     */
    public static function setUpBeforeClass()
    {
        self::getDocker()->getImageManager()->create(null, [
            'fromImage' => 'busybox:latest'
        ]);
    }

    /**
     * @return void
     */
    public function testAttach()
    {
        $containerConfig = new ContainerConfig();
        $containerConfig->setImage('busybox:latest');
        $containerConfig->setCmd(['echo', '-n', 'output']);
        $containerConfig->setAttachStdout(true);
        /** @var string[] $r */
        $r = new \ArrayObject(['docker-php-test' => 'true']);
        $containerConfig->setLabels($r);

        /** @var ContainerCreateResult $containerCreateResult */
        $containerCreateResult = $this->getManager()->create($containerConfig);
        /** @var DockerRawStream $dockerRawStream */
        $dockerRawStream = $this->getManager()->attach($containerCreateResult->getId(), [
            'stream' => true,
            'stdout' => true,
        ]);

        $stdoutFull = "";
        $dockerRawStream->onStdout(function ($stdout) use (&$stdoutFull) {
            $stdoutFull .= $stdout;
        });

        $this->getManager()->start($containerCreateResult->getId());
        $this->getManager()->wait($containerCreateResult->getId());

        $dockerRawStream->wait();

        $this->assertEquals("output", $stdoutFull);
    }

    /**
     * @return void
     */
    public function testAttachWebsocket()
    {
        $containerConfig = new ContainerConfig();
        $containerConfig->setImage('busybox:latest');
        $containerConfig->setCmd(['sh']);
        $containerConfig->setAttachStdout(true);
        $containerConfig->setAttachStderr(true);
        $containerConfig->setAttachStdin(false);
        $containerConfig->setOpenStdin(true);
        $containerConfig->setTty(true);
        /** @var string[] $r */
        $r = new \ArrayObject(['docker-php-test' => 'true']);
        $containerConfig->setLabels($r);

        /** @var ContainerCreateResult $containerCreateResult */
        $containerCreateResult = $this->getManager()->create($containerConfig);
        /** @var AttachWebsocketStream $webSocketStream */
        $webSocketStream = $this->getManager()->attachWebsocket($containerCreateResult->getId(), [
            'stream' => true,
            'stdout' => true,
            'stderr' => true,
            'stdin'  => true,
        ]);

        $this->getManager()->start($containerCreateResult->getId());

        // Read the bash first line
        $webSocketStream->read();
        /** @var bool $read */
        $read = $webSocketStream->read();
        // No output after that so it should be false
        $this->assertFalse($read);

        // Write something to the container
        $webSocketStream->write("echo test\n");

        // Test for echo present (stdin)
        $output = "";

        while (($data = $webSocketStream->read()) != false) {
            $output .= $data;
        }

        $this->assertContains("echo", $output);

        // Exit the container
        $webSocketStream->write("exit\n");
    }

    /**
     * @return  void
     */
    public function testLogs()
    {
        $containerConfig = new ContainerConfig();
        $containerConfig->setImage('busybox:latest');
        $containerConfig->setCmd(['echo', '-n', 'output']);
        $containerConfig->setAttachStdout(true);
        /** @var string[] $r */
        $r = new \ArrayObject(['docker-php-test' => 'true']);
        $containerConfig->setLabels($r);

        /** @var ContainerCreateResult $containerCreateResult */
        $containerCreateResult = $this->getManager()->create($containerConfig);

        $this->getManager()->start($containerCreateResult->getId());
        $this->getManager()->wait($containerCreateResult->getId());

        /** @var string[][] $logs */
        $logs = $this->getManager()->logs($containerCreateResult->getId(), [
            'stdout' => true,
            'stderr' => true,
        ]);


        $this->assertContains("output", $logs['stdout'][0]);
    }
}
