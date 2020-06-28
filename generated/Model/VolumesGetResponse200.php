<?php

namespace Docker\API\Model;

class VolumesGetResponse200
{
    /**
     * List of volumes
     *
     * @var Volume[]|null
     */
    protected $volumes;
    /**
     * Warnings that occurred when fetching the list of volumes
     *
     * @var string[]|null
     */
    protected $warnings;
    /**
     * List of volumes
     *
     * @return Volume[]|null
     */
    public function getVolumes() : ?array
    {
        return $this->volumes;
    }
    /**
     * List of volumes
     *
     * @param Volume[]|null $volumes
     *
     * @return self
     */
    public function setVolumes(?array $volumes) : self
    {
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * Warnings that occurred when fetching the list of volumes
     *
     * @return string[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * Warnings that occurred when fetching the list of volumes
     *
     * @param string[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}