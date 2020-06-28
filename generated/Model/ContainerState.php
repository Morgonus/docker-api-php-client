<?php

namespace Docker\API\Model;

class ContainerState
{
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @var string|null
    */
    protected $status;
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @var bool|null
    */
    protected $running;
    /**
     * Whether this container is paused.
     *
     * @var bool|null
     */
    protected $paused;
    /**
     * Whether this container is restarting.
     *
     * @var bool|null
     */
    protected $restarting;
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @var bool|null
     */
    protected $oOMKilled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $dead;
    /**
     * The process ID of this container
     *
     * @var int|null
     */
    protected $pid;
    /**
     * The last exit code of this container
     *
     * @var int|null
     */
    protected $exitCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * The time when this container was last started.
     *
     * @var string|null
     */
    protected $startedAt;
    /**
     * The time when this container last exited.
     *
     * @var string|null
     */
    protected $finishedAt;
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @var Health|null
     */
    protected $health;
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @return string|null
    */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @param string|null $status
    *
    * @return self
    */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @return bool|null
    */
    public function getRunning() : ?bool
    {
        return $this->running;
    }
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @param bool|null $running
    *
    * @return self
    */
    public function setRunning(?bool $running) : self
    {
        $this->running = $running;
        return $this;
    }
    /**
     * Whether this container is paused.
     *
     * @return bool|null
     */
    public function getPaused() : ?bool
    {
        return $this->paused;
    }
    /**
     * Whether this container is paused.
     *
     * @param bool|null $paused
     *
     * @return self
     */
    public function setPaused(?bool $paused) : self
    {
        $this->paused = $paused;
        return $this;
    }
    /**
     * Whether this container is restarting.
     *
     * @return bool|null
     */
    public function getRestarting() : ?bool
    {
        return $this->restarting;
    }
    /**
     * Whether this container is restarting.
     *
     * @param bool|null $restarting
     *
     * @return self
     */
    public function setRestarting(?bool $restarting) : self
    {
        $this->restarting = $restarting;
        return $this;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @return bool|null
     */
    public function getOOMKilled() : ?bool
    {
        return $this->oOMKilled;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @param bool|null $oOMKilled
     *
     * @return self
     */
    public function setOOMKilled(?bool $oOMKilled) : self
    {
        $this->oOMKilled = $oOMKilled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getDead() : ?bool
    {
        return $this->dead;
    }
    /**
     * 
     *
     * @param bool|null $dead
     *
     * @return self
     */
    public function setDead(?bool $dead) : self
    {
        $this->dead = $dead;
        return $this;
    }
    /**
     * The process ID of this container
     *
     * @return int|null
     */
    public function getPid() : ?int
    {
        return $this->pid;
    }
    /**
     * The process ID of this container
     *
     * @param int|null $pid
     *
     * @return self
     */
    public function setPid(?int $pid) : self
    {
        $this->pid = $pid;
        return $this;
    }
    /**
     * The last exit code of this container
     *
     * @return int|null
     */
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    /**
     * The last exit code of this container
     *
     * @param int|null $exitCode
     *
     * @return self
     */
    public function setExitCode(?int $exitCode) : self
    {
        $this->exitCode = $exitCode;
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
     * The time when this container was last started.
     *
     * @return string|null
     */
    public function getStartedAt() : ?string
    {
        return $this->startedAt;
    }
    /**
     * The time when this container was last started.
     *
     * @param string|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?string $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The time when this container last exited.
     *
     * @return string|null
     */
    public function getFinishedAt() : ?string
    {
        return $this->finishedAt;
    }
    /**
     * The time when this container last exited.
     *
     * @param string|null $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(?string $finishedAt) : self
    {
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @return Health|null
     */
    public function getHealth() : ?Health
    {
        return $this->health;
    }
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @param Health|null $health
     *
     * @return self
     */
    public function setHealth(?Health $health) : self
    {
        $this->health = $health;
        return $this;
    }
}