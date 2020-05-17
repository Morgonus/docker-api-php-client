<?php

namespace Docker\Tests\Context;

use Docker\Context\ContextBuilder;
use Docker\Tests\TestCase;

class ContextBuilderTest extends TestCase
{
    /**
     * @return void
     */
    public function testRemovesFilesOnDestruct()
    {
        $contextBuilder = new ContextBuilder();
        $context = $contextBuilder->getContext();

        $this->assertFileExists($context->getDirectory().'/Dockerfile');

        unset($contextBuilder);

        $this->assertFileNotExists($context->getDirectory().'/Dockerfile');
    }

    /**
     * @return void
     */
    public function testWritesContextToDisk()
    {
        $contextBuilder = new ContextBuilder();
        $context = $contextBuilder->getContext();

        $this->assertFileExists($context->getDirectory().'/Dockerfile');
    }

    /**
     * @return void
     */
    public function testHasDefaultFrom()
    {
        $contextBuilder = new ContextBuilder();
        $context = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', 'FROM base');
    }

    /**
     * @return void
     */
    public function testUsesCustomFrom()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->from('ubuntu:precise');

        $context = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', 'FROM ubuntu:precise');
    }

    /**
     * @return void
     */
    public function testCreatesTmpDirectory()
    {
        $contextBuilder = new ContextBuilder();
        $context = $contextBuilder->getContext();

        $this->assertFileExists($context->getDirectory());
    }

    /**
     * @return void
     */
    public function testWriteTmpFiles()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->add('/foo', 'random content');

        $context  = $contextBuilder->getContext();
        $filename = preg_replace(<<<DOCKERFILE
#FROM base
ADD (.+?) /foo#
DOCKERFILE
            , "$1", $context->getDockerfileContent());

        $this->assertStringEqualsFile($context->getDirectory().'/'.$filename, 'random content');
    }

    /**
     * @return void
     */
    public function testWritesAddCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->add('/foo', 'foo file content');

        $context  = $contextBuilder->getContext();

        $this->assertRegExp(<<<DOCKERFILE
#FROM base
ADD .+? /foo#
DOCKERFILE
            , $context->getDockerfileContent()
        );
    }

    /**
     * @return void
     */
    public function testWritesRunCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->run('foo command');

        $context  = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', <<<DOCKERFILE
FROM base
RUN foo command
DOCKERFILE
        );
    }

    /**
     * @return void
     */
    public function testWritesEnvCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->env('foo', 'bar');

        $context  = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', <<<DOCKERFILE
FROM base
ENV foo bar
DOCKERFILE
        );
    }

    /**
     * @return void
     */
    public function testWritesCopyCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->copy('/foo', '/bar');

        $context  = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', <<<DOCKERFILE
FROM base
COPY /foo /bar
DOCKERFILE
        );
    }

    /**
     * @return void
     */
    public function testWritesWorkdirCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->workdir('/foo');

        $context  = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', <<<DOCKERFILE
FROM base
WORKDIR /foo
DOCKERFILE
        );
    }

    /**
     * @return void
     */
    public function testWritesExposeCommands()
    {
        $contextBuilder = new ContextBuilder();
        $contextBuilder->expose(80);

        $context  = $contextBuilder->getContext();

        $this->assertStringEqualsFile($context->getDirectory().'/Dockerfile', <<<DOCKERFILE
FROM base
EXPOSE 80
DOCKERFILE
        );
    }
}
