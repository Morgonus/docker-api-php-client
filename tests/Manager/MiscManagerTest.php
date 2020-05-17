<?php

namespace Docker\Tests\Manager;

use Docker\API\Model\Event;
use Docker\Manager\MiscManager;
use Docker\Stream\EventStream;
use Docker\Tests\TestCase;
use Psr\Http\Message\ResponseInterface;

class MiscManagerTest extends TestCase
{
    /**
     * Return a container manager
     *
     * @return MiscManager
     */
    private function getManager()
    {
        return $this->getDocker()->getMiscManager();
    }

    /**
     * @return void
     */
    public function testGetEventsStream()
    {
        /** @var EventStream $stream */
        $stream = $this->getManager()->getEvents([
            'since' => time() - 1,
            'until' => time() + 4
        ], MiscManager::FETCH_STREAM);
        $lastEvent = null;

        $stream->onFrame(function (Event $event) use (&$lastEvent) {
            $lastEvent = $event;
        });

        $this->getDocker()->getImageManager()->create(null, [
            'fromImage' => 'busybox:latest'
        ]);
        $stream->wait();

        $this->assertInstanceOf('Docker\API\Model\Event', $lastEvent);
    }

    /**
     * @return void
     */
    public function testGetEventsObject()
    {
        /** @var string[] $events */
        $events = $this->getManager()->getEvents([
            'since' => time() - (60 * 60 * 24),
            'until' => time()
        ], MiscManager::FETCH_OBJECT);

        /** @var Event $r */
        $r= $events[0];
        $this->assertInternalType('array', $events);
        $this->assertInstanceOf('Docker\API\Model\Event',$r);
    }
}
