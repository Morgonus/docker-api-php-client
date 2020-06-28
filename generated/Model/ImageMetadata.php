<?php

namespace Docker\API\Model;

class ImageMetadata
{
    /**
     * 
     *
     * @var string|null
     */
    protected $lastTagTime;
    /**
     * 
     *
     * @return string|null
     */
    public function getLastTagTime() : ?string
    {
        return $this->lastTagTime;
    }
    /**
     * 
     *
     * @param string|null $lastTagTime
     *
     * @return self
     */
    public function setLastTagTime(?string $lastTagTime) : self
    {
        $this->lastTagTime = $lastTagTime;
        return $this;
    }
}