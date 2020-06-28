<?php

namespace Docker\API\Model;

class PluginMount
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
    protected $source;
    /**
     * 
     *
     * @var string|null
     */
    protected $destination;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $options;
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
    public function getSource() : ?string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDestination() : ?string
    {
        return $this->destination;
    }
    /**
     * 
     *
     * @param string|null $destination
     *
     * @return self
     */
    public function setDestination(?string $destination) : self
    {
        $this->destination = $destination;
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
     * @return string[]|null
     */
    public function getOptions() : ?array
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param string[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options) : self
    {
        $this->options = $options;
        return $this;
    }
}