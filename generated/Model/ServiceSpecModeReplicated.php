<?php

namespace Docker\API\Model;

class ServiceSpecModeReplicated
{
    /**
     * 
     *
     * @var int|null
     */
    protected $replicas;
    /**
     * 
     *
     * @return int|null
     */
    public function getReplicas() : ?int
    {
        return $this->replicas;
    }
    /**
     * 
     *
     * @param int|null $replicas
     *
     * @return self
     */
    public function setReplicas(?int $replicas) : self
    {
        $this->replicas = $replicas;
        return $this;
    }
}