<?php

namespace Docker\API\Model;

class NetworksCreatePostResponse201
{
    /**
     * The ID of the created network.
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $warning;
    /**
     * The ID of the created network.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ID of the created network.
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
     * 
     *
     * @return string|null
     */
    public function getWarning() : ?string
    {
        return $this->warning;
    }
    /**
     * 
     *
     * @param string|null $warning
     *
     * @return self
     */
    public function setWarning(?string $warning) : self
    {
        $this->warning = $warning;
        return $this;
    }
}