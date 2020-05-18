<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmSpec
{
    /**
     * Name of the swarm.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Orchestration configuration.
     *
     * @var SwarmSpecOrchestration
     */
    protected $orchestration;
    /**
     * Raft configuration.
     *
     * @var SwarmSpecRaft
     */
    protected $raft;
    /**
     * Dispatcher configuration.
     *
     * @var SwarmSpecDispatcher
     */
    protected $dispatcher;
    /**
     * CA configuration.
     *
     * @var SwarmSpecCAConfig
     */
    protected $cAConfig;
    /**
     * Parameters related to encryption-at-rest.
     *
     * @var SwarmSpecEncryptionConfig
     */
    protected $encryptionConfig;
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @var SwarmSpecTaskDefaults
     */
    protected $taskDefaults;

    /**
     * Name of the swarm.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the swarm.
     *
     * @param string $name
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Orchestration configuration.
     *
     * @return SwarmSpecOrchestration
     */
    public function getOrchestration(): ?SwarmSpecOrchestration
    {
        return $this->orchestration;
    }

    /**
     * Orchestration configuration.
     *
     * @param SwarmSpecOrchestration $orchestration
     */
    public function setOrchestration(?SwarmSpecOrchestration $orchestration): self
    {
        $this->orchestration = $orchestration;

        return $this;
    }

    /**
     * Raft configuration.
     *
     * @return SwarmSpecRaft
     */
    public function getRaft(): ?SwarmSpecRaft
    {
        return $this->raft;
    }

    /**
     * Raft configuration.
     *
     * @param SwarmSpecRaft $raft
     */
    public function setRaft(?SwarmSpecRaft $raft): self
    {
        $this->raft = $raft;

        return $this;
    }

    /**
     * Dispatcher configuration.
     *
     * @return SwarmSpecDispatcher
     */
    public function getDispatcher(): ?SwarmSpecDispatcher
    {
        return $this->dispatcher;
    }

    /**
     * Dispatcher configuration.
     *
     * @param SwarmSpecDispatcher $dispatcher
     */
    public function setDispatcher(?SwarmSpecDispatcher $dispatcher): self
    {
        $this->dispatcher = $dispatcher;

        return $this;
    }

    /**
     * CA configuration.
     *
     * @return SwarmSpecCAConfig
     */
    public function getCAConfig(): ?SwarmSpecCAConfig
    {
        return $this->cAConfig;
    }

    /**
     * CA configuration.
     *
     * @param SwarmSpecCAConfig $cAConfig
     */
    public function setCAConfig(?SwarmSpecCAConfig $cAConfig): self
    {
        $this->cAConfig = $cAConfig;

        return $this;
    }

    /**
     * Parameters related to encryption-at-rest.
     *
     * @return SwarmSpecEncryptionConfig
     */
    public function getEncryptionConfig(): ?SwarmSpecEncryptionConfig
    {
        return $this->encryptionConfig;
    }

    /**
     * Parameters related to encryption-at-rest.
     *
     * @param SwarmSpecEncryptionConfig $encryptionConfig
     */
    public function setEncryptionConfig(?SwarmSpecEncryptionConfig $encryptionConfig): self
    {
        $this->encryptionConfig = $encryptionConfig;

        return $this;
    }

    /**
     * Defaults for creating tasks in this cluster.
     *
     * @return SwarmSpecTaskDefaults
     */
    public function getTaskDefaults(): ?SwarmSpecTaskDefaults
    {
        return $this->taskDefaults;
    }

    /**
     * Defaults for creating tasks in this cluster.
     *
     * @param SwarmSpecTaskDefaults $taskDefaults
     */
    public function setTaskDefaults(?SwarmSpecTaskDefaults $taskDefaults): self
    {
        $this->taskDefaults = $taskDefaults;

        return $this;
    }
}
