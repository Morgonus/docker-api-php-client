<?php

namespace Docker\API\Model;

class ServiceSpecRollbackConfig
{
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means unlimited parallelism).
     *
     * @var int|null
     */
    protected $parallelism;
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     *
     * @var int|null
     */
    protected $delay;
    /**
     * Action to take if an rolled back task fails to run, or stops running during the rollback.
     *
     * @var string|null
     */
    protected $failureAction;
    /**
     * Amount of time to monitor each rolled back task for failures, in nanoseconds.
     *
     * @var int|null
     */
    protected $monitor;
    /**
     * The fraction of tasks that may fail during a rollback before the failure action is invoked, specified as a floating point number between 0 and 1.
     *
     * @var float|null
     */
    protected $maxFailureRatio;
    /**
     * The order of operations when rolling back a task. Either the old task is shut down before the new task is started, or the new task is started before the old task is shut down.
     *
     * @var string|null
     */
    protected $order;
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means unlimited parallelism).
     *
     * @return int|null
     */
    public function getParallelism() : ?int
    {
        return $this->parallelism;
    }
    /**
     * Maximum number of tasks to be rolled back in one iteration (0 means unlimited parallelism).
     *
     * @param int|null $parallelism
     *
     * @return self
     */
    public function setParallelism(?int $parallelism) : self
    {
        $this->parallelism = $parallelism;
        return $this;
    }
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     *
     * @return int|null
     */
    public function getDelay() : ?int
    {
        return $this->delay;
    }
    /**
     * Amount of time between rollback iterations, in nanoseconds.
     *
     * @param int|null $delay
     *
     * @return self
     */
    public function setDelay(?int $delay) : self
    {
        $this->delay = $delay;
        return $this;
    }
    /**
     * Action to take if an rolled back task fails to run, or stops running during the rollback.
     *
     * @return string|null
     */
    public function getFailureAction() : ?string
    {
        return $this->failureAction;
    }
    /**
     * Action to take if an rolled back task fails to run, or stops running during the rollback.
     *
     * @param string|null $failureAction
     *
     * @return self
     */
    public function setFailureAction(?string $failureAction) : self
    {
        $this->failureAction = $failureAction;
        return $this;
    }
    /**
     * Amount of time to monitor each rolled back task for failures, in nanoseconds.
     *
     * @return int|null
     */
    public function getMonitor() : ?int
    {
        return $this->monitor;
    }
    /**
     * Amount of time to monitor each rolled back task for failures, in nanoseconds.
     *
     * @param int|null $monitor
     *
     * @return self
     */
    public function setMonitor(?int $monitor) : self
    {
        $this->monitor = $monitor;
        return $this;
    }
    /**
     * The fraction of tasks that may fail during a rollback before the failure action is invoked, specified as a floating point number between 0 and 1.
     *
     * @return float|null
     */
    public function getMaxFailureRatio() : ?float
    {
        return $this->maxFailureRatio;
    }
    /**
     * The fraction of tasks that may fail during a rollback before the failure action is invoked, specified as a floating point number between 0 and 1.
     *
     * @param float|null $maxFailureRatio
     *
     * @return self
     */
    public function setMaxFailureRatio(?float $maxFailureRatio) : self
    {
        $this->maxFailureRatio = $maxFailureRatio;
        return $this;
    }
    /**
     * The order of operations when rolling back a task. Either the old task is shut down before the new task is started, or the new task is started before the old task is shut down.
     *
     * @return string|null
     */
    public function getOrder() : ?string
    {
        return $this->order;
    }
    /**
     * The order of operations when rolling back a task. Either the old task is shut down before the new task is started, or the new task is started before the old task is shut down.
     *
     * @param string|null $order
     *
     * @return self
     */
    public function setOrder(?string $order) : self
    {
        $this->order = $order;
        return $this;
    }
}