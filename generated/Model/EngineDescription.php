<?php

namespace Docker\API\Model;

class EngineDescription
{
    /**
     * 
     *
     * @var string|null
     */
    protected $engineVersion;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * 
     *
     * @var EngineDescriptionPluginsItem[]|null
     */
    protected $plugins;
    /**
     * 
     *
     * @return string|null
     */
    public function getEngineVersion() : ?string
    {
        return $this->engineVersion;
    }
    /**
     * 
     *
     * @param string|null $engineVersion
     *
     * @return self
     */
    public function setEngineVersion(?string $engineVersion) : self
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLabels() : ?\ArrayObject
    {
        return $this->labels;
    }
    /**
     * 
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
     * 
     *
     * @return EngineDescriptionPluginsItem[]|null
     */
    public function getPlugins() : ?array
    {
        return $this->plugins;
    }
    /**
     * 
     *
     * @param EngineDescriptionPluginsItem[]|null $plugins
     *
     * @return self
     */
    public function setPlugins(?array $plugins) : self
    {
        $this->plugins = $plugins;
        return $this;
    }
}