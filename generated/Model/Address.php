<?php

namespace Docker\API\Model;

class Address
{
    /**
     * IP address.
     *
     * @var string|null
     */
    protected $addr;
    /**
     * Mask length of the IP address.
     *
     * @var int|null
     */
    protected $prefixLen;
    /**
     * IP address.
     *
     * @return string|null
     */
    public function getAddr() : ?string
    {
        return $this->addr;
    }
    /**
     * IP address.
     *
     * @param string|null $addr
     *
     * @return self
     */
    public function setAddr(?string $addr) : self
    {
        $this->addr = $addr;
        return $this;
    }
    /**
     * Mask length of the IP address.
     *
     * @return int|null
     */
    public function getPrefixLen() : ?int
    {
        return $this->prefixLen;
    }
    /**
     * Mask length of the IP address.
     *
     * @param int|null $prefixLen
     *
     * @return self
     */
    public function setPrefixLen(?int $prefixLen) : self
    {
        $this->prefixLen = $prefixLen;
        return $this;
    }
}