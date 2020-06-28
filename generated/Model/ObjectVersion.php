<?php

namespace Docker\API\Model;

class ObjectVersion
{
    /**
     * 
     *
     * @var int|null
     */
    protected $index;
    /**
     * 
     *
     * @return int|null
     */
    public function getIndex() : ?int
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param int|null $index
     *
     * @return self
     */
    public function setIndex(?int $index) : self
    {
        $this->index = $index;
        return $this;
    }
}