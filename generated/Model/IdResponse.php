<?php

namespace Docker\API\Model;

class IdResponse
{
    /**
     * The id of the newly created object.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The id of the newly created object.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The id of the newly created object.
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
}