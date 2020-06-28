<?php

namespace Docker\API\Model;

class SystemDfGetResponse200
{
    /**
     * 
     *
     * @var int|null
     */
    protected $layersSize;
    /**
     * 
     *
     * @var ImageSummary[]|null
     */
    protected $images;
    /**
     * 
     *
     * @var ContainerSummaryItem[][]|null
     */
    protected $containers;
    /**
     * 
     *
     * @var Volume[]|null
     */
    protected $volumes;
    /**
     * 
     *
     * @var BuildCache[]|null
     */
    protected $buildCache;
    /**
     * 
     *
     * @return int|null
     */
    public function getLayersSize() : ?int
    {
        return $this->layersSize;
    }
    /**
     * 
     *
     * @param int|null $layersSize
     *
     * @return self
     */
    public function setLayersSize(?int $layersSize) : self
    {
        $this->layersSize = $layersSize;
        return $this;
    }
    /**
     * 
     *
     * @return ImageSummary[]|null
     */
    public function getImages() : ?array
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param ImageSummary[]|null $images
     *
     * @return self
     */
    public function setImages(?array $images) : self
    {
        $this->images = $images;
        return $this;
    }
    /**
     * 
     *
     * @return ContainerSummaryItem[][]|null
     */
    public function getContainers() : ?array
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param ContainerSummaryItem[][]|null $containers
     *
     * @return self
     */
    public function setContainers(?array $containers) : self
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * 
     *
     * @return Volume[]|null
     */
    public function getVolumes() : ?array
    {
        return $this->volumes;
    }
    /**
     * 
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
     * 
     *
     * @return BuildCache[]|null
     */
    public function getBuildCache() : ?array
    {
        return $this->buildCache;
    }
    /**
     * 
     *
     * @param BuildCache[]|null $buildCache
     *
     * @return self
     */
    public function setBuildCache(?array $buildCache) : self
    {
        $this->buildCache = $buildCache;
        return $this;
    }
}