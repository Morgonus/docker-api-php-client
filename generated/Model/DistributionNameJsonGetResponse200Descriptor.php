<?php

namespace Docker\API\Model;

class DistributionNameJsonGetResponse200Descriptor
{
    /**
     * 
     *
     * @var string|null
     */
    protected $mediaType;
    /**
     * 
     *
     * @var int|null
     */
    protected $size;
    /**
     * 
     *
     * @var string|null
     */
    protected $digest;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $uRLs;
    /**
     * 
     *
     * @return string|null
     */
    public function getMediaType() : ?string
    {
        return $this->mediaType;
    }
    /**
     * 
     *
     * @param string|null $mediaType
     *
     * @return self
     */
    public function setMediaType(?string $mediaType) : self
    {
        $this->mediaType = $mediaType;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDigest() : ?string
    {
        return $this->digest;
    }
    /**
     * 
     *
     * @param string|null $digest
     *
     * @return self
     */
    public function setDigest(?string $digest) : self
    {
        $this->digest = $digest;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getURLs() : ?array
    {
        return $this->uRLs;
    }
    /**
     * 
     *
     * @param string[]|null $uRLs
     *
     * @return self
     */
    public function setURLs(?array $uRLs) : self
    {
        $this->uRLs = $uRLs;
        return $this;
    }
}