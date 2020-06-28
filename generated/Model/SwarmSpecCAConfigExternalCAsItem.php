<?php

namespace Docker\API\Model;

class SwarmSpecCAConfigExternalCAsItem
{
    /**
     * Protocol for communication with the external CA (currently only `cfssl` is supported).
     *
     * @var string|null
     */
    protected $protocol = 'cfssl';
    /**
     * URL where certificate signing requests should be sent.
     *
     * @var string|null
     */
    protected $uRL;
    /**
     * An object with key/value pairs that are interpreted as protocol-specific options for the external CA driver.
     *
     * @var string[]|null
     */
    protected $options;
    /**
     * The root CA certificate (in PEM format) this external CA uses to issue TLS certificates (assumed to be to the current swarm root CA certificate if not provided).
     *
     * @var string|null
     */
    protected $cACert;
    /**
     * Protocol for communication with the external CA (currently only `cfssl` is supported).
     *
     * @return string|null
     */
    public function getProtocol() : ?string
    {
        return $this->protocol;
    }
    /**
     * Protocol for communication with the external CA (currently only `cfssl` is supported).
     *
     * @param string|null $protocol
     *
     * @return self
     */
    public function setProtocol(?string $protocol) : self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * URL where certificate signing requests should be sent.
     *
     * @return string|null
     */
    public function getURL() : ?string
    {
        return $this->uRL;
    }
    /**
     * URL where certificate signing requests should be sent.
     *
     * @param string|null $uRL
     *
     * @return self
     */
    public function setURL(?string $uRL) : self
    {
        $this->uRL = $uRL;
        return $this;
    }
    /**
     * An object with key/value pairs that are interpreted as protocol-specific options for the external CA driver.
     *
     * @return string[]|null
     */
    public function getOptions() : ?\ArrayObject
    {
        return $this->options;
    }
    /**
     * An object with key/value pairs that are interpreted as protocol-specific options for the external CA driver.
     *
     * @param string[]|null $options
     *
     * @return self
     */
    public function setOptions(?\ArrayObject $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * The root CA certificate (in PEM format) this external CA uses to issue TLS certificates (assumed to be to the current swarm root CA certificate if not provided).
     *
     * @return string|null
     */
    public function getCACert() : ?string
    {
        return $this->cACert;
    }
    /**
     * The root CA certificate (in PEM format) this external CA uses to issue TLS certificates (assumed to be to the current swarm root CA certificate if not provided).
     *
     * @param string|null $cACert
     *
     * @return self
     */
    public function setCACert(?string $cACert) : self
    {
        $this->cACert = $cACert;
        return $this;
    }
}