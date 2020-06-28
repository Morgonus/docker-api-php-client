<?php

namespace Docker\API\Model;

class SwarmSpecDispatcher
{
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @var int|null
     */
    protected $heartbeatPeriod;
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @return int|null
     */
    public function getHeartbeatPeriod() : ?int
    {
        return $this->heartbeatPeriod;
    }
    /**
     * The delay for an agent to send a heartbeat to the dispatcher.
     *
     * @param int|null $heartbeatPeriod
     *
     * @return self
     */
    public function setHeartbeatPeriod(?int $heartbeatPeriod) : self
    {
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }
}