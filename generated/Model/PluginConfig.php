<?php

namespace Docker\API\Model;

class PluginConfig
{
    /**
     * Docker Version used to create the plugin
     *
     * @var string|null
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $documentation;
    /**
     * The interface between Docker and the plugin
     *
     * @var PluginConfigInterface|null
     */
    protected $interface;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var string|null
     */
    protected $workDir;
    /**
     * 
     *
     * @var PluginConfigUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var PluginConfigNetwork|null
     */
    protected $network;
    /**
     * 
     *
     * @var PluginConfigLinux|null
     */
    protected $linux;
    /**
     * 
     *
     * @var string|null
     */
    protected $propagatedMount;
    /**
     * 
     *
     * @var bool|null
     */
    protected $ipcHost;
    /**
     * 
     *
     * @var bool|null
     */
    protected $pidHost;
    /**
     * 
     *
     * @var PluginMount[]|null
     */
    protected $mounts;
    /**
     * 
     *
     * @var PluginEnv[]|null
     */
    protected $env;
    /**
     * 
     *
     * @var PluginConfigArgs|null
     */
    protected $args;
    /**
     * 
     *
     * @var PluginConfigRootfs|null
     */
    protected $rootfs;
    /**
     * Docker Version used to create the plugin
     *
     * @return string|null
     */
    public function getDockerVersion() : ?string
    {
        return $this->dockerVersion;
    }
    /**
     * Docker Version used to create the plugin
     *
     * @param string|null $dockerVersion
     *
     * @return self
     */
    public function setDockerVersion(?string $dockerVersion) : self
    {
        $this->dockerVersion = $dockerVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocumentation() : ?string
    {
        return $this->documentation;
    }
    /**
     * 
     *
     * @param string|null $documentation
     *
     * @return self
     */
    public function setDocumentation(?string $documentation) : self
    {
        $this->documentation = $documentation;
        return $this;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @return PluginConfigInterface|null
     */
    public function getInterface() : ?PluginConfigInterface
    {
        return $this->interface;
    }
    /**
     * The interface between Docker and the plugin
     *
     * @param PluginConfigInterface|null $interface
     *
     * @return self
     */
    public function setInterface(?PluginConfigInterface $interface) : self
    {
        $this->interface = $interface;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEntrypoint() : ?array
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param string[]|null $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(?array $entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWorkDir() : ?string
    {
        return $this->workDir;
    }
    /**
     * 
     *
     * @param string|null $workDir
     *
     * @return self
     */
    public function setWorkDir(?string $workDir) : self
    {
        $this->workDir = $workDir;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigUser|null
     */
    public function getUser() : ?PluginConfigUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param PluginConfigUser|null $user
     *
     * @return self
     */
    public function setUser(?PluginConfigUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigNetwork|null
     */
    public function getNetwork() : ?PluginConfigNetwork
    {
        return $this->network;
    }
    /**
     * 
     *
     * @param PluginConfigNetwork|null $network
     *
     * @return self
     */
    public function setNetwork(?PluginConfigNetwork $network) : self
    {
        $this->network = $network;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigLinux|null
     */
    public function getLinux() : ?PluginConfigLinux
    {
        return $this->linux;
    }
    /**
     * 
     *
     * @param PluginConfigLinux|null $linux
     *
     * @return self
     */
    public function setLinux(?PluginConfigLinux $linux) : self
    {
        $this->linux = $linux;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPropagatedMount() : ?string
    {
        return $this->propagatedMount;
    }
    /**
     * 
     *
     * @param string|null $propagatedMount
     *
     * @return self
     */
    public function setPropagatedMount(?string $propagatedMount) : self
    {
        $this->propagatedMount = $propagatedMount;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIpcHost() : ?bool
    {
        return $this->ipcHost;
    }
    /**
     * 
     *
     * @param bool|null $ipcHost
     *
     * @return self
     */
    public function setIpcHost(?bool $ipcHost) : self
    {
        $this->ipcHost = $ipcHost;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPidHost() : ?bool
    {
        return $this->pidHost;
    }
    /**
     * 
     *
     * @param bool|null $pidHost
     *
     * @return self
     */
    public function setPidHost(?bool $pidHost) : self
    {
        $this->pidHost = $pidHost;
        return $this;
    }
    /**
     * 
     *
     * @return PluginMount[]|null
     */
    public function getMounts() : ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param PluginMount[]|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * 
     *
     * @return PluginEnv[]|null
     */
    public function getEnv() : ?array
    {
        return $this->env;
    }
    /**
     * 
     *
     * @param PluginEnv[]|null $env
     *
     * @return self
     */
    public function setEnv(?array $env) : self
    {
        $this->env = $env;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigArgs|null
     */
    public function getArgs() : ?PluginConfigArgs
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param PluginConfigArgs|null $args
     *
     * @return self
     */
    public function setArgs(?PluginConfigArgs $args) : self
    {
        $this->args = $args;
        return $this;
    }
    /**
     * 
     *
     * @return PluginConfigRootfs|null
     */
    public function getRootfs() : ?PluginConfigRootfs
    {
        return $this->rootfs;
    }
    /**
     * 
     *
     * @param PluginConfigRootfs|null $rootfs
     *
     * @return self
     */
    public function setRootfs(?PluginConfigRootfs $rootfs) : self
    {
        $this->rootfs = $rootfs;
        return $this;
    }
}