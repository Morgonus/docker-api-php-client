<?php

namespace Docker\API\Model;

class SwarmInitPostBody
{
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @var string|null
     */
    protected $listenAddr;
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @var string|null
     */
    protected $advertiseAddr;
    /**
    * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,
    or an interface, like `eth0`. If `DataPathAddr` is unspecified, the same address as `AdvertiseAddr`
    is used.
    
    The `DataPathAddr` specifies the address that global scope network drivers will publish towards other
    nodes in order to reach the containers running on this node. Using this parameter it is possible to
    separate the container data traffic from the management traffic of the cluster.
    
    *
    * @var string|null
    */
    protected $dataPathAddr;
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @var int|null
    */
    protected $dataPathPort;
    /**
     * Default Address Pool specifies default subnet pools for global scope networks.
     *
     * @var string[]|null
     */
    protected $defaultAddrPool;
    /**
     * Force creation of a new swarm.
     *
     * @var bool|null
     */
    protected $forceNewCluster;
    /**
     * SubnetSize specifies the subnet size of the networks created from the default subnet pool
     *
     * @var int|null
     */
    protected $subnetSize;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @return string|null
     */
    public function getListenAddr() : ?string
    {
        return $this->listenAddr;
    }
    /**
     * Listen address used for inter-manager communication, as well as determining the networking interface used for the VXLAN Tunnel Endpoint (VTEP). This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the default swarm listening port is used.
     *
     * @param string|null $listenAddr
     *
     * @return self
     */
    public function setListenAddr(?string $listenAddr) : self
    {
        $this->listenAddr = $listenAddr;
        return $this;
    }
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @return string|null
     */
    public function getAdvertiseAddr() : ?string
    {
        return $this->advertiseAddr;
    }
    /**
     * Externally reachable address advertised to other nodes. This can either be an address/port combination in the form `192.168.1.1:4567`, or an interface followed by a port number, like `eth0:4567`. If the port number is omitted, the port number from the listen address is used. If `AdvertiseAddr` is not specified, it will be automatically detected when possible.
     *
     * @param string|null $advertiseAddr
     *
     * @return self
     */
    public function setAdvertiseAddr(?string $advertiseAddr) : self
    {
        $this->advertiseAddr = $advertiseAddr;
        return $this;
    }
    /**
    * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,
    or an interface, like `eth0`. If `DataPathAddr` is unspecified, the same address as `AdvertiseAddr`
    is used.
    
    The `DataPathAddr` specifies the address that global scope network drivers will publish towards other
    nodes in order to reach the containers running on this node. Using this parameter it is possible to
    separate the container data traffic from the management traffic of the cluster.
    
    *
    * @return string|null
    */
    public function getDataPathAddr() : ?string
    {
        return $this->dataPathAddr;
    }
    /**
    * Address or interface to use for data path traffic (format: `<ip|interface>`), for example,  `192.168.1.1`,
    or an interface, like `eth0`. If `DataPathAddr` is unspecified, the same address as `AdvertiseAddr`
    is used.
    
    The `DataPathAddr` specifies the address that global scope network drivers will publish towards other
    nodes in order to reach the containers running on this node. Using this parameter it is possible to
    separate the container data traffic from the management traffic of the cluster.
    
    *
    * @param string|null $dataPathAddr
    *
    * @return self
    */
    public function setDataPathAddr(?string $dataPathAddr) : self
    {
        $this->dataPathAddr = $dataPathAddr;
        return $this;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @return int|null
    */
    public function getDataPathPort() : ?int
    {
        return $this->dataPathPort;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    if no port is set or is set to 0, default port 4789 will be used.
    
    *
    * @param int|null $dataPathPort
    *
    * @return self
    */
    public function setDataPathPort(?int $dataPathPort) : self
    {
        $this->dataPathPort = $dataPathPort;
        return $this;
    }
    /**
     * Default Address Pool specifies default subnet pools for global scope networks.
     *
     * @return string[]|null
     */
    public function getDefaultAddrPool() : ?array
    {
        return $this->defaultAddrPool;
    }
    /**
     * Default Address Pool specifies default subnet pools for global scope networks.
     *
     * @param string[]|null $defaultAddrPool
     *
     * @return self
     */
    public function setDefaultAddrPool(?array $defaultAddrPool) : self
    {
        $this->defaultAddrPool = $defaultAddrPool;
        return $this;
    }
    /**
     * Force creation of a new swarm.
     *
     * @return bool|null
     */
    public function getForceNewCluster() : ?bool
    {
        return $this->forceNewCluster;
    }
    /**
     * Force creation of a new swarm.
     *
     * @param bool|null $forceNewCluster
     *
     * @return self
     */
    public function setForceNewCluster(?bool $forceNewCluster) : self
    {
        $this->forceNewCluster = $forceNewCluster;
        return $this;
    }
    /**
     * SubnetSize specifies the subnet size of the networks created from the default subnet pool
     *
     * @return int|null
     */
    public function getSubnetSize() : ?int
    {
        return $this->subnetSize;
    }
    /**
     * SubnetSize specifies the subnet size of the networks created from the default subnet pool
     *
     * @param int|null $subnetSize
     *
     * @return self
     */
    public function setSubnetSize(?int $subnetSize) : self
    {
        $this->subnetSize = $subnetSize;
        return $this;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @return SwarmSpec|null
     */
    public function getSpec() : ?SwarmSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable swarm configuration.
     *
     * @param SwarmSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?SwarmSpec $spec) : self
    {
        $this->spec = $spec;
        return $this;
    }
}