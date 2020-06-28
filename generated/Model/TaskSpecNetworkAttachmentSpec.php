<?php

namespace Docker\API\Model;

class TaskSpecNetworkAttachmentSpec
{
    /**
     * ID of the container represented by this task
     *
     * @var string|null
     */
    protected $containerID;
    /**
     * ID of the container represented by this task
     *
     * @return string|null
     */
    public function getContainerID() : ?string
    {
        return $this->containerID;
    }
    /**
     * ID of the container represented by this task
     *
     * @param string|null $containerID
     *
     * @return self
     */
    public function setContainerID(?string $containerID) : self
    {
        $this->containerID = $containerID;
        return $this;
    }
}