<?php

namespace Docker\API\Model;

class ContainersCreatePostBody
{
    /**
     * The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @var string|null
     */
    protected $hostname;
    /**
     * The domain name to use for the container.
     *
     * @var string|null
     */
    protected $domainname;
    /**
     * The user that commands are run as inside the container.
     *
     * @var string|null
     */
    protected $user;
    /**
     * Whether to attach to `stdin`.
     *
     * @var bool|null
     */
    protected $attachStdin = false;
    /**
     * Whether to attach to `stdout`.
     *
     * @var bool|null
     */
    protected $attachStdout = true;
    /**
     * Whether to attach to `stderr`.
     *
     * @var bool|null
     */
    protected $attachStderr = true;
    /**
    * An object mapping ports to an empty object in the form:
    
    `{"<port>/<tcp|udp|sctp>": {}}`
    
    *
    * @var ContainerConfigExposedPortsItem[]|null
    */
    protected $exposedPorts;
    /**
     * Attach standard streams to a TTY, including `stdin` if it is not closed.
     *
     * @var bool|null
     */
    protected $tty = false;
    /**
     * Open `stdin`
     *
     * @var bool|null
     */
    protected $openStdin = false;
    /**
     * Close `stdin` after one attached client disconnects
     *
     * @var bool|null
     */
    protected $stdinOnce = false;
    /**
     * A list of environment variables to set inside the container in the form `["VAR=value", ...]`. A variable without `=` is removed from the environment, rather than to have an empty value.
     *
     * @var string[]|null
     */
    protected $env;
    /**
     * Command to run specified as a string or an array of strings.
     *
     * @var string[]|null
     */
    protected $cmd;
    /**
     * A test to perform to check that the container is healthy.
     *
     * @var HealthConfig|null
     */
    protected $healthcheck;
    /**
     * Command is already escaped (Windows only)
     *
     * @var bool|null
     */
    protected $argsEscaped;
    /**
     * The name of the image to use when creating the container
     *
     * @var string|null
     */
    protected $image;
    /**
     * An object mapping mount point paths inside the container to empty objects.
     *
     * @var ContainerConfigVolumesItem[]|null
     */
    protected $volumes;
    /**
     * The working directory for commands to run in.
     *
     * @var string|null
     */
    protected $workingDir;
    /**
    * The entry point for the container as a string or an array of strings.
    
    If the array consists of exactly one empty string (`[""]`) then the entry point is reset to system default (i.e., the entry point used by docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
    
    *
    * @var string[]|null
    */
    protected $entrypoint;
    /**
     * Disable networking for the container.
     *
     * @var bool|null
     */
    protected $networkDisabled;
    /**
     * MAC address of the container.
     *
     * @var string|null
     */
    protected $macAddress;
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @var string[]|null
     */
    protected $onBuild;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @var string|null
     */
    protected $stopSignal = 'SIGTERM';
    /**
     * Timeout to stop a container in seconds.
     *
     * @var int|null
     */
    protected $stopTimeout;
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @var string[]|null
     */
    protected $shell;
    /**
     * Container configuration that depends on the host we are running on
     *
     * @var HostConfig|null
     */
    protected $hostConfig;
    /**
     * This container's networking configuration.
     *
     * @var ContainersCreatePostBodyNetworkingConfig|null
     */
    protected $networkingConfig;
    /**
     * The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @return string|null
     */
    public function getHostname() : ?string
    {
        return $this->hostname;
    }
    /**
     * The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * The domain name to use for the container.
     *
     * @return string|null
     */
    public function getDomainname() : ?string
    {
        return $this->domainname;
    }
    /**
     * The domain name to use for the container.
     *
     * @param string|null $domainname
     *
     * @return self
     */
    public function setDomainname(?string $domainname) : self
    {
        $this->domainname = $domainname;
        return $this;
    }
    /**
     * The user that commands are run as inside the container.
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * The user that commands are run as inside the container.
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Whether to attach to `stdin`.
     *
     * @return bool|null
     */
    public function getAttachStdin() : ?bool
    {
        return $this->attachStdin;
    }
    /**
     * Whether to attach to `stdin`.
     *
     * @param bool|null $attachStdin
     *
     * @return self
     */
    public function setAttachStdin(?bool $attachStdin) : self
    {
        $this->attachStdin = $attachStdin;
        return $this;
    }
    /**
     * Whether to attach to `stdout`.
     *
     * @return bool|null
     */
    public function getAttachStdout() : ?bool
    {
        return $this->attachStdout;
    }
    /**
     * Whether to attach to `stdout`.
     *
     * @param bool|null $attachStdout
     *
     * @return self
     */
    public function setAttachStdout(?bool $attachStdout) : self
    {
        $this->attachStdout = $attachStdout;
        return $this;
    }
    /**
     * Whether to attach to `stderr`.
     *
     * @return bool|null
     */
    public function getAttachStderr() : ?bool
    {
        return $this->attachStderr;
    }
    /**
     * Whether to attach to `stderr`.
     *
     * @param bool|null $attachStderr
     *
     * @return self
     */
    public function setAttachStderr(?bool $attachStderr) : self
    {
        $this->attachStderr = $attachStderr;
        return $this;
    }
    /**
    * An object mapping ports to an empty object in the form:
    
    `{"<port>/<tcp|udp|sctp>": {}}`
    
    *
    * @return ContainerConfigExposedPortsItem[]|null
    */
    public function getExposedPorts() : ?\ArrayObject
    {
        return $this->exposedPorts;
    }
    /**
    * An object mapping ports to an empty object in the form:
    
    `{"<port>/<tcp|udp|sctp>": {}}`
    
    *
    * @param ContainerConfigExposedPortsItem[]|null $exposedPorts
    *
    * @return self
    */
    public function setExposedPorts(?\ArrayObject $exposedPorts) : self
    {
        $this->exposedPorts = $exposedPorts;
        return $this;
    }
    /**
     * Attach standard streams to a TTY, including `stdin` if it is not closed.
     *
     * @return bool|null
     */
    public function getTty() : ?bool
    {
        return $this->tty;
    }
    /**
     * Attach standard streams to a TTY, including `stdin` if it is not closed.
     *
     * @param bool|null $tty
     *
     * @return self
     */
    public function setTty(?bool $tty) : self
    {
        $this->tty = $tty;
        return $this;
    }
    /**
     * Open `stdin`
     *
     * @return bool|null
     */
    public function getOpenStdin() : ?bool
    {
        return $this->openStdin;
    }
    /**
     * Open `stdin`
     *
     * @param bool|null $openStdin
     *
     * @return self
     */
    public function setOpenStdin(?bool $openStdin) : self
    {
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * Close `stdin` after one attached client disconnects
     *
     * @return bool|null
     */
    public function getStdinOnce() : ?bool
    {
        return $this->stdinOnce;
    }
    /**
     * Close `stdin` after one attached client disconnects
     *
     * @param bool|null $stdinOnce
     *
     * @return self
     */
    public function setStdinOnce(?bool $stdinOnce) : self
    {
        $this->stdinOnce = $stdinOnce;
        return $this;
    }
    /**
     * A list of environment variables to set inside the container in the form `["VAR=value", ...]`. A variable without `=` is removed from the environment, rather than to have an empty value.
     *
     * @return string[]|null
     */
    public function getEnv() : ?array
    {
        return $this->env;
    }
    /**
     * A list of environment variables to set inside the container in the form `["VAR=value", ...]`. A variable without `=` is removed from the environment, rather than to have an empty value.
     *
     * @param string[]|null $env
     *
     * @return self
     */
    public function setEnv(?array $env) : self
    {
        $this->env = $env;
        return $this;
    }
    /**
     * Command to run specified as a string or an array of strings.
     *
     * @return string[]|null
     */
    public function getCmd() : ?array
    {
        return $this->cmd;
    }
    /**
     * Command to run specified as a string or an array of strings.
     *
     * @param string[]|null $cmd
     *
     * @return self
     */
    public function setCmd(?array $cmd) : self
    {
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @return HealthConfig|null
     */
    public function getHealthcheck() : ?HealthConfig
    {
        return $this->healthcheck;
    }
    /**
     * A test to perform to check that the container is healthy.
     *
     * @param HealthConfig|null $healthcheck
     *
     * @return self
     */
    public function setHealthcheck(?HealthConfig $healthcheck) : self
    {
        $this->healthcheck = $healthcheck;
        return $this;
    }
    /**
     * Command is already escaped (Windows only)
     *
     * @return bool|null
     */
    public function getArgsEscaped() : ?bool
    {
        return $this->argsEscaped;
    }
    /**
     * Command is already escaped (Windows only)
     *
     * @param bool|null $argsEscaped
     *
     * @return self
     */
    public function setArgsEscaped(?bool $argsEscaped) : self
    {
        $this->argsEscaped = $argsEscaped;
        return $this;
    }
    /**
     * The name of the image to use when creating the container
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * The name of the image to use when creating the container
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
     * An object mapping mount point paths inside the container to empty objects.
     *
     * @return ContainerConfigVolumesItem[]|null
     */
    public function getVolumes() : ?\ArrayObject
    {
        return $this->volumes;
    }
    /**
     * An object mapping mount point paths inside the container to empty objects.
     *
     * @param ContainerConfigVolumesItem[]|null $volumes
     *
     * @return self
     */
    public function setVolumes(?\ArrayObject $volumes) : self
    {
        $this->volumes = $volumes;
        return $this;
    }
    /**
     * The working directory for commands to run in.
     *
     * @return string|null
     */
    public function getWorkingDir() : ?string
    {
        return $this->workingDir;
    }
    /**
     * The working directory for commands to run in.
     *
     * @param string|null $workingDir
     *
     * @return self
     */
    public function setWorkingDir(?string $workingDir) : self
    {
        $this->workingDir = $workingDir;
        return $this;
    }
    /**
    * The entry point for the container as a string or an array of strings.
    
    If the array consists of exactly one empty string (`[""]`) then the entry point is reset to system default (i.e., the entry point used by docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
    
    *
    * @return string[]|null
    */
    public function getEntrypoint() : ?array
    {
        return $this->entrypoint;
    }
    /**
    * The entry point for the container as a string or an array of strings.
    
    If the array consists of exactly one empty string (`[""]`) then the entry point is reset to system default (i.e., the entry point used by docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
    
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
     * Disable networking for the container.
     *
     * @return bool|null
     */
    public function getNetworkDisabled() : ?bool
    {
        return $this->networkDisabled;
    }
    /**
     * Disable networking for the container.
     *
     * @param bool|null $networkDisabled
     *
     * @return self
     */
    public function setNetworkDisabled(?bool $networkDisabled) : self
    {
        $this->networkDisabled = $networkDisabled;
        return $this;
    }
    /**
     * MAC address of the container.
     *
     * @return string|null
     */
    public function getMacAddress() : ?string
    {
        return $this->macAddress;
    }
    /**
     * MAC address of the container.
     *
     * @param string|null $macAddress
     *
     * @return self
     */
    public function setMacAddress(?string $macAddress) : self
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @return string[]|null
     */
    public function getOnBuild() : ?array
    {
        return $this->onBuild;
    }
    /**
     * `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @param string[]|null $onBuild
     *
     * @return self
     */
    public function setOnBuild(?array $onBuild) : self
    {
        $this->onBuild = $onBuild;
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
     * Signal to stop a container as a string or unsigned integer.
     *
     * @return string|null
     */
    public function getStopSignal() : ?string
    {
        return $this->stopSignal;
    }
    /**
     * Signal to stop a container as a string or unsigned integer.
     *
     * @param string|null $stopSignal
     *
     * @return self
     */
    public function setStopSignal(?string $stopSignal) : self
    {
        $this->stopSignal = $stopSignal;
        return $this;
    }
    /**
     * Timeout to stop a container in seconds.
     *
     * @return int|null
     */
    public function getStopTimeout() : ?int
    {
        return $this->stopTimeout;
    }
    /**
     * Timeout to stop a container in seconds.
     *
     * @param int|null $stopTimeout
     *
     * @return self
     */
    public function setStopTimeout(?int $stopTimeout) : self
    {
        $this->stopTimeout = $stopTimeout;
        return $this;
    }
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @return string[]|null
     */
    public function getShell() : ?array
    {
        return $this->shell;
    }
    /**
     * Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @param string[]|null $shell
     *
     * @return self
     */
    public function setShell(?array $shell) : self
    {
        $this->shell = $shell;
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
     * This container's networking configuration.
     *
     * @return ContainersCreatePostBodyNetworkingConfig|null
     */
    public function getNetworkingConfig() : ?ContainersCreatePostBodyNetworkingConfig
    {
        return $this->networkingConfig;
    }
    /**
     * This container's networking configuration.
     *
     * @param ContainersCreatePostBodyNetworkingConfig|null $networkingConfig
     *
     * @return self
     */
    public function setNetworkingConfig(?ContainersCreatePostBodyNetworkingConfig $networkingConfig) : self
    {
        $this->networkingConfig = $networkingConfig;
        return $this;
    }
}