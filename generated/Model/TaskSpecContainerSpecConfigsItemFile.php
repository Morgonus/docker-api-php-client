<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecContainerSpecConfigsItemFile
{
    /**
     * Name represents the final filename in the filesystem.
     *
     * @var string
     */
    protected $name;
    /**
     * UID represents the file UID.
     *
     * @var string
     */
    protected $uID;
    /**
     * GID represents the file GID.
     *
     * @var string
     */
    protected $gID;
    /**
     * Mode represents the FileMode of the file.
     *
     * @var int
     */
    protected $mode;

    /**
     * Name represents the final filename in the filesystem.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name represents the final filename in the filesystem.
     *
     * @param string $name
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * UID represents the file UID.
     *
     * @return string
     */
    public function getUID(): ?string
    {
        return $this->uID;
    }

    /**
     * UID represents the file UID.
     *
     * @param string $uID
     */
    public function setUID(?string $uID): self
    {
        $this->uID = $uID;

        return $this;
    }

    /**
     * GID represents the file GID.
     *
     * @return string
     */
    public function getGID(): ?string
    {
        return $this->gID;
    }

    /**
     * GID represents the file GID.
     *
     * @param string $gID
     */
    public function setGID(?string $gID): self
    {
        $this->gID = $gID;

        return $this;
    }

    /**
     * Mode represents the FileMode of the file.
     *
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * Mode represents the FileMode of the file.
     *
     * @param int $mode
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }
}
