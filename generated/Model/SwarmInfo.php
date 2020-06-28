<?php

namespace Docker\API\Model;

class SwarmInfo
{
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @var string|null
     */
    protected $nodeID = '';
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @var string|null
    */
    protected $nodeAddr = '';
    /**
     * Current local status of this node.
     *
     * @var string|null
     */
    protected $localNodeState = '';
    /**
     * 
     *
     * @var bool|null
     */
    protected $controlAvailable = false;
    /**
     * 
     *
     * @var string|null
     */
    protected $error = '';
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @var PeerNode[]|null
     */
    protected $remoteManagers;
    /**
     * Total number of nodes in the swarm.
     *
     * @var int|null
     */
    protected $nodes;
    /**
     * Total number of managers in the swarm.
     *
     * @var int|null
     */
    protected $managers;
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @var ClusterInfo|null
    */
    protected $cluster;
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @return string|null
     */
    public function getNodeID() : ?string
    {
        return $this->nodeID;
    }
    /**
     * Unique identifier of for this node in the swarm.
     *
     * @param string|null $nodeID
     *
     * @return self
     */
    public function setNodeID(?string $nodeID) : self
    {
        $this->nodeID = $nodeID;
        return $this;
    }
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @return string|null
    */
    public function getNodeAddr() : ?string
    {
        return $this->nodeAddr;
    }
    /**
    * IP address at which this node can be reached by other nodes in the
    swarm.
    
    *
    * @param string|null $nodeAddr
    *
    * @return self
    */
    public function setNodeAddr(?string $nodeAddr) : self
    {
        $this->nodeAddr = $nodeAddr;
        return $this;
    }
    /**
     * Current local status of this node.
     *
     * @return string|null
     */
    public function getLocalNodeState() : ?string
    {
        return $this->localNodeState;
    }
    /**
     * Current local status of this node.
     *
     * @param string|null $localNodeState
     *
     * @return self
     */
    public function setLocalNodeState(?string $localNodeState) : self
    {
        $this->localNodeState = $localNodeState;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getControlAvailable() : ?bool
    {
        return $this->controlAvailable;
    }
    /**
     * 
     *
     * @param bool|null $controlAvailable
     *
     * @return self
     */
    public function setControlAvailable(?bool $controlAvailable) : self
    {
        $this->controlAvailable = $controlAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @return PeerNode[]|null
     */
    public function getRemoteManagers() : ?array
    {
        return $this->remoteManagers;
    }
    /**
     * List of ID's and addresses of other managers in the swarm.
     *
     * @param PeerNode[]|null $remoteManagers
     *
     * @return self
     */
    public function setRemoteManagers(?array $remoteManagers) : self
    {
        $this->remoteManagers = $remoteManagers;
        return $this;
    }
    /**
     * Total number of nodes in the swarm.
     *
     * @return int|null
     */
    public function getNodes() : ?int
    {
        return $this->nodes;
    }
    /**
     * Total number of nodes in the swarm.
     *
     * @param int|null $nodes
     *
     * @return self
     */
    public function setNodes(?int $nodes) : self
    {
        $this->nodes = $nodes;
        return $this;
    }
    /**
     * Total number of managers in the swarm.
     *
     * @return int|null
     */
    public function getManagers() : ?int
    {
        return $this->managers;
    }
    /**
     * Total number of managers in the swarm.
     *
     * @param int|null $managers
     *
     * @return self
     */
    public function setManagers(?int $managers) : self
    {
        $this->managers = $managers;
        return $this;
    }
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @return ClusterInfo|null
    */
    public function getCluster() : ?ClusterInfo
    {
        return $this->cluster;
    }
    /**
    * ClusterInfo represents information about the swarm as is returned by the
    "/info" endpoint. Join-tokens are not included.
    
    *
    * @param ClusterInfo|null $cluster
    *
    * @return self
    */
    public function setCluster(?ClusterInfo $cluster) : self
    {
        $this->cluster = $cluster;
        return $this;
    }
}