<?php

namespace Docker\API\Model;

class BuildPrunePostResponse200
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $cachesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int|null
     */
    protected $spaceReclaimed;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getCachesDeleted() : ?array
    {
        return $this->cachesDeleted;
    }
    /**
     * 
     *
     * @param string[]|null $cachesDeleted
     *
     * @return self
     */
    public function setCachesDeleted(?array $cachesDeleted) : self
    {
        $this->cachesDeleted = $cachesDeleted;
        return $this;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @return int|null
     */
    public function getSpaceReclaimed() : ?int
    {
        return $this->spaceReclaimed;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @param int|null $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed(?int $spaceReclaimed) : self
    {
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}