<?php

namespace Docker\API\Model;

class ResourceObject
{
    /**
     * 
     *
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * 
     *
     * @var int|null
     */
    protected $memoryBytes;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @var GenericResourcesItem[]|null
     */
    protected $genericResources;
    /**
     * 
     *
     * @return int|null
     */
    public function getNanoCPUs() : ?int
    {
        return $this->nanoCPUs;
    }
    /**
     * 
     *
     * @param int|null $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs) : self
    {
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMemoryBytes() : ?int
    {
        return $this->memoryBytes;
    }
    /**
     * 
     *
     * @param int|null $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes) : self
    {
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @return GenericResourcesItem[]|null
     */
    public function getGenericResources() : ?array
    {
        return $this->genericResources;
    }
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @param GenericResourcesItem[]|null $genericResources
     *
     * @return self
     */
    public function setGenericResources(?array $genericResources) : self
    {
        $this->genericResources = $genericResources;
        return $this;
    }
}