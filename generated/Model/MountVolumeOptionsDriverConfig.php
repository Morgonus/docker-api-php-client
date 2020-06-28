<?php

namespace Docker\API\Model;

class MountVolumeOptionsDriverConfig
{
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string|null
     */
    protected $name;
    /**
     * key/value map of driver specific options.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * Name of the driver to use to create the volume.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the driver to use to create the volume.
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
     * key/value map of driver specific options.
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * key/value map of driver specific options.
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