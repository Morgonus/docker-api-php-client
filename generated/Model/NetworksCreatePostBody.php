<?php

namespace Docker\API\Model;

class NetworksCreatePostBody
{
    /**
     * The network's name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Check for networks with duplicate names. Since Network is primarily keyed based on a random ID and not on the name, and network name is strictly a user-friendly alias to the network which is uniquely identified using ID, there is no guaranteed way to check for duplicates. CheckDuplicate is there to provide a best effort checking of any networks which has the same name but it is not guaranteed to catch all name collisions.
     *
     * @var bool|null
     */
    protected $checkDuplicate;
    /**
     * Name of the network driver plugin to use.
     *
     * @var string|null
     */
    protected $driver = 'bridge';
    /**
     * Restrict external access to the network.
     *
     * @var bool|null
     */
    protected $internal;
    /**
     * Globally scoped network is manually attachable by regular containers from workers in swarm mode.
     *
     * @var bool|null
     */
    protected $attachable;
    /**
     * Ingress network is the network which provides the routing-mesh in swarm mode.
     *
     * @var bool|null
     */
    protected $ingress;
    /**
     * 
     *
     * @var IPAM|null
     */
    protected $iPAM;
    /**
     * Enable IPv6 on the network.
     *
     * @var bool|null
     */
    protected $enableIPv6;
    /**
     * Network specific options to be used by the drivers.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * The network's name.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The network's name.
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
     * Check for networks with duplicate names. Since Network is primarily keyed based on a random ID and not on the name, and network name is strictly a user-friendly alias to the network which is uniquely identified using ID, there is no guaranteed way to check for duplicates. CheckDuplicate is there to provide a best effort checking of any networks which has the same name but it is not guaranteed to catch all name collisions.
     *
     * @return bool|null
     */
    public function getCheckDuplicate() : ?bool
    {
        return $this->checkDuplicate;
    }
    /**
     * Check for networks with duplicate names. Since Network is primarily keyed based on a random ID and not on the name, and network name is strictly a user-friendly alias to the network which is uniquely identified using ID, there is no guaranteed way to check for duplicates. CheckDuplicate is there to provide a best effort checking of any networks which has the same name but it is not guaranteed to catch all name collisions.
     *
     * @param bool|null $checkDuplicate
     *
     * @return self
     */
    public function setCheckDuplicate(?bool $checkDuplicate) : self
    {
        $this->checkDuplicate = $checkDuplicate;
        return $this;
    }
    /**
     * Name of the network driver plugin to use.
     *
     * @return string|null
     */
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * Name of the network driver plugin to use.
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
     * Restrict external access to the network.
     *
     * @return bool|null
     */
    public function getInternal() : ?bool
    {
        return $this->internal;
    }
    /**
     * Restrict external access to the network.
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
     * Globally scoped network is manually attachable by regular containers from workers in swarm mode.
     *
     * @return bool|null
     */
    public function getAttachable() : ?bool
    {
        return $this->attachable;
    }
    /**
     * Globally scoped network is manually attachable by regular containers from workers in swarm mode.
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
     * Ingress network is the network which provides the routing-mesh in swarm mode.
     *
     * @return bool|null
     */
    public function getIngress() : ?bool
    {
        return $this->ingress;
    }
    /**
     * Ingress network is the network which provides the routing-mesh in swarm mode.
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
     * Enable IPv6 on the network.
     *
     * @return bool|null
     */
    public function getEnableIPv6() : ?bool
    {
        return $this->enableIPv6;
    }
    /**
     * Enable IPv6 on the network.
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
     * Network specific options to be used by the drivers.
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * Network specific options to be used by the drivers.
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
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
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