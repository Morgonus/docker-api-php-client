<?php

namespace Docker\API\Model;

class MountPoint
{
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
    protected $name;
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
    protected $driver;
    /**
     * 
     *
     * @var string|null
     */
    protected $mode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $rW;
    /**
     * 
     *
     * @var string|null
     */
    protected $propagation;
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
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * 
     *
     * @param string|null $driver
     *
     * @return self
     */
    public function setDriver(?string $driver) : self
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMode() : ?string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string|null $mode
     *
     * @return self
     */
    public function setMode(?string $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRW() : ?bool
    {
        return $this->rW;
    }
    /**
     * 
     *
     * @param bool|null $rW
     *
     * @return self
     */
    public function setRW(?bool $rW) : self
    {
        $this->rW = $rW;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropagation() : ?string
    {
        return $this->propagation;
    }
    /**
     * 
     *
     * @param string|null $propagation
     *
     * @return self
     */
    public function setPropagation(?string $propagation) : self
    {
        $this->propagation = $propagation;
        return $this;
    }
}