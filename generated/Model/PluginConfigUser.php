<?php

namespace Docker\API\Model;

class PluginConfigUser
{
    /**
     * 
     *
     * @var int|null
     */
    protected $uID;
    /**
     * 
     *
     * @var int|null
     */
    protected $gID;
    /**
     * 
     *
     * @return int|null
     */
    public function getUID() : ?int
    {
        return $this->uID;
    }
    /**
     * 
     *
     * @param int|null $uID
     *
     * @return self
     */
    public function setUID(?int $uID) : self
    {
        $this->uID = $uID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGID() : ?int
    {
        return $this->gID;
    }
    /**
     * 
     *
     * @param int|null $gID
     *
     * @return self
     */
    public function setGID(?int $gID) : self
    {
        $this->gID = $gID;
        return $this;
    }
}