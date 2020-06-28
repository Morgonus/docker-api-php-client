<?php

namespace Docker\API\Model;

class ImageSummary
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $parentId;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $repoTags;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $repoDigests;
    /**
     * 
     *
     * @var int|null
     */
    protected $created;
    /**
     * 
     *
     * @var int|null
     */
    protected $size;
    /**
     * 
     *
     * @var int|null
     */
    protected $sharedSize;
    /**
     * 
     *
     * @var int|null
     */
    protected $virtualSize;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * 
     *
     * @var int|null
     */
    protected $containers;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParentId() : ?string
    {
        return $this->parentId;
    }
    /**
     * 
     *
     * @param string|null $parentId
     *
     * @return self
     */
    public function setParentId(?string $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRepoTags() : ?array
    {
        return $this->repoTags;
    }
    /**
     * 
     *
     * @param string[]|null $repoTags
     *
     * @return self
     */
    public function setRepoTags(?array $repoTags) : self
    {
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRepoDigests() : ?array
    {
        return $this->repoDigests;
    }
    /**
     * 
     *
     * @param string[]|null $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(?array $repoDigests) : self
    {
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * 
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSharedSize() : ?int
    {
        return $this->sharedSize;
    }
    /**
     * 
     *
     * @param int|null $sharedSize
     *
     * @return self
     */
    public function setSharedSize(?int $sharedSize) : self
    {
        $this->sharedSize = $sharedSize;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVirtualSize() : ?int
    {
        return $this->virtualSize;
    }
    /**
     * 
     *
     * @param int|null $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(?int $virtualSize) : self
    {
        $this->virtualSize = $virtualSize;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param string[]|null $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContainers() : ?int
    {
        return $this->containers;
    }
    /**
     * 
     *
     * @param int|null $containers
     *
     * @return self
     */
    public function setContainers(?int $containers) : self
    {
        $this->containers = $containers;
        return $this;
    }
}