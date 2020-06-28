<?php

namespace Docker\API\Model;

class IPAM
{
    /**
     * Name of the IPAM driver to use.
     *
     * @var string|null
     */
    protected $driver = 'default';
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @var string[][]|null
     */
    protected $config;
    /**
     * Driver-specific options, specified as a map.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * Name of the IPAM driver to use.
     *
     * @return string|null
     */
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * Name of the IPAM driver to use.
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
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @return string[][]|null
     */
    public function getConfig() : ?array
    {
        return $this->config;
    }
    /**
     * List of IPAM configuration options, specified as a map: `{"Subnet": <CIDR>, "IPRange": <CIDR>, "Gateway": <IP address>, "AuxAddress": <device_name:IP address>}`
     *
     * @param string[][]|null $config
     *
     * @return self
     */
    public function setConfig(?array $config) : self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * Driver-specific options, specified as a map.
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * Driver-specific options, specified as a map.
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