<?php

namespace Docker\API\Model;

class Driver
{
    /**
     * Name of the driver.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Key/value map of driver-specific options.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * Name of the driver.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the driver.
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
     * Key/value map of driver-specific options.
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * Key/value map of driver-specific options.
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