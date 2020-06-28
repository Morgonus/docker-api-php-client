<?php

namespace Docker\API\Model;

class EndpointSettings
{
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @var EndpointIPAMConfig|null
     */
    protected $iPAMConfig;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $links;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $aliases;
    /**
     * Unique ID of the network.
     *
     * @var string|null
     */
    protected $networkID;
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @var string|null
     */
    protected $endpointID;
    /**
     * Gateway address for this network.
     *
     * @var string|null
     */
    protected $gateway;
    /**
     * IPv4 address.
     *
     * @var string|null
     */
    protected $iPAddress;
    /**
     * Mask length of the IPv4 address.
     *
     * @var int|null
     */
    protected $iPPrefixLen;
    /**
     * IPv6 gateway address.
     *
     * @var string|null
     */
    protected $iPv6Gateway;
    /**
     * Global IPv6 address.
     *
     * @var string|null
     */
    protected $globalIPv6Address;
    /**
     * Mask length of the global IPv6 address.
     *
     * @var int|null
     */
    protected $globalIPv6PrefixLen;
    /**
     * MAC address for the endpoint on this network.
     *
     * @var string|null
     */
    protected $macAddress;
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @var string[]|null
    */
    protected $driverOpts;
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @return EndpointIPAMConfig|null
     */
    public function getIPAMConfig() : ?EndpointIPAMConfig
    {
        return $this->iPAMConfig;
    }
    /**
     * EndpointIPAMConfig represents an endpoint's IPAM configuration.
     *
     * @param EndpointIPAMConfig|null $iPAMConfig
     *
     * @return self
     */
    public function setIPAMConfig(?EndpointIPAMConfig $iPAMConfig) : self
    {
        $this->iPAMConfig = $iPAMConfig;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLinks() : ?array
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param string[]|null $links
     *
     * @return self
     */
    public function setLinks(?array $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * Unique ID of the network.
     *
     * @return string|null
     */
    public function getNetworkID() : ?string
    {
        return $this->networkID;
    }
    /**
     * Unique ID of the network.
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
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @return string|null
     */
    public function getEndpointID() : ?string
    {
        return $this->endpointID;
    }
    /**
     * Unique ID for the service endpoint in a Sandbox.
     *
     * @param string|null $endpointID
     *
     * @return self
     */
    public function setEndpointID(?string $endpointID) : self
    {
        $this->endpointID = $endpointID;
        return $this;
    }
    /**
     * Gateway address for this network.
     *
     * @return string|null
     */
    public function getGateway() : ?string
    {
        return $this->gateway;
    }
    /**
     * Gateway address for this network.
     *
     * @param string|null $gateway
     *
     * @return self
     */
    public function setGateway(?string $gateway) : self
    {
        $this->gateway = $gateway;
        return $this;
    }
    /**
     * IPv4 address.
     *
     * @return string|null
     */
    public function getIPAddress() : ?string
    {
        return $this->iPAddress;
    }
    /**
     * IPv4 address.
     *
     * @param string|null $iPAddress
     *
     * @return self
     */
    public function setIPAddress(?string $iPAddress) : self
    {
        $this->iPAddress = $iPAddress;
        return $this;
    }
    /**
     * Mask length of the IPv4 address.
     *
     * @return int|null
     */
    public function getIPPrefixLen() : ?int
    {
        return $this->iPPrefixLen;
    }
    /**
     * Mask length of the IPv4 address.
     *
     * @param int|null $iPPrefixLen
     *
     * @return self
     */
    public function setIPPrefixLen(?int $iPPrefixLen) : self
    {
        $this->iPPrefixLen = $iPPrefixLen;
        return $this;
    }
    /**
     * IPv6 gateway address.
     *
     * @return string|null
     */
    public function getIPv6Gateway() : ?string
    {
        return $this->iPv6Gateway;
    }
    /**
     * IPv6 gateway address.
     *
     * @param string|null $iPv6Gateway
     *
     * @return self
     */
    public function setIPv6Gateway(?string $iPv6Gateway) : self
    {
        $this->iPv6Gateway = $iPv6Gateway;
        return $this;
    }
    /**
     * Global IPv6 address.
     *
     * @return string|null
     */
    public function getGlobalIPv6Address() : ?string
    {
        return $this->globalIPv6Address;
    }
    /**
     * Global IPv6 address.
     *
     * @param string|null $globalIPv6Address
     *
     * @return self
     */
    public function setGlobalIPv6Address(?string $globalIPv6Address) : self
    {
        $this->globalIPv6Address = $globalIPv6Address;
        return $this;
    }
    /**
     * Mask length of the global IPv6 address.
     *
     * @return int|null
     */
    public function getGlobalIPv6PrefixLen() : ?int
    {
        return $this->globalIPv6PrefixLen;
    }
    /**
     * Mask length of the global IPv6 address.
     *
     * @param int|null $globalIPv6PrefixLen
     *
     * @return self
     */
    public function setGlobalIPv6PrefixLen(?int $globalIPv6PrefixLen) : self
    {
        $this->globalIPv6PrefixLen = $globalIPv6PrefixLen;
        return $this;
    }
    /**
     * MAC address for the endpoint on this network.
     *
     * @return string|null
     */
    public function getMacAddress() : ?string
    {
        return $this->macAddress;
    }
    /**
     * MAC address for the endpoint on this network.
     *
     * @param string|null $macAddress
     *
     * @return self
     */
    public function setMacAddress(?string $macAddress) : self
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @return string[]|null
    */
    public function getDriverOpts() : ?\ArrayObject
    {
        return $this->driverOpts;
    }
    /**
    * DriverOpts is a mapping of driver options and values. These options
    are passed directly to the driver and are driver specific.
    
    *
    * @param string[]|null $driverOpts
    *
    * @return self
    */
    public function setDriverOpts(?\ArrayObject $driverOpts) : self
    {
        $this->driverOpts = $driverOpts;
        return $this;
    }
}