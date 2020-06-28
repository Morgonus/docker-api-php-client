<?php

namespace Docker\API\Model;

class EndpointSpec
{
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @var string|null
     */
    protected $mode = 'vip';
    /**
     * List of exposed ports that this service is accessible on from the outside. Ports can only be provided if `vip` resolution mode is used.
     *
     * @var EndpointPortConfig[]|null
     */
    protected $ports;
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @return string|null
     */
    public function getMode() : ?string
    {
        return $this->mode;
    }
    /**
     * The mode of resolution to use for internal load balancing between tasks.
     *
     * @param string|null $mode
     *
     * @return self
     */
    public function setMode(?string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * List of exposed ports that this service is accessible on from the outside. Ports can only be provided if `vip` resolution mode is used.
     *
     * @return EndpointPortConfig[]|null
     */
    public function getPorts() : ?array
    {
        return $this->ports;
    }
    /**
     * List of exposed ports that this service is accessible on from the outside. Ports can only be provided if `vip` resolution mode is used.
     *
     * @param EndpointPortConfig[]|null $ports
     *
     * @return self
     */
    public function setPorts(?array $ports) : self
    {
        $this->ports = $ports;
        return $this;
    }
}