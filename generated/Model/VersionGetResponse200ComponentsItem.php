<?php

namespace Docker\API\Model;

class VersionGetResponse200ComponentsItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @var VersionGetResponse200ComponentsItemDetails|null
     */
    protected $details;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return VersionGetResponse200ComponentsItemDetails|null
     */
    public function getDetails() : ?VersionGetResponse200ComponentsItemDetails
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param VersionGetResponse200ComponentsItemDetails|null $details
     *
     * @return self
     */
    public function setDetails(?VersionGetResponse200ComponentsItemDetails $details) : self
    {
        $this->details = $details;
        return $this;
    }
}