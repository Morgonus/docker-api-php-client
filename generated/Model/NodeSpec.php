<?php

namespace Docker\API\Model;

class NodeSpec
{
    /**
     * Name for the node.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * Role of the node.
     *
     * @var string|null
     */
    protected $role;
    /**
     * Availability of the node.
     *
     * @var string|null
     */
    protected $availability;
    /**
     * Name for the node.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name for the node.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
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
     * Role of the node.
     *
     * @return string|null
     */
    public function getRole() : ?string
    {
        return $this->role;
    }
    /**
     * Role of the node.
     *
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * Availability of the node.
     *
     * @return string|null
     */
    public function getAvailability() : ?string
    {
        return $this->availability;
    }
    /**
     * Availability of the node.
     *
     * @param string|null $availability
     *
     * @return self
     */
    public function setAvailability(?string $availability) : self
    {
        $this->availability = $availability;
        return $this;
    }
}