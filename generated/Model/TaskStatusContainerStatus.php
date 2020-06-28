<?php

namespace Docker\API\Model;

class TaskStatusContainerStatus
{
    /**
     * 
     *
     * @var string|null
     */
    protected $containerID;
    /**
     * 
     *
     * @var int|null
     */
    protected $pID;
    /**
     * 
     *
     * @var int|null
     */
    protected $exitCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getContainerID() : ?string
    {
        return $this->containerID;
    }
    /**
     * 
     *
     * @param string|null $containerID
     *
     * @return self
     */
    public function setContainerID(?string $containerID) : self
    {
        $this->containerID = $containerID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPID() : ?int
    {
        return $this->pID;
    }
    /**
     * 
     *
     * @param int|null $pID
     *
     * @return self
     */
    public function setPID(?int $pID) : self
    {
        $this->pID = $pID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    /**
     * 
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
}