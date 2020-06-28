<?php

namespace Docker\API\Model;

class ContainersCreatePostBodyNetworkingConfig
{
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @var EndpointSettings[]|null
     */
    protected $endpointsConfig;
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @return EndpointSettings[]|null
     */
    public function getEndpointsConfig() : ?\ArrayObject
    {
        return $this->endpointsConfig;
    }
    /**
     * A mapping of network name to endpoint configuration for that network.
     *
     * @param EndpointSettings[]|null $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(?\ArrayObject $endpointsConfig) : self
    {
        $this->endpointsConfig = $endpointsConfig;
        return $this;
    }
}