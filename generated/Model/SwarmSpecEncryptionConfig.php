<?php

namespace Docker\API\Model;

class SwarmSpecEncryptionConfig
{
    /**
     * If set, generate a key and use it to lock data stored on the managers.
     *
     * @var bool|null
     */
    protected $autoLockManagers;
    /**
     * If set, generate a key and use it to lock data stored on the managers.
     *
     * @return bool|null
     */
    public function getAutoLockManagers() : ?bool
    {
        return $this->autoLockManagers;
    }
    /**
     * If set, generate a key and use it to lock data stored on the managers.
     *
     * @param bool|null $autoLockManagers
     *
     * @return self
     */
    public function setAutoLockManagers(?bool $autoLockManagers) : self
    {
        $this->autoLockManagers = $autoLockManagers;
        return $this;
    }
}