<?php

namespace Docker\API\Model;

class MountTmpfsOptions
{
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @var int|null
     */
    protected $sizeBytes;
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @var int|null
     */
    protected $mode;
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @return int|null
     */
    public function getSizeBytes() : ?int
    {
        return $this->sizeBytes;
    }
    /**
     * The size for the tmpfs mount in bytes.
     *
     * @param int|null $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(?int $sizeBytes) : self
    {
        $this->sizeBytes = $sizeBytes;
        return $this;
    }
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @return int|null
     */
    public function getMode() : ?int
    {
        return $this->mode;
    }
    /**
     * The permission mode for the tmpfs mount in an integer.
     *
     * @param int|null $mode
     *
     * @return self
     */
    public function setMode(?int $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
}