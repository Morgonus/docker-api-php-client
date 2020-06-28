<?php

namespace Docker\API\Model;

class SwarmSpecOrchestration
{
    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     *
     * @var int|null
     */
    protected $taskHistoryRetentionLimit;
    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     *
     * @return int|null
     */
    public function getTaskHistoryRetentionLimit() : ?int
    {
        return $this->taskHistoryRetentionLimit;
    }
    /**
     * The number of historic tasks to keep per instance or node. If negative, never remove completed or failed tasks.
     *
     * @param int|null $taskHistoryRetentionLimit
     *
     * @return self
     */
    public function setTaskHistoryRetentionLimit(?int $taskHistoryRetentionLimit) : self
    {
        $this->taskHistoryRetentionLimit = $taskHistoryRetentionLimit;
        return $this;
    }
}