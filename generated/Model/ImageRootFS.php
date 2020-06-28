<?php

namespace Docker\API\Model;

class ImageRootFS
{
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $layers;
    /**
     * 
     *
     * @var string|null
     */
    protected $baseLayer;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLayers() : ?array
    {
        return $this->layers;
    }
    /**
     * 
     *
     * @param string[]|null $layers
     *
     * @return self
     */
    public function setLayers(?array $layers) : self
    {
        $this->layers = $layers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBaseLayer() : ?string
    {
        return $this->baseLayer;
    }
    /**
     * 
     *
     * @param string|null $baseLayer
     *
     * @return self
     */
    public function setBaseLayer(?string $baseLayer) : self
    {
        $this->baseLayer = $baseLayer;
        return $this;
    }
}