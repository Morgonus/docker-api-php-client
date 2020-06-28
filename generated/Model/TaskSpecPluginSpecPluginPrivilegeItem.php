<?php

namespace Docker\API\Model;

class TaskSpecPluginSpecPluginPrivilegeItem
{
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $value;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * @return string[]|null
     */
    public function getValue() : ?array
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string[]|null $value
     *
     * @return self
     */
    public function setValue(?array $value) : self
    {
        $this->value = $value;
        return $this;
    }
}