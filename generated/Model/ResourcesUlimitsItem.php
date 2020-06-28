<?php

namespace Docker\API\Model;

class ResourcesUlimitsItem
{
    /**
     * Name of ulimit
     *
     * @var string|null
     */
    protected $name;
    /**
     * Soft limit
     *
     * @var int|null
     */
    protected $soft;
    /**
     * Hard limit
     *
     * @var int|null
     */
    protected $hard;
    /**
     * Name of ulimit
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of ulimit
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
     * Soft limit
     *
     * @return int|null
     */
    public function getSoft() : ?int
    {
        return $this->soft;
    }
    /**
     * Soft limit
     *
     * @param int|null $soft
     *
     * @return self
     */
    public function setSoft(?int $soft) : self
    {
        $this->soft = $soft;
        return $this;
    }
    /**
     * Hard limit
     *
     * @return int|null
     */
    public function getHard() : ?int
    {
        return $this->hard;
    }
    /**
     * Hard limit
     *
     * @param int|null $hard
     *
     * @return self
     */
    public function setHard(?int $hard) : self
    {
        $this->hard = $hard;
        return $this;
    }
}