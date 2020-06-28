<?php

namespace Docker\API\Model;

class ProgressDetail
{
    /**
     * 
     *
     * @var int|null
     */
    protected $current;
    /**
     * 
     *
     * @var int|null
     */
    protected $total;
    /**
     * 
     *
     * @return int|null
     */
    public function getCurrent() : ?int
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param int|null $current
     *
     * @return self
     */
    public function setCurrent(?int $current) : self
    {
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
}