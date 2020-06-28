<?php

namespace Docker\API\Model;

class ManagerStatus
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $leader = false;
    /**
     * Reachability represents the reachability of a node.
     *
     * @var string|null
     */
    protected $reachability;
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @var string|null
     */
    protected $addr;
    /**
     * 
     *
     * @return bool|null
     */
    public function getLeader() : ?bool
    {
        return $this->leader;
    }
    /**
     * 
     *
     * @param bool|null $leader
     *
     * @return self
     */
    public function setLeader(?bool $leader) : self
    {
        $this->leader = $leader;
        return $this;
    }
    /**
     * Reachability represents the reachability of a node.
     *
     * @return string|null
     */
    public function getReachability() : ?string
    {
        return $this->reachability;
    }
    /**
     * Reachability represents the reachability of a node.
     *
     * @param string|null $reachability
     *
     * @return self
     */
    public function setReachability(?string $reachability) : self
    {
        $this->reachability = $reachability;
        return $this;
    }
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @return string|null
     */
    public function getAddr() : ?string
    {
        return $this->addr;
    }
    /**
     * The IP address and port at which the manager is reachable.
     *
     * @param string|null $addr
     *
     * @return self
     */
    public function setAddr(?string $addr) : self
    {
        $this->addr = $addr;
        return $this;
    }
}