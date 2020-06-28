<?php

namespace Docker\API\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * 
     *
     * @var EndpointSettings[]|null
     */
    protected $networks;
    /**
     * 
     *
     * @return EndpointSettings[]|null
     */
    public function getNetworks() : ?\ArrayObject
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param EndpointSettings[]|null $networks
     *
     * @return self
     */
    public function setNetworks(?\ArrayObject $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
}