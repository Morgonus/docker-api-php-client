<?php

namespace Docker\API\Model;

class DistributionNameJsonGetResponse200PlatformsItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * 
     *
     * @var string|null
     */
    protected $oS;
    /**
     * 
     *
     * @var string|null
     */
    protected $oSVersion;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $oSFeatures;
    /**
     * 
     *
     * @var string|null
     */
    protected $variant;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $features;
    /**
     * 
     *
     * @return string|null
     */
    public function getArchitecture() : ?string
    {
        return $this->architecture;
    }
    /**
     * 
     *
     * @param string|null $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture) : self
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOS() : ?string
    {
        return $this->oS;
    }
    /**
     * 
     *
     * @param string|null $oS
     *
     * @return self
     */
    public function setOS(?string $oS) : self
    {
        $this->oS = $oS;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOSVersion() : ?string
    {
        return $this->oSVersion;
    }
    /**
     * 
     *
     * @param string|null $oSVersion
     *
     * @return self
     */
    public function setOSVersion(?string $oSVersion) : self
    {
        $this->oSVersion = $oSVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getOSFeatures() : ?array
    {
        return $this->oSFeatures;
    }
    /**
     * 
     *
     * @param string[]|null $oSFeatures
     *
     * @return self
     */
    public function setOSFeatures(?array $oSFeatures) : self
    {
        $this->oSFeatures = $oSFeatures;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVariant() : ?string
    {
        return $this->variant;
    }
    /**
     * 
     *
     * @param string|null $variant
     *
     * @return self
     */
    public function setVariant(?string $variant) : self
    {
        $this->variant = $variant;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getFeatures() : ?array
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param string[]|null $features
     *
     * @return self
     */
    public function setFeatures(?array $features) : self
    {
        $this->features = $features;
        return $this;
    }
}