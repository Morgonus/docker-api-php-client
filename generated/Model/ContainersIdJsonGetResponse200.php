<?php

namespace Docker\API\Model;

class ContainersIdJsonGetResponse200
{
    /**
     * The ID of the container
     *
     * @var string|null
     */
    protected $id;
    /**
     * The time the container was created
     *
     * @var string|null
     */
    protected $created;
    /**
     * The path to the command being run
     *
     * @var string|null
     */
    protected $path;
    /**
     * The arguments to the command being run
     *
     * @var string[]|null
     */
    protected $args;
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @var ContainerState|null
    */
    protected $state;
    /**
     * The container's image
     *
     * @var string|null
     */
    protected $image;
    /**
     * 
     *
     * @var string|null
     */
    protected $resolvConfPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostnamePath;
    /**
     * 
     *
     * @var string|null
     */
    protected $hostsPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $logPath;
    /**
     * TODO
     *
     * @var ContainersIdJsonGetResponse200Node|null
     */
    protected $node;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $restartCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $driver;
    /**
     * 
     *
     * @var string|null
     */
    protected $platform;
    /**
     * 
     *
     * @var string|null
     */
    protected $mountLabel;
    /**
     * 
     *
     * @var string|null
     */
    protected $processLabel;
    /**
     * 
     *
     * @var string|null
     */
    protected $appArmorProfile;
    /**
     * IDs of exec instances that are running in the container.
     *
     * @var string[]|null
     */
    protected $execIDs;
    /**
     * Container configuration that depends on the host we are running on
     *
     * @var HostConfig|null
     */
    protected $hostConfig;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData|null
     */
    protected $graphDriver;
    /**
     * The size of files that have been created or changed by this container.
     *
     * @var int|null
     */
    protected $sizeRw;
    /**
     * The total size of all the files in this container.
     *
     * @var int|null
     */
    protected $sizeRootFs;
    /**
     * 
     *
     * @var MountPoint[]|null
     */
    protected $mounts;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig|null
     */
    protected $config;
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @var NetworkSettings|null
     */
    protected $networkSettings;
    /**
     * The ID of the container
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ID of the container
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
     * The time the container was created
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * The time the container was created
     *
     * @param string|null $created
     *
     * @return self
     */
    public function setCreated(?string $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * The path to the command being run
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * The path to the command being run
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
     * The arguments to the command being run
     *
     * @return string[]|null
     */
    public function getArgs() : ?array
    {
        return $this->args;
    }
    /**
     * The arguments to the command being run
     *
     * @param string[]|null $args
     *
     * @return self
     */
    public function setArgs(?array $args) : self
    {
        $this->args = $args;
        return $this;
    }
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @return ContainerState|null
    */
    public function getState() : ?ContainerState
    {
        return $this->state;
    }
    /**
    * ContainerState stores container's running state. It's part of ContainerJSONBase
    and will be returned by the "inspect" command.
    
    *
    * @param ContainerState|null $state
    *
    * @return self
    */
    public function setState(?ContainerState $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The container's image
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * The container's image
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image) : self
    {
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResolvConfPath() : ?string
    {
        return $this->resolvConfPath;
    }
    /**
     * 
     *
     * @param string|null $resolvConfPath
     *
     * @return self
     */
    public function setResolvConfPath(?string $resolvConfPath) : self
    {
        $this->resolvConfPath = $resolvConfPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostnamePath() : ?string
    {
        return $this->hostnamePath;
    }
    /**
     * 
     *
     * @param string|null $hostnamePath
     *
     * @return self
     */
    public function setHostnamePath(?string $hostnamePath) : self
    {
        $this->hostnamePath = $hostnamePath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHostsPath() : ?string
    {
        return $this->hostsPath;
    }
    /**
     * 
     *
     * @param string|null $hostsPath
     *
     * @return self
     */
    public function setHostsPath(?string $hostsPath) : self
    {
        $this->hostsPath = $hostsPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLogPath() : ?string
    {
        return $this->logPath;
    }
    /**
     * 
     *
     * @param string|null $logPath
     *
     * @return self
     */
    public function setLogPath(?string $logPath) : self
    {
        $this->logPath = $logPath;
        return $this;
    }
    /**
     * TODO
     *
     * @return ContainersIdJsonGetResponse200Node|null
     */
    public function getNode() : ?ContainersIdJsonGetResponse200Node
    {
        return $this->node;
    }
    /**
     * TODO
     *
     * @param ContainersIdJsonGetResponse200Node|null $node
     *
     * @return self
     */
    public function setNode(?ContainersIdJsonGetResponse200Node $node) : self
    {
        $this->node = $node;
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
     * 
     *
     * @return int|null
     */
    public function getRestartCount() : ?int
    {
        return $this->restartCount;
    }
    /**
     * 
     *
     * @param int|null $restartCount
     *
     * @return self
     */
    public function setRestartCount(?int $restartCount) : self
    {
        $this->restartCount = $restartCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * 
     *
     * @param string|null $driver
     *
     * @return self
     */
    public function setDriver(?string $driver) : self
    {
        $this->driver = $driver;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPlatform() : ?string
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param string|null $platform
     *
     * @return self
     */
    public function setPlatform(?string $platform) : self
    {
        $this->platform = $platform;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMountLabel() : ?string
    {
        return $this->mountLabel;
    }
    /**
     * 
     *
     * @param string|null $mountLabel
     *
     * @return self
     */
    public function setMountLabel(?string $mountLabel) : self
    {
        $this->mountLabel = $mountLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProcessLabel() : ?string
    {
        return $this->processLabel;
    }
    /**
     * 
     *
     * @param string|null $processLabel
     *
     * @return self
     */
    public function setProcessLabel(?string $processLabel) : self
    {
        $this->processLabel = $processLabel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAppArmorProfile() : ?string
    {
        return $this->appArmorProfile;
    }
    /**
     * 
     *
     * @param string|null $appArmorProfile
     *
     * @return self
     */
    public function setAppArmorProfile(?string $appArmorProfile) : self
    {
        $this->appArmorProfile = $appArmorProfile;
        return $this;
    }
    /**
     * IDs of exec instances that are running in the container.
     *
     * @return string[]|null
     */
    public function getExecIDs() : ?array
    {
        return $this->execIDs;
    }
    /**
     * IDs of exec instances that are running in the container.
     *
     * @param string[]|null $execIDs
     *
     * @return self
     */
    public function setExecIDs(?array $execIDs) : self
    {
        $this->execIDs = $execIDs;
        return $this;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @return HostConfig|null
     */
    public function getHostConfig() : ?HostConfig
    {
        return $this->hostConfig;
    }
    /**
     * Container configuration that depends on the host we are running on
     *
     * @param HostConfig|null $hostConfig
     *
     * @return self
     */
    public function setHostConfig(?HostConfig $hostConfig) : self
    {
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * Information about a container's graph driver.
     *
     * @return GraphDriverData|null
     */
    public function getGraphDriver() : ?GraphDriverData
    {
        return $this->graphDriver;
    }
    /**
     * Information about a container's graph driver.
     *
     * @param GraphDriverData|null $graphDriver
     *
     * @return self
     */
    public function setGraphDriver(?GraphDriverData $graphDriver) : self
    {
        $this->graphDriver = $graphDriver;
        return $this;
    }
    /**
     * The size of files that have been created or changed by this container.
     *
     * @return int|null
     */
    public function getSizeRw() : ?int
    {
        return $this->sizeRw;
    }
    /**
     * The size of files that have been created or changed by this container.
     *
     * @param int|null $sizeRw
     *
     * @return self
     */
    public function setSizeRw(?int $sizeRw) : self
    {
        $this->sizeRw = $sizeRw;
        return $this;
    }
    /**
     * The total size of all the files in this container.
     *
     * @return int|null
     */
    public function getSizeRootFs() : ?int
    {
        return $this->sizeRootFs;
    }
    /**
     * The total size of all the files in this container.
     *
     * @param int|null $sizeRootFs
     *
     * @return self
     */
    public function setSizeRootFs(?int $sizeRootFs) : self
    {
        $this->sizeRootFs = $sizeRootFs;
        return $this;
    }
    /**
     * 
     *
     * @return MountPoint[]|null
     */
    public function getMounts() : ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param MountPoint[]|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return ContainerConfig|null
     */
    public function getConfig() : ?ContainerConfig
    {
        return $this->config;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param ContainerConfig|null $config
     *
     * @return self
     */
    public function setConfig(?ContainerConfig $config) : self
    {
        $this->config = $config;
        return $this;
    }
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @return NetworkSettings|null
     */
    public function getNetworkSettings() : ?NetworkSettings
    {
        return $this->networkSettings;
    }
    /**
     * NetworkSettings exposes the network settings in the API
     *
     * @param NetworkSettings|null $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(?NetworkSettings $networkSettings) : self
    {
        $this->networkSettings = $networkSettings;
        return $this;
    }
}