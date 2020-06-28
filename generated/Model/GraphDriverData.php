<?php

namespace Docker\API\Model;

class GraphDriverData
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
     * @var string[]|null
     */
    protected $data;
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
     * @return string[]|null
     */
    public function getData() : ?\ArrayObject
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string[]|null $data
     *
     * @return self
     */
    public function setData(?\ArrayObject $data) : self
    {
        $this->data = $data;
        return $this;
    }
}