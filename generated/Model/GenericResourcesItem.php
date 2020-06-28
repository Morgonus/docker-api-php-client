<?php

namespace Docker\API\Model;

class GenericResourcesItem
{
    /**
     * 
     *
     * @var GenericResourcesItemNamedResourceSpec|null
     */
    protected $namedResourceSpec;
    /**
     * 
     *
     * @var GenericResourcesItemDiscreteResourceSpec|null
     */
    protected $discreteResourceSpec;
    /**
     * 
     *
     * @return GenericResourcesItemNamedResourceSpec|null
     */
    public function getNamedResourceSpec() : ?GenericResourcesItemNamedResourceSpec
    {
        return $this->namedResourceSpec;
    }
    /**
     * 
     *
     * @param GenericResourcesItemNamedResourceSpec|null $namedResourceSpec
     *
     * @return self
     */
    public function setNamedResourceSpec(?GenericResourcesItemNamedResourceSpec $namedResourceSpec) : self
    {
        $this->namedResourceSpec = $namedResourceSpec;
        return $this;
    }
    /**
     * 
     *
     * @return GenericResourcesItemDiscreteResourceSpec|null
     */
    public function getDiscreteResourceSpec() : ?GenericResourcesItemDiscreteResourceSpec
    {
        return $this->discreteResourceSpec;
    }
    /**
     * 
     *
     * @param GenericResourcesItemDiscreteResourceSpec|null $discreteResourceSpec
     *
     * @return self
     */
    public function setDiscreteResourceSpec(?GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec) : self
    {
        $this->discreteResourceSpec = $discreteResourceSpec;
        return $this;
    }
}