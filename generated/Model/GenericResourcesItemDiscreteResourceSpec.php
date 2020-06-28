<?php

namespace Docker\API\Model;

class GenericResourcesItemDiscreteResourceSpec
{
    /**
     * 
     *
     * @var string|null
     */
    protected $kind;
    /**
     * 
     *
     * @var int|null
     */
    protected $value;
    /**
     * 
     *
     * @return string|null
     */
    public function getKind() : ?string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string|null $kind
     *
     * @return self
     */
    public function setKind(?string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValue() : ?int
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value) : self
    {
        $this->value = $value;
        return $this;
    }
}