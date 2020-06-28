<?php

namespace Docker\API\Model;

class Health
{
    /**
    * Status is one of `none`, `starting`, `healthy` or `unhealthy`
    
    - "none"      Indicates there is no healthcheck
    - "starting"  Starting indicates that the container is not yet ready
    - "healthy"   Healthy indicates that the container is running correctly
    - "unhealthy" Unhealthy indicates that the container has a problem
    
    *
    * @var string|null
    */
    protected $status;
    /**
     * FailingStreak is the number of consecutive failures
     *
     * @var int|null
     */
    protected $failingStreak;
    /**
     * Log contains the last few results (oldest first)
     *
     * @var HealthcheckResult[]|null
     */
    protected $log;
    /**
    * Status is one of `none`, `starting`, `healthy` or `unhealthy`
    
    - "none"      Indicates there is no healthcheck
    - "starting"  Starting indicates that the container is not yet ready
    - "healthy"   Healthy indicates that the container is running correctly
    - "unhealthy" Unhealthy indicates that the container has a problem
    
    *
    * @return string|null
    */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
    * Status is one of `none`, `starting`, `healthy` or `unhealthy`
    
    - "none"      Indicates there is no healthcheck
    - "starting"  Starting indicates that the container is not yet ready
    - "healthy"   Healthy indicates that the container is running correctly
    - "unhealthy" Unhealthy indicates that the container has a problem
    
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
     * FailingStreak is the number of consecutive failures
     *
     * @return int|null
     */
    public function getFailingStreak() : ?int
    {
        return $this->failingStreak;
    }
    /**
     * FailingStreak is the number of consecutive failures
     *
     * @param int|null $failingStreak
     *
     * @return self
     */
    public function setFailingStreak(?int $failingStreak) : self
    {
        $this->failingStreak = $failingStreak;
        return $this;
    }
    /**
     * Log contains the last few results (oldest first)
     *
     * @return HealthcheckResult[]|null
     */
    public function getLog() : ?array
    {
        return $this->log;
    }
    /**
     * Log contains the last few results (oldest first)
     *
     * @param HealthcheckResult[]|null $log
     *
     * @return self
     */
    public function setLog(?array $log) : self
    {
        $this->log = $log;
        return $this;
    }
}