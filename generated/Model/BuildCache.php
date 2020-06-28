<?php

namespace Docker\API\Model;

class BuildCache
{
    /**
     * 
     *
     * @var string|null
     */
    protected $iD;
    /**
     * 
     *
     * @var string|null
     */
    protected $parent;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $inUse;
    /**
     * 
     *
     * @var bool|null
     */
    protected $shared;
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
    protected $createdAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastUsedAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $usageCount;
    /**
     * 
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * 
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParent() : ?string
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param string|null $parent
     *
     * @return self
     */
    public function setParent(?string $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getInUse() : ?bool
    {
        return $this->inUse;
    }
    /**
     * 
     *
     * @param bool|null $inUse
     *
     * @return self
     */
    public function setInUse(?bool $inUse) : self
    {
        $this->inUse = $inUse;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getShared() : ?bool
    {
        return $this->shared;
    }
    /**
     * 
     *
     * @param bool|null $shared
     *
     * @return self
     */
    public function setShared(?bool $shared) : self
    {
        $this->shared = $shared;
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
    public function getCreatedAt() : ?int
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param int|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?int $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastUsedAt() : ?int
    {
        return $this->lastUsedAt;
    }
    /**
     * 
     *
     * @param int|null $lastUsedAt
     *
     * @return self
     */
    public function setLastUsedAt(?int $lastUsedAt) : self
    {
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsageCount() : ?int
    {
        return $this->usageCount;
    }
    /**
     * 
     *
     * @param int|null $usageCount
     *
     * @return self
     */
    public function setUsageCount(?int $usageCount) : self
    {
        $this->usageCount = $usageCount;
        return $this;
    }
}