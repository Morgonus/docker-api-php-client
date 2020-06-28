<?php

namespace Docker\API\Model;

class Network
{
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $scope;
    /**
     * 
     *
     * @var string|null
     */
    protected $driver;
    /**
     * 
     *
     * @var bool|null
     */
    protected $enableIPv6;
    /**
     * 
     *
     * @var IPAM|null
     */
    protected $iPAM;
    /**
     * 
     *
     * @var bool|null
     */
    protected $internal;
    /**
     * 
     *
     * @var bool|null
     */
    protected $attachable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ingress;
    /**
     * 
     *
     * @var NetworkContainer[]|null
     */
    protected $containers;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * 
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * 
     *
     * @param string|null $driver
     *
     * @return self
     */
    public function setDriver(?string $driver) : self
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getEnableIPv6() : ?bool
    {
        return $this->enableIPv6;
    }
    /**
     * 
     *
     * @param bool|null $enableIPv6
     *
     * @return self
     */
    public function setEnableIPv6(?bool $enableIPv6) : self
    {
        $this->enableIPv6 = $enableIPv6;
        return $this;
    }
    /**
     * 
     *
     * @return IPAM|null
     */
    public function getIPAM() : ?IPAM
    {
        return $this->iPAM;
    }
    /**
     * 
     *
     * @param IPAM|null $iPAM
     *
     * @return self
     */
    public function setIPAM(?IPAM $iPAM) : self
    {
        $this->iPAM = $iPAM;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInternal() : ?bool
    {
        return $this->internal;
    }
    /**
     * 
     *
     * @param bool|null $internal
     *
     * @return self
     */
    public function setInternal(?bool $internal) : self
    {
        $this->internal = $internal;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAttachable() : ?bool
    {
        return $this->attachable;
    }
    /**
     * 
     *
     * @param bool|null $attachable
     *
     * @return self
     */
    public function setAttachable(?bool $attachable) : self
    {
        $this->attachable = $attachable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIngress() : ?bool
    {
        return $this->ingress;
    }
    /**
     * 
     *
     * @param bool|null $ingress
     *
     * @return self
     */
    public function setIngress(?bool $ingress) : self
    {
        $this->ingress = $ingress;
        return $this;
    }
    /**
     * 
     *
     * @return NetworkContainer[]|null
     */
    public function getContainers() : ?\ArrayObject
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param NetworkContainer[]|null $containers
     *
     * @return self
     */
    public function setContainers(?\ArrayObject $containers) : self
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param string[]|null $options
     *
     * @return self
     */
    public function setOptions(?\ArrayObject $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param string[]|null $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
}