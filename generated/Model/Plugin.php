<?php

namespace Docker\API\Model;

class Plugin
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * True if the plugin is running. False if the plugin is not running, only installed.
     *
     * @var bool|null
     */
    protected $enabled;
    /**
     * Settings that can be modified by users.
     *
     * @var PluginSettings|null
     */
    protected $settings;
    /**
     * plugin remote reference used to push/pull the plugin
     *
     * @var string|null
     */
    protected $pluginReference;
    /**
     * The config of a plugin.
     *
     * @var PluginConfig|null
     */
    protected $config;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
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
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * True if the plugin is running. False if the plugin is not running, only installed.
     *
     * @return bool|null
     */
    public function getEnabled() : ?bool
    {
        return $this->enabled;
    }
    /**
     * True if the plugin is running. False if the plugin is not running, only installed.
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Settings that can be modified by users.
     *
     * @return PluginSettings|null
     */
    public function getSettings() : ?PluginSettings
    {
        return $this->settings;
    }
    /**
     * Settings that can be modified by users.
     *
     * @param PluginSettings|null $settings
     *
     * @return self
     */
    public function setSettings(?PluginSettings $settings) : self
    {
        $this->settings = $settings;
        return $this;
    }
    /**
     * plugin remote reference used to push/pull the plugin
     *
     * @return string|null
     */
    public function getPluginReference() : ?string
    {
        return $this->pluginReference;
    }
    /**
     * plugin remote reference used to push/pull the plugin
     *
     * @param string|null $pluginReference
     *
     * @return self
     */
    public function setPluginReference(?string $pluginReference) : self
    {
        $this->pluginReference = $pluginReference;
        return $this;
    }
    /**
     * The config of a plugin.
     *
     * @return PluginConfig|null
     */
    public function getConfig() : ?PluginConfig
    {
        return $this->config;
    }
    /**
     * The config of a plugin.
     *
     * @param PluginConfig|null $config
     *
     * @return self
     */
    public function setConfig(?PluginConfig $config) : self
    {
        $this->config = $config;
        return $this;
    }
}