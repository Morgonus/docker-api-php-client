<?php

namespace Docker\API\Model;

class PluginConfigInterface
{
    /**
     * 
     *
     * @var PluginInterfaceType[]|null
     */
    protected $types;
    /**
     * 
     *
     * @var string|null
     */
    protected $socket;
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @var string|null
     */
    protected $protocolScheme;
    /**
     * 
     *
     * @return PluginInterfaceType[]|null
     */
    public function getTypes() : ?array
    {
        return $this->types;
    }
    /**
     * 
     *
     * @param PluginInterfaceType[]|null $types
     *
     * @return self
     */
    public function setTypes(?array $types) : self
    {
        $this->types = $types;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSocket() : ?string
    {
        return $this->socket;
    }
    /**
     * 
     *
     * @param string|null $socket
     *
     * @return self
     */
    public function setSocket(?string $socket) : self
    {
        $this->socket = $socket;
        return $this;
    }
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @return string|null
     */
    public function getProtocolScheme() : ?string
    {
        return $this->protocolScheme;
    }
    /**
     * Protocol to use for clients connecting to the plugin.
     *
     * @param string|null $protocolScheme
     *
     * @return self
     */
    public function setProtocolScheme(?string $protocolScheme) : self
    {
        $this->protocolScheme = $protocolScheme;
        return $this;
    }
}