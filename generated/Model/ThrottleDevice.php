<?php

namespace Docker\API\Model;

class ThrottleDevice
{
    /**
     * Device path
     *
     * @var string|null
     */
    protected $path;
    /**
     * Rate
     *
     * @var int|null
     */
    protected $rate;
    /**
     * Device path
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * Device path
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
    /**
     * Rate
     *
     * @return int|null
     */
    public function getRate() : ?int
    {
        return $this->rate;
    }
    /**
     * Rate
     *
     * @param int|null $rate
     *
     * @return self
     */
    public function setRate(?int $rate) : self
    {
        $this->rate = $rate;
        return $this;
    }
}