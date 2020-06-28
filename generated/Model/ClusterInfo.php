<?php

namespace Docker\API\Model;

class ClusterInfo
{
    /**
     * The ID of the swarm.
     *
     * @var string|null
     */
    protected $iD;
    /**
    * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.
    
    *
    * @var ObjectVersion|null
    */
    protected $version;
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $createdAt;
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $updatedAt;
    /**
     * User modifiable swarm configuration.
     *
     * @var SwarmSpec|null
     */
    protected $spec;
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate
     *
     * @var TLSInfo|null
     */
    protected $tLSInfo;
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @var bool|null
     */
    protected $rootRotationInProgress;
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    If no port is set or is set to 0, the default port (4789) is used.
    
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
     * SubnetSize specifies the subnet size of the networks created from the default subnet pool
     *
     * @var int|null
     */
    protected $subnetSize;
    /**
     * The ID of the swarm.
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the swarm.
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.
    
    *
    * @return ObjectVersion|null
    */
    public function getVersion() : ?ObjectVersion
    {
        return $this->version;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed to avoid conflicting writes.
    The client must send the version number along with the modified specification when updating these objects.
    This approach ensures safe concurrency and determinism in that the change on the object
    may not be applied if the version number has changed from the last read. In other words,
    if two update requests specify the same base version, only one of the requests can succeed.
    As a result, two separate update requests that happen at the same time will not
    unintentionally overwrite each other.
    
    *
    * @param ObjectVersion|null $version
    *
    * @return self
    */
    public function setVersion(?ObjectVersion $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
    * Date and time at which the swarm was initialised in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $createdAt
    *
    * @return self
    */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
    * Date and time at which the swarm was last updated in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $updatedAt
    *
    * @return self
    */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
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
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate
     *
     * @return TLSInfo|null
     */
    public function getTLSInfo() : ?TLSInfo
    {
        return $this->tLSInfo;
    }
    /**
     * Information about the issuer of leaf TLS certificates and the trusted root CA certificate
     *
     * @param TLSInfo|null $tLSInfo
     *
     * @return self
     */
    public function setTLSInfo(?TLSInfo $tLSInfo) : self
    {
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @return bool|null
     */
    public function getRootRotationInProgress() : ?bool
    {
        return $this->rootRotationInProgress;
    }
    /**
     * Whether there is currently a root CA rotation in progress for the swarm
     *
     * @param bool|null $rootRotationInProgress
     *
     * @return self
     */
    public function setRootRotationInProgress(?bool $rootRotationInProgress) : self
    {
        $this->rootRotationInProgress = $rootRotationInProgress;
        return $this;
    }
    /**
    * DataPathPort specifies the data path port number for data traffic.
    Acceptable port range is 1024 to 49151.
    If no port is set or is set to 0, the default port (4789) is used.
    
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
    If no port is set or is set to 0, the default port (4789) is used.
    
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
}