<?php

namespace Docker\API\Model;

class PluginDevice
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
    protected $settable;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
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
    public function getSettable() : ?array
    {
        return $this->settable;
    }
    /**
     * 
     *
     * @param string[]|null $settable
     *
     * @return self
     */
    public function setSettable(?array $settable) : self
    {
        $this->settable = $settable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}