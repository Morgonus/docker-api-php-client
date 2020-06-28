<?php

namespace Docker\API\Model;

class MountVolumeOptions
{
    /**
     * Populate volume with data from the target.
     *
     * @var bool|null
     */
    protected $noCopy = false;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * Map of driver specific options
     *
     * @var MountVolumeOptionsDriverConfig|null
     */
    protected $driverConfig;
    /**
     * Populate volume with data from the target.
     *
     * @return bool|null
     */
    public function getNoCopy() : ?bool
    {
        return $this->noCopy;
    }
    /**
     * Populate volume with data from the target.
     *
     * @param bool|null $noCopy
     *
     * @return self
     */
    public function setNoCopy(?bool $noCopy) : self
    {
        $this->noCopy = $noCopy;
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
    /**
     * Map of driver specific options
     *
     * @return MountVolumeOptionsDriverConfig|null
     */
    public function getDriverConfig() : ?MountVolumeOptionsDriverConfig
    {
        return $this->driverConfig;
    }
    /**
     * Map of driver specific options
     *
     * @param MountVolumeOptionsDriverConfig|null $driverConfig
     *
     * @return self
     */
    public function setDriverConfig(?MountVolumeOptionsDriverConfig $driverConfig) : self
    {
        $this->driverConfig = $driverConfig;
        return $this;
    }
}