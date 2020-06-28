<?php

namespace Docker\API\Model;

class ServiceEndpointVirtualIPsItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $networkID;
    /**
     * 
     *
     * @var string|null
     */
    protected $addr;
    /**
     * 
     *
     * @return string|null
     */
    public function getNetworkID() : ?string
    {
        return $this->networkID;
    }
    /**
     * 
     *
     * @param string|null $networkID
     *
     * @return self
     */
    public function setNetworkID(?string $networkID) : self
    {
        $this->networkID = $networkID;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAddr() : ?string
    {
        return $this->addr;
    }
    /**
     * 
     *
     * @param string|null $addr
     *
     * @return self
     */
    public function setAddr(?string $addr) : self
    {
        $this->addr = $addr;
        return $this;
    }
}