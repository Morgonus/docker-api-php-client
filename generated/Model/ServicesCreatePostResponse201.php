<?php

namespace Docker\API\Model;

class ServicesCreatePostResponse201
{
    /**
     * The ID of the created service.
     *
     * @var string|null
     */
    protected $iD;
    /**
     * Optional warning message
     *
     * @var string|null
     */
    protected $warning;
    /**
     * The ID of the created service.
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the created service.
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * Optional warning message
     *
     * @return string|null
     */
    public function getWarning() : ?string
    {
        return $this->warning;
    }
    /**
     * Optional warning message
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