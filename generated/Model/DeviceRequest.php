<?php

namespace Docker\API\Model;

class DeviceRequest
{
    /**
     * 
     *
     * @var string|null
     */
    protected $driver;
    /**
     * 
     *
     * @var int|null
     */
    protected $count;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $deviceIDs;
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @var string[][]|null
     */
    protected $capabilities;
    /**
    * Driver-specific options, specified as a key/value pairs. These options
    are passed directly to the driver.
    
    *
    * @var string[]|null
    */
    protected $options;
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
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDeviceIDs() : ?array
    {
        return $this->deviceIDs;
    }
    /**
     * 
     *
     * @param string[]|null $deviceIDs
     *
     * @return self
     */
    public function setDeviceIDs(?array $deviceIDs) : self
    {
        $this->deviceIDs = $deviceIDs;
        return $this;
    }
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @return string[][]|null
     */
    public function getCapabilities() : ?array
    {
        return $this->capabilities;
    }
    /**
     * A list of capabilities; an OR list of AND lists of capabilities.
     *
     * @param string[][]|null $capabilities
     *
     * @return self
     */
    public function setCapabilities(?array $capabilities) : self
    {
        $this->capabilities = $capabilities;
        return $this;
    }
    /**
    * Driver-specific options, specified as a key/value pairs. These options
    are passed directly to the driver.
    
    *
    * @return string[]|null
    */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
    * Driver-specific options, specified as a key/value pairs. These options
    are passed directly to the driver.
    
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
}