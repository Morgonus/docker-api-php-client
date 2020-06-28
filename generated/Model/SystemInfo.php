<?php

namespace Docker\API\Model;

class SystemInfo
{
    /**
    * Unique identifier of the daemon.
    
    <p><br /></p>
    
    > **Note**: The format of the ID itself is not part of the API, and
    > should not be considered stable.
    
    *
    * @var string|null
    */
    protected $iD;
    /**
     * Total number of containers on the host.
     *
     * @var int|null
     */
    protected $containers;
    /**
     * Number of containers with status `"running"`.
     *
     * @var int|null
     */
    protected $containersRunning;
    /**
     * Number of containers with status `"paused"`.
     *
     * @var int|null
     */
    protected $containersPaused;
    /**
     * Number of containers with status `"stopped"`.
     *
     * @var int|null
     */
    protected $containersStopped;
    /**
    * Total number of images on the host.
    
    Both _tagged_ and _untagged_ (dangling) images are counted.
    
    *
    * @var int|null
    */
    protected $images;
    /**
     * Name of the storage driver in use.
     *
     * @var string|null
     */
    protected $driver;
    /**
    * Information specific to the storage driver, provided as
    "label" / "value" pairs.
    
    This information is provided by the storage driver, and formatted
    in a way consistent with the output of `docker info` on the command
    line.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @var string[][]|null
    */
    protected $driverStatus;
    /**
    * Root directory of persistent Docker state.
    
    Defaults to `/var/lib/docker` on Linux, and `C:\ProgramData\docker`
    on Windows.
    
    *
    * @var string|null
    */
    protected $dockerRootDir;
    /**
    * Status information about this node (standalone Swarm API).
    
    <p><br /></p>
    
    > **Note**: The information returned in this field is only propagated
    > by the Swarm standalone API, and is empty (`null`) when using
    > built-in swarm mode.
    
    *
    * @var string[][]|null
    */
    protected $systemStatus;
    /**
    * Available plugins per type.
    
    <p><br /></p>
    
    > **Note**: Only unmanaged (V1) plugins are included in this list.
    > V1 plugins are "lazily" loaded, and are not returned in this list
    > if there is no resource using the plugin.
    
    *
    * @var PluginsInfo|null
    */
    protected $plugins;
    /**
     * Indicates if the host has memory limit support enabled.
     *
     * @var bool|null
     */
    protected $memoryLimit;
    /**
     * Indicates if the host has memory swap limit support enabled.
     *
     * @var bool|null
     */
    protected $swapLimit;
    /**
     * Indicates if the host has kernel memory limit support enabled.
     *
     * @var bool|null
     */
    protected $kernelMemory;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) period is supported by the host.
     *
     * @var bool|null
     */
    protected $cpuCfsPeriod;
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) quota is supported by the host.
     *
     * @var bool|null
     */
    protected $cpuCfsQuota;
    /**
     * Indicates if CPU Shares limiting is supported by the host.
     *
     * @var bool|null
     */
    protected $cPUShares;
    /**
    * Indicates if CPUsets (cpuset.cpus, cpuset.mems) are supported by the host.
    
    See [cpuset(7)](https://www.kernel.org/doc/Documentation/cgroup-v1/cpusets.txt)
    
    *
    * @var bool|null
    */
    protected $cPUSet;
    /**
     * Indicates if the host kernel has PID limit support enabled.
     *
     * @var bool|null
     */
    protected $pidsLimit;
    /**
     * Indicates if OOM killer disable is supported on the host.
     *
     * @var bool|null
     */
    protected $oomKillDisable;
    /**
     * Indicates IPv4 forwarding is enabled.
     *
     * @var bool|null
     */
    protected $iPv4Forwarding;
    /**
     * Indicates if `bridge-nf-call-iptables` is available on the host.
     *
     * @var bool|null
     */
    protected $bridgeNfIptables;
    /**
     * Indicates if `bridge-nf-call-ip6tables` is available on the host.
     *
     * @var bool|null
     */
    protected $bridgeNfIp6tables;
    /**
     * Indicates if the daemon is running in debug-mode / with debug-level logging enabled.
     *
     * @var bool|null
     */
    protected $debug;
    /**
    * The total number of file Descriptors in use by the daemon process.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @var int|null
    */
    protected $nFd;
    /**
    * The  number of goroutines that currently exist.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @var int|null
    */
    protected $nGoroutines;
    /**
    * Current system-time in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
    format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $systemTime;
    /**
     * The logging driver to use as a default for new containers.
     *
     * @var string|null
     */
    protected $loggingDriver;
    /**
     * The driver to use for managing cgroups.
     *
     * @var string|null
     */
    protected $cgroupDriver = 'cgroupfs';
    /**
     * Number of event listeners subscribed.
     *
     * @var int|null
     */
    protected $nEventsListener;
    /**
    * Kernel version of the host.
    
    On Linux, this information obtained from `uname`. On Windows this
    information is queried from the <kbd>HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\</kbd>
    registry value, for example _"10.0 14393 (14393.1198.amd64fre.rs1_release_sec.170427-1353)"_.
    
    *
    * @var string|null
    */
    protected $kernelVersion;
    /**
    * Name of the host's operating system, for example: "Ubuntu 16.04.2 LTS"
    or "Windows Server 2016 Datacenter"
    
    *
    * @var string|null
    */
    protected $operatingSystem;
    /**
    * Generic type of the operating system of the host, as returned by the
    Go runtime (`GOOS`).
    
    Currently returned values are "linux" and "windows". A full list of
    possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @var string|null
    */
    protected $oSType;
    /**
    * Hardware architecture of the host, as returned by the Go runtime
    (`GOARCH`).
    
    A full list of possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @var string|null
    */
    protected $architecture;
    /**
    * The number of logical CPUs usable by the daemon.
    
    The number of available CPUs is checked by querying the operating
    system when the daemon starts. Changes to operating system CPU
    allocation after the daemon is started are not reflected.
    
    *
    * @var int|null
    */
    protected $nCPU;
    /**
     * Total amount of physical memory available on the host, in kilobytes (kB).
     *
     * @var int|null
     */
    protected $memTotal;
    /**
    * Address / URL of the index server that is used for image search,
    and as a default for user authentication for Docker Hub and Docker Cloud.
    
    *
    * @var string|null
    */
    protected $indexServerAddress = 'https://index.docker.io/v1/';
    /**
     * RegistryServiceConfig stores daemon registry services configuration.
     *
     * @var RegistryServiceConfig|null
     */
    protected $registryConfig;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @var GenericResourcesItem[]|null
     */
    protected $genericResources;
    /**
    * HTTP-proxy configured for the daemon. This value is obtained from the
    [`HTTP_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @var string|null
    */
    protected $httpProxy;
    /**
    * HTTPS-proxy configured for the daemon. This value is obtained from the
    [`HTTPS_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @var string|null
    */
    protected $httpsProxy;
    /**
    * Comma-separated list of domain extensions for which no proxy should be
    used. This value is obtained from the [`NO_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html)
    environment variable.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @var string|null
    */
    protected $noProxy;
    /**
     * Hostname of the host.
     *
     * @var string|null
     */
    protected $name;
    /**
    * User-defined labels (key/value metadata) as set on the daemon.
    
    <p><br /></p>
    
    > **Note**: When part of a Swarm, nodes can both have _daemon_ labels,
    > set through the daemon configuration, and _node_ labels, set from a
    > manager node in the Swarm. Node labels are not included in this
    > field. Node labels can be retrieved using the `/nodes/(id)` endpoint
    > on a manager node in the Swarm.
    
    *
    * @var string[]|null
    */
    protected $labels;
    /**
     * Indicates if experimental features are enabled on the daemon.
     *
     * @var bool|null
     */
    protected $experimentalBuild;
    /**
    * Version string of the daemon.
    
    > **Note**: the [standalone Swarm API](https://docs.docker.com/swarm/swarm-api/)
    > returns the Swarm version instead of the daemon  version, for example
    > `swarm/1.2.8`.
    
    *
    * @var string|null
    */
    protected $serverVersion;
    /**
    * URL of the distributed storage backend.
    
    
    The storage backend is used for multihost networking (to store
    network and endpoint information) and by the node discovery mechanism.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @var string|null
    */
    protected $clusterStore;
    /**
    * The network endpoint that the Engine advertises for the purpose of
    node discovery. ClusterAdvertise is a `host:port` combination on which
    the daemon is reachable by other hosts.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @var string|null
    */
    protected $clusterAdvertise;
    /**
    * List of [OCI compliant](https://github.com/opencontainers/runtime-spec)
    runtimes configured on the daemon. Keys hold the "name" used to
    reference the runtime.
    
    The Docker daemon relies on an OCI compliant runtime (invoked via the
    `containerd` daemon) as its interface to the Linux kernel namespaces,
    cgroups, and SELinux.
    
    The default runtime is `runc`, and automatically configured. Additional
    runtimes can be configured by the user and will be listed here.
    
    *
    * @var Runtime[]|null
    */
    protected $runtimes;
    /**
    * Name of the default OCI runtime that is used when starting containers.
    
    The default can be overridden per-container at create time.
    
    *
    * @var string|null
    */
    protected $defaultRuntime = 'runc';
    /**
     * Represents generic information about swarm.
     *
     * @var SwarmInfo|null
     */
    protected $swarm;
    /**
    * Indicates if live restore is enabled.
    
    If enabled, containers are kept running when the daemon is shutdown
    or upon daemon start if running containers are detected.
    
    *
    * @var bool|null
    */
    protected $liveRestoreEnabled = false;
    /**
    * Represents the isolation technology to use as a default for containers.
    The supported values are platform-specific.
    
    If no isolation value is specified on daemon start, on Windows client,
    the default is `hyperv`, and on Windows server, the default is `process`.
    
    This option is currently not used on other platforms.
    
    *
    * @var string|null
    */
    protected $isolation = 'default';
    /**
    * Name and, optional, path of the `docker-init` binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
    *
    * @var string|null
    */
    protected $initBinary;
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @var Commit|null
    */
    protected $containerdCommit;
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @var Commit|null
    */
    protected $runcCommit;
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @var Commit|null
    */
    protected $initCommit;
    /**
    * List of security features that are enabled on the daemon, such as
    apparmor, seccomp, SELinux, user-namespaces (userns), and rootless.
    
    Additional configuration options for each security feature may
    be present, and are included as a comma-separated list of key/value
    pairs.
    
    *
    * @var string[]|null
    */
    protected $securityOptions;
    /**
    * Reports a summary of the product license on the daemon.
    
    If a commercial license has been applied to the daemon, information
    such as number of nodes, and expiration are included.
    
    *
    * @var string|null
    */
    protected $productLicense;
    /**
    * List of warnings / informational messages about missing features, or
    issues related to the daemon configuration.
    
    These messages can be printed by the client as information to the user.
    
    *
    * @var string[]|null
    */
    protected $warnings;
    /**
    * Unique identifier of the daemon.
    
    <p><br /></p>
    
    > **Note**: The format of the ID itself is not part of the API, and
    > should not be considered stable.
    
    *
    * @return string|null
    */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
    * Unique identifier of the daemon.
    
    <p><br /></p>
    
    > **Note**: The format of the ID itself is not part of the API, and
    > should not be considered stable.
    
    *
    * @param string|null $iD
    *
    * @return self
    */
    public function setID(?string $iD) : self
    {
        $this->iD = $iD;
        return $this;
    }
    /**
     * Total number of containers on the host.
     *
     * @return int|null
     */
    public function getContainers() : ?int
    {
        return $this->containers;
    }
    /**
     * Total number of containers on the host.
     *
     * @param int|null $containers
     *
     * @return self
     */
    public function setContainers(?int $containers) : self
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * Number of containers with status `"running"`.
     *
     * @return int|null
     */
    public function getContainersRunning() : ?int
    {
        return $this->containersRunning;
    }
    /**
     * Number of containers with status `"running"`.
     *
     * @param int|null $containersRunning
     *
     * @return self
     */
    public function setContainersRunning(?int $containersRunning) : self
    {
        $this->containersRunning = $containersRunning;
        return $this;
    }
    /**
     * Number of containers with status `"paused"`.
     *
     * @return int|null
     */
    public function getContainersPaused() : ?int
    {
        return $this->containersPaused;
    }
    /**
     * Number of containers with status `"paused"`.
     *
     * @param int|null $containersPaused
     *
     * @return self
     */
    public function setContainersPaused(?int $containersPaused) : self
    {
        $this->containersPaused = $containersPaused;
        return $this;
    }
    /**
     * Number of containers with status `"stopped"`.
     *
     * @return int|null
     */
    public function getContainersStopped() : ?int
    {
        return $this->containersStopped;
    }
    /**
     * Number of containers with status `"stopped"`.
     *
     * @param int|null $containersStopped
     *
     * @return self
     */
    public function setContainersStopped(?int $containersStopped) : self
    {
        $this->containersStopped = $containersStopped;
        return $this;
    }
    /**
    * Total number of images on the host.
    
    Both _tagged_ and _untagged_ (dangling) images are counted.
    
    *
    * @return int|null
    */
    public function getImages() : ?int
    {
        return $this->images;
    }
    /**
    * Total number of images on the host.
    
    Both _tagged_ and _untagged_ (dangling) images are counted.
    
    *
    * @param int|null $images
    *
    * @return self
    */
    public function setImages(?int $images) : self
    {
        $this->images = $images;
        return $this;
    }
    /**
     * Name of the storage driver in use.
     *
     * @return string|null
     */
    public function getDriver() : ?string
    {
        return $this->driver;
    }
    /**
     * Name of the storage driver in use.
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
    * Information specific to the storage driver, provided as
    "label" / "value" pairs.
    
    This information is provided by the storage driver, and formatted
    in a way consistent with the output of `docker info` on the command
    line.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @return string[][]|null
    */
    public function getDriverStatus() : ?array
    {
        return $this->driverStatus;
    }
    /**
    * Information specific to the storage driver, provided as
    "label" / "value" pairs.
    
    This information is provided by the storage driver, and formatted
    in a way consistent with the output of `docker info` on the command
    line.
    
    <p><br /></p>
    
    > **Note**: The information returned in this field, including the
    > formatting of values and labels, should not be considered stable,
    > and may change without notice.
    
    *
    * @param string[][]|null $driverStatus
    *
    * @return self
    */
    public function setDriverStatus(?array $driverStatus) : self
    {
        $this->driverStatus = $driverStatus;
        return $this;
    }
    /**
    * Root directory of persistent Docker state.
    
    Defaults to `/var/lib/docker` on Linux, and `C:\ProgramData\docker`
    on Windows.
    
    *
    * @return string|null
    */
    public function getDockerRootDir() : ?string
    {
        return $this->dockerRootDir;
    }
    /**
    * Root directory of persistent Docker state.
    
    Defaults to `/var/lib/docker` on Linux, and `C:\ProgramData\docker`
    on Windows.
    
    *
    * @param string|null $dockerRootDir
    *
    * @return self
    */
    public function setDockerRootDir(?string $dockerRootDir) : self
    {
        $this->dockerRootDir = $dockerRootDir;
        return $this;
    }
    /**
    * Status information about this node (standalone Swarm API).
    
    <p><br /></p>
    
    > **Note**: The information returned in this field is only propagated
    > by the Swarm standalone API, and is empty (`null`) when using
    > built-in swarm mode.
    
    *
    * @return string[][]|null
    */
    public function getSystemStatus() : ?array
    {
        return $this->systemStatus;
    }
    /**
    * Status information about this node (standalone Swarm API).
    
    <p><br /></p>
    
    > **Note**: The information returned in this field is only propagated
    > by the Swarm standalone API, and is empty (`null`) when using
    > built-in swarm mode.
    
    *
    * @param string[][]|null $systemStatus
    *
    * @return self
    */
    public function setSystemStatus(?array $systemStatus) : self
    {
        $this->systemStatus = $systemStatus;
        return $this;
    }
    /**
    * Available plugins per type.
    
    <p><br /></p>
    
    > **Note**: Only unmanaged (V1) plugins are included in this list.
    > V1 plugins are "lazily" loaded, and are not returned in this list
    > if there is no resource using the plugin.
    
    *
    * @return PluginsInfo|null
    */
    public function getPlugins() : ?PluginsInfo
    {
        return $this->plugins;
    }
    /**
    * Available plugins per type.
    
    <p><br /></p>
    
    > **Note**: Only unmanaged (V1) plugins are included in this list.
    > V1 plugins are "lazily" loaded, and are not returned in this list
    > if there is no resource using the plugin.
    
    *
    * @param PluginsInfo|null $plugins
    *
    * @return self
    */
    public function setPlugins(?PluginsInfo $plugins) : self
    {
        $this->plugins = $plugins;
        return $this;
    }
    /**
     * Indicates if the host has memory limit support enabled.
     *
     * @return bool|null
     */
    public function getMemoryLimit() : ?bool
    {
        return $this->memoryLimit;
    }
    /**
     * Indicates if the host has memory limit support enabled.
     *
     * @param bool|null $memoryLimit
     *
     * @return self
     */
    public function setMemoryLimit(?bool $memoryLimit) : self
    {
        $this->memoryLimit = $memoryLimit;
        return $this;
    }
    /**
     * Indicates if the host has memory swap limit support enabled.
     *
     * @return bool|null
     */
    public function getSwapLimit() : ?bool
    {
        return $this->swapLimit;
    }
    /**
     * Indicates if the host has memory swap limit support enabled.
     *
     * @param bool|null $swapLimit
     *
     * @return self
     */
    public function setSwapLimit(?bool $swapLimit) : self
    {
        $this->swapLimit = $swapLimit;
        return $this;
    }
    /**
     * Indicates if the host has kernel memory limit support enabled.
     *
     * @return bool|null
     */
    public function getKernelMemory() : ?bool
    {
        return $this->kernelMemory;
    }
    /**
     * Indicates if the host has kernel memory limit support enabled.
     *
     * @param bool|null $kernelMemory
     *
     * @return self
     */
    public function setKernelMemory(?bool $kernelMemory) : self
    {
        $this->kernelMemory = $kernelMemory;
        return $this;
    }
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) period is supported by the host.
     *
     * @return bool|null
     */
    public function getCpuCfsPeriod() : ?bool
    {
        return $this->cpuCfsPeriod;
    }
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) period is supported by the host.
     *
     * @param bool|null $cpuCfsPeriod
     *
     * @return self
     */
    public function setCpuCfsPeriod(?bool $cpuCfsPeriod) : self
    {
        $this->cpuCfsPeriod = $cpuCfsPeriod;
        return $this;
    }
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) quota is supported by the host.
     *
     * @return bool|null
     */
    public function getCpuCfsQuota() : ?bool
    {
        return $this->cpuCfsQuota;
    }
    /**
     * Indicates if CPU CFS(Completely Fair Scheduler) quota is supported by the host.
     *
     * @param bool|null $cpuCfsQuota
     *
     * @return self
     */
    public function setCpuCfsQuota(?bool $cpuCfsQuota) : self
    {
        $this->cpuCfsQuota = $cpuCfsQuota;
        return $this;
    }
    /**
     * Indicates if CPU Shares limiting is supported by the host.
     *
     * @return bool|null
     */
    public function getCPUShares() : ?bool
    {
        return $this->cPUShares;
    }
    /**
     * Indicates if CPU Shares limiting is supported by the host.
     *
     * @param bool|null $cPUShares
     *
     * @return self
     */
    public function setCPUShares(?bool $cPUShares) : self
    {
        $this->cPUShares = $cPUShares;
        return $this;
    }
    /**
    * Indicates if CPUsets (cpuset.cpus, cpuset.mems) are supported by the host.
    
    See [cpuset(7)](https://www.kernel.org/doc/Documentation/cgroup-v1/cpusets.txt)
    
    *
    * @return bool|null
    */
    public function getCPUSet() : ?bool
    {
        return $this->cPUSet;
    }
    /**
    * Indicates if CPUsets (cpuset.cpus, cpuset.mems) are supported by the host.
    
    See [cpuset(7)](https://www.kernel.org/doc/Documentation/cgroup-v1/cpusets.txt)
    
    *
    * @param bool|null $cPUSet
    *
    * @return self
    */
    public function setCPUSet(?bool $cPUSet) : self
    {
        $this->cPUSet = $cPUSet;
        return $this;
    }
    /**
     * Indicates if the host kernel has PID limit support enabled.
     *
     * @return bool|null
     */
    public function getPidsLimit() : ?bool
    {
        return $this->pidsLimit;
    }
    /**
     * Indicates if the host kernel has PID limit support enabled.
     *
     * @param bool|null $pidsLimit
     *
     * @return self
     */
    public function setPidsLimit(?bool $pidsLimit) : self
    {
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /**
     * Indicates if OOM killer disable is supported on the host.
     *
     * @return bool|null
     */
    public function getOomKillDisable() : ?bool
    {
        return $this->oomKillDisable;
    }
    /**
     * Indicates if OOM killer disable is supported on the host.
     *
     * @param bool|null $oomKillDisable
     *
     * @return self
     */
    public function setOomKillDisable(?bool $oomKillDisable) : self
    {
        $this->oomKillDisable = $oomKillDisable;
        return $this;
    }
    /**
     * Indicates IPv4 forwarding is enabled.
     *
     * @return bool|null
     */
    public function getIPv4Forwarding() : ?bool
    {
        return $this->iPv4Forwarding;
    }
    /**
     * Indicates IPv4 forwarding is enabled.
     *
     * @param bool|null $iPv4Forwarding
     *
     * @return self
     */
    public function setIPv4Forwarding(?bool $iPv4Forwarding) : self
    {
        $this->iPv4Forwarding = $iPv4Forwarding;
        return $this;
    }
    /**
     * Indicates if `bridge-nf-call-iptables` is available on the host.
     *
     * @return bool|null
     */
    public function getBridgeNfIptables() : ?bool
    {
        return $this->bridgeNfIptables;
    }
    /**
     * Indicates if `bridge-nf-call-iptables` is available on the host.
     *
     * @param bool|null $bridgeNfIptables
     *
     * @return self
     */
    public function setBridgeNfIptables(?bool $bridgeNfIptables) : self
    {
        $this->bridgeNfIptables = $bridgeNfIptables;
        return $this;
    }
    /**
     * Indicates if `bridge-nf-call-ip6tables` is available on the host.
     *
     * @return bool|null
     */
    public function getBridgeNfIp6tables() : ?bool
    {
        return $this->bridgeNfIp6tables;
    }
    /**
     * Indicates if `bridge-nf-call-ip6tables` is available on the host.
     *
     * @param bool|null $bridgeNfIp6tables
     *
     * @return self
     */
    public function setBridgeNfIp6tables(?bool $bridgeNfIp6tables) : self
    {
        $this->bridgeNfIp6tables = $bridgeNfIp6tables;
        return $this;
    }
    /**
     * Indicates if the daemon is running in debug-mode / with debug-level logging enabled.
     *
     * @return bool|null
     */
    public function getDebug() : ?bool
    {
        return $this->debug;
    }
    /**
     * Indicates if the daemon is running in debug-mode / with debug-level logging enabled.
     *
     * @param bool|null $debug
     *
     * @return self
     */
    public function setDebug(?bool $debug) : self
    {
        $this->debug = $debug;
        return $this;
    }
    /**
    * The total number of file Descriptors in use by the daemon process.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @return int|null
    */
    public function getNFd() : ?int
    {
        return $this->nFd;
    }
    /**
    * The total number of file Descriptors in use by the daemon process.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @param int|null $nFd
    *
    * @return self
    */
    public function setNFd(?int $nFd) : self
    {
        $this->nFd = $nFd;
        return $this;
    }
    /**
    * The  number of goroutines that currently exist.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @return int|null
    */
    public function getNGoroutines() : ?int
    {
        return $this->nGoroutines;
    }
    /**
    * The  number of goroutines that currently exist.
    
    This information is only returned if debug-mode is enabled.
    
    *
    * @param int|null $nGoroutines
    *
    * @return self
    */
    public function setNGoroutines(?int $nGoroutines) : self
    {
        $this->nGoroutines = $nGoroutines;
        return $this;
    }
    /**
    * Current system-time in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
    format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getSystemTime() : ?string
    {
        return $this->systemTime;
    }
    /**
    * Current system-time in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt)
    format with nano-seconds.
    
    *
    * @param string|null $systemTime
    *
    * @return self
    */
    public function setSystemTime(?string $systemTime) : self
    {
        $this->systemTime = $systemTime;
        return $this;
    }
    /**
     * The logging driver to use as a default for new containers.
     *
     * @return string|null
     */
    public function getLoggingDriver() : ?string
    {
        return $this->loggingDriver;
    }
    /**
     * The logging driver to use as a default for new containers.
     *
     * @param string|null $loggingDriver
     *
     * @return self
     */
    public function setLoggingDriver(?string $loggingDriver) : self
    {
        $this->loggingDriver = $loggingDriver;
        return $this;
    }
    /**
     * The driver to use for managing cgroups.
     *
     * @return string|null
     */
    public function getCgroupDriver() : ?string
    {
        return $this->cgroupDriver;
    }
    /**
     * The driver to use for managing cgroups.
     *
     * @param string|null $cgroupDriver
     *
     * @return self
     */
    public function setCgroupDriver(?string $cgroupDriver) : self
    {
        $this->cgroupDriver = $cgroupDriver;
        return $this;
    }
    /**
     * Number of event listeners subscribed.
     *
     * @return int|null
     */
    public function getNEventsListener() : ?int
    {
        return $this->nEventsListener;
    }
    /**
     * Number of event listeners subscribed.
     *
     * @param int|null $nEventsListener
     *
     * @return self
     */
    public function setNEventsListener(?int $nEventsListener) : self
    {
        $this->nEventsListener = $nEventsListener;
        return $this;
    }
    /**
    * Kernel version of the host.
    
    On Linux, this information obtained from `uname`. On Windows this
    information is queried from the <kbd>HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\</kbd>
    registry value, for example _"10.0 14393 (14393.1198.amd64fre.rs1_release_sec.170427-1353)"_.
    
    *
    * @return string|null
    */
    public function getKernelVersion() : ?string
    {
        return $this->kernelVersion;
    }
    /**
    * Kernel version of the host.
    
    On Linux, this information obtained from `uname`. On Windows this
    information is queried from the <kbd>HKEY_LOCAL_MACHINE\\SOFTWARE\\Microsoft\\Windows NT\\CurrentVersion\\</kbd>
    registry value, for example _"10.0 14393 (14393.1198.amd64fre.rs1_release_sec.170427-1353)"_.
    
    *
    * @param string|null $kernelVersion
    *
    * @return self
    */
    public function setKernelVersion(?string $kernelVersion) : self
    {
        $this->kernelVersion = $kernelVersion;
        return $this;
    }
    /**
    * Name of the host's operating system, for example: "Ubuntu 16.04.2 LTS"
    or "Windows Server 2016 Datacenter"
    
    *
    * @return string|null
    */
    public function getOperatingSystem() : ?string
    {
        return $this->operatingSystem;
    }
    /**
    * Name of the host's operating system, for example: "Ubuntu 16.04.2 LTS"
    or "Windows Server 2016 Datacenter"
    
    *
    * @param string|null $operatingSystem
    *
    * @return self
    */
    public function setOperatingSystem(?string $operatingSystem) : self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }
    /**
    * Generic type of the operating system of the host, as returned by the
    Go runtime (`GOOS`).
    
    Currently returned values are "linux" and "windows". A full list of
    possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @return string|null
    */
    public function getOSType() : ?string
    {
        return $this->oSType;
    }
    /**
    * Generic type of the operating system of the host, as returned by the
    Go runtime (`GOOS`).
    
    Currently returned values are "linux" and "windows". A full list of
    possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @param string|null $oSType
    *
    * @return self
    */
    public function setOSType(?string $oSType) : self
    {
        $this->oSType = $oSType;
        return $this;
    }
    /**
    * Hardware architecture of the host, as returned by the Go runtime
    (`GOARCH`).
    
    A full list of possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @return string|null
    */
    public function getArchitecture() : ?string
    {
        return $this->architecture;
    }
    /**
    * Hardware architecture of the host, as returned by the Go runtime
    (`GOARCH`).
    
    A full list of possible values can be found in the [Go documentation](https://golang.org/doc/install/source#environment).
    
    *
    * @param string|null $architecture
    *
    * @return self
    */
    public function setArchitecture(?string $architecture) : self
    {
        $this->architecture = $architecture;
        return $this;
    }
    /**
    * The number of logical CPUs usable by the daemon.
    
    The number of available CPUs is checked by querying the operating
    system when the daemon starts. Changes to operating system CPU
    allocation after the daemon is started are not reflected.
    
    *
    * @return int|null
    */
    public function getNCPU() : ?int
    {
        return $this->nCPU;
    }
    /**
    * The number of logical CPUs usable by the daemon.
    
    The number of available CPUs is checked by querying the operating
    system when the daemon starts. Changes to operating system CPU
    allocation after the daemon is started are not reflected.
    
    *
    * @param int|null $nCPU
    *
    * @return self
    */
    public function setNCPU(?int $nCPU) : self
    {
        $this->nCPU = $nCPU;
        return $this;
    }
    /**
     * Total amount of physical memory available on the host, in kilobytes (kB).
     *
     * @return int|null
     */
    public function getMemTotal() : ?int
    {
        return $this->memTotal;
    }
    /**
     * Total amount of physical memory available on the host, in kilobytes (kB).
     *
     * @param int|null $memTotal
     *
     * @return self
     */
    public function setMemTotal(?int $memTotal) : self
    {
        $this->memTotal = $memTotal;
        return $this;
    }
    /**
    * Address / URL of the index server that is used for image search,
    and as a default for user authentication for Docker Hub and Docker Cloud.
    
    *
    * @return string|null
    */
    public function getIndexServerAddress() : ?string
    {
        return $this->indexServerAddress;
    }
    /**
    * Address / URL of the index server that is used for image search,
    and as a default for user authentication for Docker Hub and Docker Cloud.
    
    *
    * @param string|null $indexServerAddress
    *
    * @return self
    */
    public function setIndexServerAddress(?string $indexServerAddress) : self
    {
        $this->indexServerAddress = $indexServerAddress;
        return $this;
    }
    /**
     * RegistryServiceConfig stores daemon registry services configuration.
     *
     * @return RegistryServiceConfig|null
     */
    public function getRegistryConfig() : ?RegistryServiceConfig
    {
        return $this->registryConfig;
    }
    /**
     * RegistryServiceConfig stores daemon registry services configuration.
     *
     * @param RegistryServiceConfig|null $registryConfig
     *
     * @return self
     */
    public function setRegistryConfig(?RegistryServiceConfig $registryConfig) : self
    {
        $this->registryConfig = $registryConfig;
        return $this;
    }
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @return GenericResourcesItem[]|null
     */
    public function getGenericResources() : ?array
    {
        return $this->genericResources;
    }
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or String resources (e.g, `GPU=UUID1`)
     *
     * @param GenericResourcesItem[]|null $genericResources
     *
     * @return self
     */
    public function setGenericResources(?array $genericResources) : self
    {
        $this->genericResources = $genericResources;
        return $this;
    }
    /**
    * HTTP-proxy configured for the daemon. This value is obtained from the
    [`HTTP_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @return string|null
    */
    public function getHttpProxy() : ?string
    {
        return $this->httpProxy;
    }
    /**
    * HTTP-proxy configured for the daemon. This value is obtained from the
    [`HTTP_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @param string|null $httpProxy
    *
    * @return self
    */
    public function setHttpProxy(?string $httpProxy) : self
    {
        $this->httpProxy = $httpProxy;
        return $this;
    }
    /**
    * HTTPS-proxy configured for the daemon. This value is obtained from the
    [`HTTPS_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @return string|null
    */
    public function getHttpsProxy() : ?string
    {
        return $this->httpsProxy;
    }
    /**
    * HTTPS-proxy configured for the daemon. This value is obtained from the
    [`HTTPS_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html) environment variable.
    Credentials ([user info component](https://tools.ietf.org/html/rfc3986#section-3.2.1)) in the proxy URL
    are masked in the API response.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @param string|null $httpsProxy
    *
    * @return self
    */
    public function setHttpsProxy(?string $httpsProxy) : self
    {
        $this->httpsProxy = $httpsProxy;
        return $this;
    }
    /**
    * Comma-separated list of domain extensions for which no proxy should be
    used. This value is obtained from the [`NO_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html)
    environment variable.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @return string|null
    */
    public function getNoProxy() : ?string
    {
        return $this->noProxy;
    }
    /**
    * Comma-separated list of domain extensions for which no proxy should be
    used. This value is obtained from the [`NO_PROXY`](https://www.gnu.org/software/wget/manual/html_node/Proxies.html)
    environment variable.
    
    Containers do not automatically inherit this configuration.
    
    *
    * @param string|null $noProxy
    *
    * @return self
    */
    public function setNoProxy(?string $noProxy) : self
    {
        $this->noProxy = $noProxy;
        return $this;
    }
    /**
     * Hostname of the host.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Hostname of the host.
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
    * User-defined labels (key/value metadata) as set on the daemon.
    
    <p><br /></p>
    
    > **Note**: When part of a Swarm, nodes can both have _daemon_ labels,
    > set through the daemon configuration, and _node_ labels, set from a
    > manager node in the Swarm. Node labels are not included in this
    > field. Node labels can be retrieved using the `/nodes/(id)` endpoint
    > on a manager node in the Swarm.
    
    *
    * @return string[]|null
    */
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
    * User-defined labels (key/value metadata) as set on the daemon.
    
    <p><br /></p>
    
    > **Note**: When part of a Swarm, nodes can both have _daemon_ labels,
    > set through the daemon configuration, and _node_ labels, set from a
    > manager node in the Swarm. Node labels are not included in this
    > field. Node labels can be retrieved using the `/nodes/(id)` endpoint
    > on a manager node in the Swarm.
    
    *
    * @param string[]|null $labels
    *
    * @return self
    */
    public function setLabels(?array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * Indicates if experimental features are enabled on the daemon.
     *
     * @return bool|null
     */
    public function getExperimentalBuild() : ?bool
    {
        return $this->experimentalBuild;
    }
    /**
     * Indicates if experimental features are enabled on the daemon.
     *
     * @param bool|null $experimentalBuild
     *
     * @return self
     */
    public function setExperimentalBuild(?bool $experimentalBuild) : self
    {
        $this->experimentalBuild = $experimentalBuild;
        return $this;
    }
    /**
    * Version string of the daemon.
    
    > **Note**: the [standalone Swarm API](https://docs.docker.com/swarm/swarm-api/)
    > returns the Swarm version instead of the daemon  version, for example
    > `swarm/1.2.8`.
    
    *
    * @return string|null
    */
    public function getServerVersion() : ?string
    {
        return $this->serverVersion;
    }
    /**
    * Version string of the daemon.
    
    > **Note**: the [standalone Swarm API](https://docs.docker.com/swarm/swarm-api/)
    > returns the Swarm version instead of the daemon  version, for example
    > `swarm/1.2.8`.
    
    *
    * @param string|null $serverVersion
    *
    * @return self
    */
    public function setServerVersion(?string $serverVersion) : self
    {
        $this->serverVersion = $serverVersion;
        return $this;
    }
    /**
    * URL of the distributed storage backend.
    
    
    The storage backend is used for multihost networking (to store
    network and endpoint information) and by the node discovery mechanism.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @return string|null
    */
    public function getClusterStore() : ?string
    {
        return $this->clusterStore;
    }
    /**
    * URL of the distributed storage backend.
    
    
    The storage backend is used for multihost networking (to store
    network and endpoint information) and by the node discovery mechanism.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @param string|null $clusterStore
    *
    * @return self
    */
    public function setClusterStore(?string $clusterStore) : self
    {
        $this->clusterStore = $clusterStore;
        return $this;
    }
    /**
    * The network endpoint that the Engine advertises for the purpose of
    node discovery. ClusterAdvertise is a `host:port` combination on which
    the daemon is reachable by other hosts.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @return string|null
    */
    public function getClusterAdvertise() : ?string
    {
        return $this->clusterAdvertise;
    }
    /**
    * The network endpoint that the Engine advertises for the purpose of
    node discovery. ClusterAdvertise is a `host:port` combination on which
    the daemon is reachable by other hosts.
    
    <p><br /></p>
    
    > **Note**: This field is only propagated when using standalone Swarm
    > mode, and overlay networking using an external k/v store. Overlay
    > networks with Swarm mode enabled use the built-in raft store, and
    > this field will be empty.
    
    *
    * @param string|null $clusterAdvertise
    *
    * @return self
    */
    public function setClusterAdvertise(?string $clusterAdvertise) : self
    {
        $this->clusterAdvertise = $clusterAdvertise;
        return $this;
    }
    /**
    * List of [OCI compliant](https://github.com/opencontainers/runtime-spec)
    runtimes configured on the daemon. Keys hold the "name" used to
    reference the runtime.
    
    The Docker daemon relies on an OCI compliant runtime (invoked via the
    `containerd` daemon) as its interface to the Linux kernel namespaces,
    cgroups, and SELinux.
    
    The default runtime is `runc`, and automatically configured. Additional
    runtimes can be configured by the user and will be listed here.
    
    *
    * @return Runtime[]|null
    */
    public function getRuntimes() : ?\ArrayObject
    {
        return $this->runtimes;
    }
    /**
    * List of [OCI compliant](https://github.com/opencontainers/runtime-spec)
    runtimes configured on the daemon. Keys hold the "name" used to
    reference the runtime.
    
    The Docker daemon relies on an OCI compliant runtime (invoked via the
    `containerd` daemon) as its interface to the Linux kernel namespaces,
    cgroups, and SELinux.
    
    The default runtime is `runc`, and automatically configured. Additional
    runtimes can be configured by the user and will be listed here.
    
    *
    * @param Runtime[]|null $runtimes
    *
    * @return self
    */
    public function setRuntimes(?\ArrayObject $runtimes) : self
    {
        $this->runtimes = $runtimes;
        return $this;
    }
    /**
    * Name of the default OCI runtime that is used when starting containers.
    
    The default can be overridden per-container at create time.
    
    *
    * @return string|null
    */
    public function getDefaultRuntime() : ?string
    {
        return $this->defaultRuntime;
    }
    /**
    * Name of the default OCI runtime that is used when starting containers.
    
    The default can be overridden per-container at create time.
    
    *
    * @param string|null $defaultRuntime
    *
    * @return self
    */
    public function setDefaultRuntime(?string $defaultRuntime) : self
    {
        $this->defaultRuntime = $defaultRuntime;
        return $this;
    }
    /**
     * Represents generic information about swarm.
     *
     * @return SwarmInfo|null
     */
    public function getSwarm() : ?SwarmInfo
    {
        return $this->swarm;
    }
    /**
     * Represents generic information about swarm.
     *
     * @param SwarmInfo|null $swarm
     *
     * @return self
     */
    public function setSwarm(?SwarmInfo $swarm) : self
    {
        $this->swarm = $swarm;
        return $this;
    }
    /**
    * Indicates if live restore is enabled.
    
    If enabled, containers are kept running when the daemon is shutdown
    or upon daemon start if running containers are detected.
    
    *
    * @return bool|null
    */
    public function getLiveRestoreEnabled() : ?bool
    {
        return $this->liveRestoreEnabled;
    }
    /**
    * Indicates if live restore is enabled.
    
    If enabled, containers are kept running when the daemon is shutdown
    or upon daemon start if running containers are detected.
    
    *
    * @param bool|null $liveRestoreEnabled
    *
    * @return self
    */
    public function setLiveRestoreEnabled(?bool $liveRestoreEnabled) : self
    {
        $this->liveRestoreEnabled = $liveRestoreEnabled;
        return $this;
    }
    /**
    * Represents the isolation technology to use as a default for containers.
    The supported values are platform-specific.
    
    If no isolation value is specified on daemon start, on Windows client,
    the default is `hyperv`, and on Windows server, the default is `process`.
    
    This option is currently not used on other platforms.
    
    *
    * @return string|null
    */
    public function getIsolation() : ?string
    {
        return $this->isolation;
    }
    /**
    * Represents the isolation technology to use as a default for containers.
    The supported values are platform-specific.
    
    If no isolation value is specified on daemon start, on Windows client,
    the default is `hyperv`, and on Windows server, the default is `process`.
    
    This option is currently not used on other platforms.
    
    *
    * @param string|null $isolation
    *
    * @return self
    */
    public function setIsolation(?string $isolation) : self
    {
        $this->isolation = $isolation;
        return $this;
    }
    /**
    * Name and, optional, path of the `docker-init` binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
    *
    * @return string|null
    */
    public function getInitBinary() : ?string
    {
        return $this->initBinary;
    }
    /**
    * Name and, optional, path of the `docker-init` binary.
    
    If the path is omitted, the daemon searches the host's `$PATH` for the
    binary and uses the first result.
    
    *
    * @param string|null $initBinary
    *
    * @return self
    */
    public function setInitBinary(?string $initBinary) : self
    {
        $this->initBinary = $initBinary;
        return $this;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @return Commit|null
    */
    public function getContainerdCommit() : ?Commit
    {
        return $this->containerdCommit;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @param Commit|null $containerdCommit
    *
    * @return self
    */
    public function setContainerdCommit(?Commit $containerdCommit) : self
    {
        $this->containerdCommit = $containerdCommit;
        return $this;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @return Commit|null
    */
    public function getRuncCommit() : ?Commit
    {
        return $this->runcCommit;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @param Commit|null $runcCommit
    *
    * @return self
    */
    public function setRuncCommit(?Commit $runcCommit) : self
    {
        $this->runcCommit = $runcCommit;
        return $this;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @return Commit|null
    */
    public function getInitCommit() : ?Commit
    {
        return $this->initCommit;
    }
    /**
    * Commit holds the Git-commit (SHA1) that a binary was built from, as
    reported in the version-string of external tools, such as `containerd`,
    or `runC`.
    
    *
    * @param Commit|null $initCommit
    *
    * @return self
    */
    public function setInitCommit(?Commit $initCommit) : self
    {
        $this->initCommit = $initCommit;
        return $this;
    }
    /**
    * List of security features that are enabled on the daemon, such as
    apparmor, seccomp, SELinux, user-namespaces (userns), and rootless.
    
    Additional configuration options for each security feature may
    be present, and are included as a comma-separated list of key/value
    pairs.
    
    *
    * @return string[]|null
    */
    public function getSecurityOptions() : ?array
    {
        return $this->securityOptions;
    }
    /**
    * List of security features that are enabled on the daemon, such as
    apparmor, seccomp, SELinux, user-namespaces (userns), and rootless.
    
    Additional configuration options for each security feature may
    be present, and are included as a comma-separated list of key/value
    pairs.
    
    *
    * @param string[]|null $securityOptions
    *
    * @return self
    */
    public function setSecurityOptions(?array $securityOptions) : self
    {
        $this->securityOptions = $securityOptions;
        return $this;
    }
    /**
    * Reports a summary of the product license on the daemon.
    
    If a commercial license has been applied to the daemon, information
    such as number of nodes, and expiration are included.
    
    *
    * @return string|null
    */
    public function getProductLicense() : ?string
    {
        return $this->productLicense;
    }
    /**
    * Reports a summary of the product license on the daemon.
    
    If a commercial license has been applied to the daemon, information
    such as number of nodes, and expiration are included.
    
    *
    * @param string|null $productLicense
    *
    * @return self
    */
    public function setProductLicense(?string $productLicense) : self
    {
        $this->productLicense = $productLicense;
        return $this;
    }
    /**
    * List of warnings / informational messages about missing features, or
    issues related to the daemon configuration.
    
    These messages can be printed by the client as information to the user.
    
    *
    * @return string[]|null
    */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
    * List of warnings / informational messages about missing features, or
    issues related to the daemon configuration.
    
    These messages can be printed by the client as information to the user.
    
    *
    * @param string[]|null $warnings
    *
    * @return self
    */
    public function setWarnings(?array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}