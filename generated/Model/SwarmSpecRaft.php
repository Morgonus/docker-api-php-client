<?php

namespace Docker\API\Model;

class SwarmSpecRaft
{
    /**
     * The number of log entries between snapshots.
     *
     * @var int|null
     */
    protected $snapshotInterval;
    /**
     * The number of snapshots to keep beyond the current snapshot.
     *
     * @var int|null
     */
    protected $keepOldSnapshots;
    /**
     * The number of log entries to keep around to sync up slow followers after a snapshot is created.
     *
     * @var int|null
     */
    protected $logEntriesForSlowFollowers;
    /**
    * The number of ticks that a follower will wait for a message from the leader before becoming a candidate and starting an election. `ElectionTick` must be greater than `HeartbeatTick`.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @var int|null
    */
    protected $electionTick;
    /**
    * The number of ticks between heartbeats. Every HeartbeatTick ticks, the leader will send a heartbeat to the followers.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @var int|null
    */
    protected $heartbeatTick;
    /**
     * The number of log entries between snapshots.
     *
     * @return int|null
     */
    public function getSnapshotInterval() : ?int
    {
        return $this->snapshotInterval;
    }
    /**
     * The number of log entries between snapshots.
     *
     * @param int|null $snapshotInterval
     *
     * @return self
     */
    public function setSnapshotInterval(?int $snapshotInterval) : self
    {
        $this->snapshotInterval = $snapshotInterval;
        return $this;
    }
    /**
     * The number of snapshots to keep beyond the current snapshot.
     *
     * @return int|null
     */
    public function getKeepOldSnapshots() : ?int
    {
        return $this->keepOldSnapshots;
    }
    /**
     * The number of snapshots to keep beyond the current snapshot.
     *
     * @param int|null $keepOldSnapshots
     *
     * @return self
     */
    public function setKeepOldSnapshots(?int $keepOldSnapshots) : self
    {
        $this->keepOldSnapshots = $keepOldSnapshots;
        return $this;
    }
    /**
     * The number of log entries to keep around to sync up slow followers after a snapshot is created.
     *
     * @return int|null
     */
    public function getLogEntriesForSlowFollowers() : ?int
    {
        return $this->logEntriesForSlowFollowers;
    }
    /**
     * The number of log entries to keep around to sync up slow followers after a snapshot is created.
     *
     * @param int|null $logEntriesForSlowFollowers
     *
     * @return self
     */
    public function setLogEntriesForSlowFollowers(?int $logEntriesForSlowFollowers) : self
    {
        $this->logEntriesForSlowFollowers = $logEntriesForSlowFollowers;
        return $this;
    }
    /**
    * The number of ticks that a follower will wait for a message from the leader before becoming a candidate and starting an election. `ElectionTick` must be greater than `HeartbeatTick`.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @return int|null
    */
    public function getElectionTick() : ?int
    {
        return $this->electionTick;
    }
    /**
    * The number of ticks that a follower will wait for a message from the leader before becoming a candidate and starting an election. `ElectionTick` must be greater than `HeartbeatTick`.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @param int|null $electionTick
    *
    * @return self
    */
    public function setElectionTick(?int $electionTick) : self
    {
        $this->electionTick = $electionTick;
        return $this;
    }
    /**
    * The number of ticks between heartbeats. Every HeartbeatTick ticks, the leader will send a heartbeat to the followers.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @return int|null
    */
    public function getHeartbeatTick() : ?int
    {
        return $this->heartbeatTick;
    }
    /**
    * The number of ticks between heartbeats. Every HeartbeatTick ticks, the leader will send a heartbeat to the followers.
    
    A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
    
    *
    * @param int|null $heartbeatTick
    *
    * @return self
    */
    public function setHeartbeatTick(?int $heartbeatTick) : self
    {
        $this->heartbeatTick = $heartbeatTick;
        return $this;
    }
}