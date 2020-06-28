<?php

namespace Docker\API\Model;

class ContainersCreatePostResponse201
{
    /**
     * The ID of the created container
     *
     * @var string|null
     */
    protected $id;
    /**
     * Warnings encountered when creating the container
     *
     * @var string[]|null
     */
    protected $warnings;
    /**
     * The ID of the created container
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ID of the created container
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
     * Warnings encountered when creating the container
     *
     * @return string[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * Warnings encountered when creating the container
     *
     * @param string[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}