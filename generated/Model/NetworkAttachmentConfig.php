<?php

namespace Docker\API\Model;

class NetworkAttachmentConfig
{
    /**
     * The target network for attachment. Must be a network name or ID.
     *
     * @var string|null
     */
    protected $target;
    /**
     * Discoverable alternate names for the service on this network.
     *
     * @var string[]|null
     */
    protected $aliases;
    /**
     * Driver attachment options for the network target
     *
     * @var string[]|null
     */
    protected $driverOpts;
    /**
     * The target network for attachment. Must be a network name or ID.
     *
     * @return string|null
     */
    public function getTarget() : ?string
    {
        return $this->target;
    }
    /**
     * The target network for attachment. Must be a network name or ID.
     *
     * @param string|null $target
     *
     * @return self
     */
    public function setTarget(?string $target) : self
    {
        $this->target = $target;
        return $this;
    }
    /**
     * Discoverable alternate names for the service on this network.
     *
     * @return string[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * Discoverable alternate names for the service on this network.
     *
     * @param string[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * Driver attachment options for the network target
     *
     * @return string[]|null
     */
    public function getDriverOpts() : ?\ArrayObject
    {
        return $this->driverOpts;
    }
    /**
     * Driver attachment options for the network target
     *
     * @param string[]|null $driverOpts
     *
     * @return self
     */
    public function setDriverOpts(?\ArrayObject $driverOpts) : self
    {
        $this->driverOpts = $driverOpts;
        return $this;
    }
}