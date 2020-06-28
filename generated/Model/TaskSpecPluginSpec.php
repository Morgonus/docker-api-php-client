<?php

namespace Docker\API\Model;

class TaskSpecPluginSpec
{
    /**
     * The name or 'alias' to use for the plugin.
     *
     * @var string|null
     */
    protected $name;
    /**
     * The plugin image reference to use.
     *
     * @var string|null
     */
    protected $remote;
    /**
     * Disable the plugin once scheduled.
     *
     * @var bool|null
     */
    protected $disabled;
    /**
     * 
     *
     * @var TaskSpecPluginSpecPluginPrivilegeItem[]|null
     */
    protected $pluginPrivilege;
    /**
     * The name or 'alias' to use for the plugin.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name or 'alias' to use for the plugin.
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
     * The plugin image reference to use.
     *
     * @return string|null
     */
    public function getRemote() : ?string
    {
        return $this->remote;
    }
    /**
     * The plugin image reference to use.
     *
     * @param string|null $remote
     *
     * @return self
     */
    public function setRemote(?string $remote) : self
    {
        $this->remote = $remote;
        return $this;
    }
    /**
     * Disable the plugin once scheduled.
     *
     * @return bool|null
     */
    public function getDisabled() : ?bool
    {
        return $this->disabled;
    }
    /**
     * Disable the plugin once scheduled.
     *
     * @param bool|null $disabled
     *
     * @return self
     */
    public function setDisabled(?bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * 
     *
     * @return TaskSpecPluginSpecPluginPrivilegeItem[]|null
     */
    public function getPluginPrivilege() : ?array
    {
        return $this->pluginPrivilege;
    }
    /**
     * 
     *
     * @param TaskSpecPluginSpecPluginPrivilegeItem[]|null $pluginPrivilege
     *
     * @return self
     */
    public function setPluginPrivilege(?array $pluginPrivilege) : self
    {
        $this->pluginPrivilege = $pluginPrivilege;
        return $this;
    }
}