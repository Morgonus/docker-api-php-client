<?php

namespace Docker\API\Model;

class ConfigSpec
{
    /**
     * User-defined name of the config.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2))
    config data.
    
    *
    * @var string|null
    */
    protected $data;
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @var Driver|null
     */
    protected $templating;
    /**
     * User-defined name of the config.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * User-defined name of the config.
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
     * User-defined key/value metadata.
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[]|null $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2))
    config data.
    
    *
    * @return string|null
    */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
    * Base64-url-safe-encoded ([RFC 4648](https://tools.ietf.org/html/rfc4648#section-3.2))
    config data.
    
    *
    * @param string|null $data
    *
    * @return self
    */
    public function setData(?string $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @return Driver|null
     */
    public function getTemplating() : ?Driver
    {
        return $this->templating;
    }
    /**
     * Driver represents a driver (network, logging, secrets).
     *
     * @param Driver|null $templating
     *
     * @return self
     */
    public function setTemplating(?Driver $templating) : self
    {
        $this->templating = $templating;
        return $this;
    }
}