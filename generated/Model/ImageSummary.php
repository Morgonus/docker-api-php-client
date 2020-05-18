<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ImageSummary
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $parentId;
    /**
     * @var string[]
     */
    protected $repoTags;
    /**
     * @var string[]
     */
    protected $repoDigests;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $sharedSize;
    /**
     * @var int
     */
    protected $virtualSize;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var int
     */
    protected $containers;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     */
    public function setParentId(?string $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoTags(): ?array
    {
        return $this->repoTags;
    }

    /**
     * @param string[] $repoTags
     */
    public function setRepoTags(?array $repoTags): self
    {
        $this->repoTags = $repoTags;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoDigests(): ?array
    {
        return $this->repoDigests;
    }

    /**
     * @param string[] $repoDigests
     */
    public function setRepoDigests(?array $repoDigests): self
    {
        $this->repoDigests = $repoDigests;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getSharedSize(): ?int
    {
        return $this->sharedSize;
    }

    /**
     * @param int $sharedSize
     */
    public function setSharedSize(?int $sharedSize): self
    {
        $this->sharedSize = $sharedSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getVirtualSize(): ?int
    {
        return $this->virtualSize;
    }

    /**
     * @param int $virtualSize
     */
    public function setVirtualSize(?int $virtualSize): self
    {
        $this->virtualSize = $virtualSize;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return int
     */
    public function getContainers(): ?int
    {
        return $this->containers;
    }

    /**
     * @param int $containers
     */
    public function setContainers(?int $containers): self
    {
        $this->containers = $containers;

        return $this;
    }
}
