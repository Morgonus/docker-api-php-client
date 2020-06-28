<?php

namespace Docker\API\Model;

class PluginConfigLinux
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $capabilities;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowAllDevices;
    /**
     * 
     *
     * @var PluginDevice[]|null
     */
    protected $devices;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCapabilities() : ?array
    {
        return $this->capabilities;
    }
    /**
     * 
     *
     * @param string[]|null $capabilities
     *
     * @return self
     */
    public function setCapabilities(?array $capabilities) : self
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowAllDevices() : ?bool
    {
        return $this->allowAllDevices;
    }
    /**
     * 
     *
     * @param bool|null $allowAllDevices
     *
     * @return self
     */
    public function setAllowAllDevices(?bool $allowAllDevices) : self
    {
        $this->allowAllDevices = $allowAllDevices;
        return $this;
    }
    /**
     * 
     *
     * @return PluginDevice[]|null
     */
    public function getDevices() : ?array
    {
        return $this->devices;
    }
    /**
     * 
     *
     * @param PluginDevice[]|null $devices
     *
     * @return self
     */
    public function setDevices(?array $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
}