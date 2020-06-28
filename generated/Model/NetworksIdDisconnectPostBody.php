<?php

namespace Docker\API\Model;

class NetworksIdDisconnectPostBody
{
    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @var string|null
     */
    protected $container;
    /**
     * Force the container to disconnect from the network.
     *
     * @var bool|null
     */
    protected $force;
    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @return string|null
     */
    public function getContainer() : ?string
    {
        return $this->container;
    }
    /**
     * The ID or name of the container to disconnect from the network.
     *
     * @param string|null $container
     *
     * @return self
     */
    public function setContainer(?string $container) : self
    {
        $this->container = $container;
        return $this;
    }
    /**
     * Force the container to disconnect from the network.
     *
     * @return bool|null
     */
    public function getForce() : ?bool
    {
        return $this->force;
    }
    /**
     * Force the container to disconnect from the network.
     *
     * @param bool|null $force
     *
     * @return self
     */
    public function setForce(?bool $force) : self
    {
        $this->force = $force;
        return $this;
    }
}