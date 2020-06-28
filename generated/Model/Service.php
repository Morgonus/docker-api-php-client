<?php

namespace Docker\API\Model;

class Service
{
    /**
     * 
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
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * User modifiable configuration for a service.
     *
     * @var ServiceSpec|null
     */
    protected $spec;
    /**
     * 
     *
     * @var ServiceEndpoint|null
     */
    protected $endpoint;
    /**
     * The status of a service update.
     *
     * @var ServiceUpdateStatus|null
     */
    protected $updateStatus;
    /**
     * 
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
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
     * User modifiable configuration for a service.
     *
     * @return ServiceSpec|null
     */
    public function getSpec() : ?ServiceSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable configuration for a service.
     *
     * @param ServiceSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?ServiceSpec $spec) : self
    {
        $this->spec = $spec;
        return $this;
    }
    /**
     * 
     *
     * @return ServiceEndpoint|null
     */
    public function getEndpoint() : ?ServiceEndpoint
    {
        return $this->endpoint;
    }
    /**
     * 
     *
     * @param ServiceEndpoint|null $endpoint
     *
     * @return self
     */
    public function setEndpoint(?ServiceEndpoint $endpoint) : self
    {
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * The status of a service update.
     *
     * @return ServiceUpdateStatus|null
     */
    public function getUpdateStatus() : ?ServiceUpdateStatus
    {
        return $this->updateStatus;
    }
    /**
     * The status of a service update.
     *
     * @param ServiceUpdateStatus|null $updateStatus
     *
     * @return self
     */
    public function setUpdateStatus(?ServiceUpdateStatus $updateStatus) : self
    {
        $this->updateStatus = $updateStatus;
        return $this;
    }
}