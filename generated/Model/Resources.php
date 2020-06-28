<?php

namespace Docker\API\Model;

class Resources
{
    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     *
     * @var int|null
     */
    protected $cpuShares;
    /**
     * Memory limit in bytes.
     *
     * @var int|null
     */
    protected $memory = 0;
    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     *
     * @var string|null
     */
    protected $cgroupParent;
    /**
     * Block IO weight (relative weight).
     *
     * @var int|null
     */
    protected $blkioWeight;
    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @var ResourcesBlkioWeightDeviceItem[]|null
     */
    protected $blkioWeightDevice;
    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]|null
     */
    protected $blkioDeviceReadBps;
    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]|null
     */
    protected $blkioDeviceWriteBps;
    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]|null
     */
    protected $blkioDeviceReadIOps;
    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @var ThrottleDevice[]|null
     */
    protected $blkioDeviceWriteIOps;
    /**
     * The length of a CPU period in microseconds.
     *
     * @var int|null
     */
    protected $cpuPeriod;
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @var int|null
     */
    protected $cpuQuota;
    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @var int|null
     */
    protected $cpuRealtimePeriod;
    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @var int|null
     */
    protected $cpuRealtimeRuntime;
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`)
     *
     * @var string|null
     */
    protected $cpusetCpus;
    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     *
     * @var string|null
     */
    protected $cpusetMems;
    /**
     * A list of devices to add to the container.
     *
     * @var DeviceMapping[]|null
     */
    protected $devices;
    /**
     * a list of cgroup rules to apply to the container
     *
     * @var string[]|null
     */
    protected $deviceCgroupRules;
    /**
     * a list of requests for devices to be sent to device drivers
     *
     * @var DeviceRequest[]|null
     */
    protected $deviceRequests;
    /**
     * Kernel memory limit in bytes.
     *
     * @var int|null
     */
    protected $kernelMemory;
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @var int|null
     */
    protected $kernelMemoryTCP;
    /**
     * Memory soft limit in bytes.
     *
     * @var int|null
     */
    protected $memoryReservation;
    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     *
     * @var int|null
     */
    protected $memorySwap;
    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     *
     * @var int|null
     */
    protected $memorySwappiness;
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @var int|null
     */
    protected $nanoCPUs;
    /**
     * Disable OOM Killer for the container.
     *
     * @var bool|null
     */
    protected $oomKillDisable;
    /**
     * Run an init inside the container that forwards signals and reaps processes. This field is omitted if empty, and the default (as configured on the daemon) is used.
     *
     * @var bool|null
     */
    protected $init;
    /**
     * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null` to not change.
     *
     * @var int|null
     */
    protected $pidsLimit;
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @var ResourcesUlimitsItem[]|null
     */
    protected $ulimits;
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @var int|null
    */
    protected $cpuCount;
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @var int|null
    */
    protected $cpuPercent;
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @var int|null
     */
    protected $iOMaximumIOps;
    /**
     * Maximum IO in bytes per second for the container system drive (Windows only)
     *
     * @var int|null
     */
    protected $iOMaximumBandwidth;
    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     *
     * @return int|null
     */
    public function getCpuShares() : ?int
    {
        return $this->cpuShares;
    }
    /**
     * An integer value representing this container's relative CPU weight versus other containers.
     *
     * @param int|null $cpuShares
     *
     * @return self
     */
    public function setCpuShares(?int $cpuShares) : self
    {
        $this->cpuShares = $cpuShares;
        return $this;
    }
    /**
     * Memory limit in bytes.
     *
     * @return int|null
     */
    public function getMemory() : ?int
    {
        return $this->memory;
    }
    /**
     * Memory limit in bytes.
     *
     * @param int|null $memory
     *
     * @return self
     */
    public function setMemory(?int $memory) : self
    {
        $this->memory = $memory;
        return $this;
    }
    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     *
     * @return string|null
     */
    public function getCgroupParent() : ?string
    {
        return $this->cgroupParent;
    }
    /**
     * Path to `cgroups` under which the container's `cgroup` is created. If the path is not absolute, the path is considered to be relative to the `cgroups` path of the init process. Cgroups are created if they do not already exist.
     *
     * @param string|null $cgroupParent
     *
     * @return self
     */
    public function setCgroupParent(?string $cgroupParent) : self
    {
        $this->cgroupParent = $cgroupParent;
        return $this;
    }
    /**
     * Block IO weight (relative weight).
     *
     * @return int|null
     */
    public function getBlkioWeight() : ?int
    {
        return $this->blkioWeight;
    }
    /**
     * Block IO weight (relative weight).
     *
     * @param int|null $blkioWeight
     *
     * @return self
     */
    public function setBlkioWeight(?int $blkioWeight) : self
    {
        $this->blkioWeight = $blkioWeight;
        return $this;
    }
    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @return ResourcesBlkioWeightDeviceItem[]|null
     */
    public function getBlkioWeightDevice() : ?array
    {
        return $this->blkioWeightDevice;
    }
    /**
     * Block IO weight (relative device weight) in the form `[{"Path": "device_path", "Weight": weight}]`.
     *
     * @param ResourcesBlkioWeightDeviceItem[]|null $blkioWeightDevice
     *
     * @return self
     */
    public function setBlkioWeightDevice(?array $blkioWeightDevice) : self
    {
        $this->blkioWeightDevice = $blkioWeightDevice;
        return $this;
    }
    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]|null
     */
    public function getBlkioDeviceReadBps() : ?array
    {
        return $this->blkioDeviceReadBps;
    }
    /**
     * Limit read rate (bytes per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[]|null $blkioDeviceReadBps
     *
     * @return self
     */
    public function setBlkioDeviceReadBps(?array $blkioDeviceReadBps) : self
    {
        $this->blkioDeviceReadBps = $blkioDeviceReadBps;
        return $this;
    }
    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]|null
     */
    public function getBlkioDeviceWriteBps() : ?array
    {
        return $this->blkioDeviceWriteBps;
    }
    /**
     * Limit write rate (bytes per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[]|null $blkioDeviceWriteBps
     *
     * @return self
     */
    public function setBlkioDeviceWriteBps(?array $blkioDeviceWriteBps) : self
    {
        $this->blkioDeviceWriteBps = $blkioDeviceWriteBps;
        return $this;
    }
    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]|null
     */
    public function getBlkioDeviceReadIOps() : ?array
    {
        return $this->blkioDeviceReadIOps;
    }
    /**
     * Limit read rate (IO per second) from a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[]|null $blkioDeviceReadIOps
     *
     * @return self
     */
    public function setBlkioDeviceReadIOps(?array $blkioDeviceReadIOps) : self
    {
        $this->blkioDeviceReadIOps = $blkioDeviceReadIOps;
        return $this;
    }
    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @return ThrottleDevice[]|null
     */
    public function getBlkioDeviceWriteIOps() : ?array
    {
        return $this->blkioDeviceWriteIOps;
    }
    /**
     * Limit write rate (IO per second) to a device, in the form `[{"Path": "device_path", "Rate": rate}]`.
     *
     * @param ThrottleDevice[]|null $blkioDeviceWriteIOps
     *
     * @return self
     */
    public function setBlkioDeviceWriteIOps(?array $blkioDeviceWriteIOps) : self
    {
        $this->blkioDeviceWriteIOps = $blkioDeviceWriteIOps;
        return $this;
    }
    /**
     * The length of a CPU period in microseconds.
     *
     * @return int|null
     */
    public function getCpuPeriod() : ?int
    {
        return $this->cpuPeriod;
    }
    /**
     * The length of a CPU period in microseconds.
     *
     * @param int|null $cpuPeriod
     *
     * @return self
     */
    public function setCpuPeriod(?int $cpuPeriod) : self
    {
        $this->cpuPeriod = $cpuPeriod;
        return $this;
    }
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @return int|null
     */
    public function getCpuQuota() : ?int
    {
        return $this->cpuQuota;
    }
    /**
     * Microseconds of CPU time that the container can get in a CPU period.
     *
     * @param int|null $cpuQuota
     *
     * @return self
     */
    public function setCpuQuota(?int $cpuQuota) : self
    {
        $this->cpuQuota = $cpuQuota;
        return $this;
    }
    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @return int|null
     */
    public function getCpuRealtimePeriod() : ?int
    {
        return $this->cpuRealtimePeriod;
    }
    /**
     * The length of a CPU real-time period in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @param int|null $cpuRealtimePeriod
     *
     * @return self
     */
    public function setCpuRealtimePeriod(?int $cpuRealtimePeriod) : self
    {
        $this->cpuRealtimePeriod = $cpuRealtimePeriod;
        return $this;
    }
    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @return int|null
     */
    public function getCpuRealtimeRuntime() : ?int
    {
        return $this->cpuRealtimeRuntime;
    }
    /**
     * The length of a CPU real-time runtime in microseconds. Set to 0 to allocate no time allocated to real-time tasks.
     *
     * @param int|null $cpuRealtimeRuntime
     *
     * @return self
     */
    public function setCpuRealtimeRuntime(?int $cpuRealtimeRuntime) : self
    {
        $this->cpuRealtimeRuntime = $cpuRealtimeRuntime;
        return $this;
    }
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`)
     *
     * @return string|null
     */
    public function getCpusetCpus() : ?string
    {
        return $this->cpusetCpus;
    }
    /**
     * CPUs in which to allow execution (e.g., `0-3`, `0,1`)
     *
     * @param string|null $cpusetCpus
     *
     * @return self
     */
    public function setCpusetCpus(?string $cpusetCpus) : self
    {
        $this->cpusetCpus = $cpusetCpus;
        return $this;
    }
    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     *
     * @return string|null
     */
    public function getCpusetMems() : ?string
    {
        return $this->cpusetMems;
    }
    /**
     * Memory nodes (MEMs) in which to allow execution (0-3, 0,1). Only effective on NUMA systems.
     *
     * @param string|null $cpusetMems
     *
     * @return self
     */
    public function setCpusetMems(?string $cpusetMems) : self
    {
        $this->cpusetMems = $cpusetMems;
        return $this;
    }
    /**
     * A list of devices to add to the container.
     *
     * @return DeviceMapping[]|null
     */
    public function getDevices() : ?array
    {
        return $this->devices;
    }
    /**
     * A list of devices to add to the container.
     *
     * @param DeviceMapping[]|null $devices
     *
     * @return self
     */
    public function setDevices(?array $devices) : self
    {
        $this->devices = $devices;
        return $this;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @return string[]|null
     */
    public function getDeviceCgroupRules() : ?array
    {
        return $this->deviceCgroupRules;
    }
    /**
     * a list of cgroup rules to apply to the container
     *
     * @param string[]|null $deviceCgroupRules
     *
     * @return self
     */
    public function setDeviceCgroupRules(?array $deviceCgroupRules) : self
    {
        $this->deviceCgroupRules = $deviceCgroupRules;
        return $this;
    }
    /**
     * a list of requests for devices to be sent to device drivers
     *
     * @return DeviceRequest[]|null
     */
    public function getDeviceRequests() : ?array
    {
        return $this->deviceRequests;
    }
    /**
     * a list of requests for devices to be sent to device drivers
     *
     * @param DeviceRequest[]|null $deviceRequests
     *
     * @return self
     */
    public function setDeviceRequests(?array $deviceRequests) : self
    {
        $this->deviceRequests = $deviceRequests;
        return $this;
    }
    /**
     * Kernel memory limit in bytes.
     *
     * @return int|null
     */
    public function getKernelMemory() : ?int
    {
        return $this->kernelMemory;
    }
    /**
     * Kernel memory limit in bytes.
     *
     * @param int|null $kernelMemory
     *
     * @return self
     */
    public function setKernelMemory(?int $kernelMemory) : self
    {
        $this->kernelMemory = $kernelMemory;
        return $this;
    }
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @return int|null
     */
    public function getKernelMemoryTCP() : ?int
    {
        return $this->kernelMemoryTCP;
    }
    /**
     * Hard limit for kernel TCP buffer memory (in bytes).
     *
     * @param int|null $kernelMemoryTCP
     *
     * @return self
     */
    public function setKernelMemoryTCP(?int $kernelMemoryTCP) : self
    {
        $this->kernelMemoryTCP = $kernelMemoryTCP;
        return $this;
    }
    /**
     * Memory soft limit in bytes.
     *
     * @return int|null
     */
    public function getMemoryReservation() : ?int
    {
        return $this->memoryReservation;
    }
    /**
     * Memory soft limit in bytes.
     *
     * @param int|null $memoryReservation
     *
     * @return self
     */
    public function setMemoryReservation(?int $memoryReservation) : self
    {
        $this->memoryReservation = $memoryReservation;
        return $this;
    }
    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     *
     * @return int|null
     */
    public function getMemorySwap() : ?int
    {
        return $this->memorySwap;
    }
    /**
     * Total memory limit (memory + swap). Set as `-1` to enable unlimited swap.
     *
     * @param int|null $memorySwap
     *
     * @return self
     */
    public function setMemorySwap(?int $memorySwap) : self
    {
        $this->memorySwap = $memorySwap;
        return $this;
    }
    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     *
     * @return int|null
     */
    public function getMemorySwappiness() : ?int
    {
        return $this->memorySwappiness;
    }
    /**
     * Tune a container's memory swappiness behavior. Accepts an integer between 0 and 100.
     *
     * @param int|null $memorySwappiness
     *
     * @return self
     */
    public function setMemorySwappiness(?int $memorySwappiness) : self
    {
        $this->memorySwappiness = $memorySwappiness;
        return $this;
    }
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @return int|null
     */
    public function getNanoCPUs() : ?int
    {
        return $this->nanoCPUs;
    }
    /**
     * CPU quota in units of 10<sup>-9</sup> CPUs.
     *
     * @param int|null $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs) : self
    {
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * Disable OOM Killer for the container.
     *
     * @return bool|null
     */
    public function getOomKillDisable() : ?bool
    {
        return $this->oomKillDisable;
    }
    /**
     * Disable OOM Killer for the container.
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
     * Run an init inside the container that forwards signals and reaps processes. This field is omitted if empty, and the default (as configured on the daemon) is used.
     *
     * @return bool|null
     */
    public function getInit() : ?bool
    {
        return $this->init;
    }
    /**
     * Run an init inside the container that forwards signals and reaps processes. This field is omitted if empty, and the default (as configured on the daemon) is used.
     *
     * @param bool|null $init
     *
     * @return self
     */
    public function setInit(?bool $init) : self
    {
        $this->init = $init;
        return $this;
    }
    /**
     * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null` to not change.
     *
     * @return int|null
     */
    public function getPidsLimit() : ?int
    {
        return $this->pidsLimit;
    }
    /**
     * Tune a container's PIDs limit. Set `0` or `-1` for unlimited, or `null` to not change.
     *
     * @param int|null $pidsLimit
     *
     * @return self
     */
    public function setPidsLimit(?int $pidsLimit) : self
    {
        $this->pidsLimit = $pidsLimit;
        return $this;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @return ResourcesUlimitsItem[]|null
     */
    public function getUlimits() : ?array
    {
        return $this->ulimits;
    }
    /**
     * A list of resource limits to set in the container. For example: `{"Name": "nofile", "Soft": 1024, "Hard": 2048}`"
     *
     * @param ResourcesUlimitsItem[]|null $ulimits
     *
     * @return self
     */
    public function setUlimits(?array $ulimits) : self
    {
        $this->ulimits = $ulimits;
        return $this;
    }
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @return int|null
    */
    public function getCpuCount() : ?int
    {
        return $this->cpuCount;
    }
    /**
    * The number of usable CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @param int|null $cpuCount
    *
    * @return self
    */
    public function setCpuCount(?int $cpuCount) : self
    {
        $this->cpuCount = $cpuCount;
        return $this;
    }
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @return int|null
    */
    public function getCpuPercent() : ?int
    {
        return $this->cpuPercent;
    }
    /**
    * The usable percentage of the available CPUs (Windows only).
    
    On Windows Server containers, the processor resource controls are mutually exclusive. The order of precedence is `CPUCount` first, then `CPUShares`, and `CPUPercent` last.
    
    *
    * @param int|null $cpuPercent
    *
    * @return self
    */
    public function setCpuPercent(?int $cpuPercent) : self
    {
        $this->cpuPercent = $cpuPercent;
        return $this;
    }
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @return int|null
     */
    public function getIOMaximumIOps() : ?int
    {
        return $this->iOMaximumIOps;
    }
    /**
     * Maximum IOps for the container system drive (Windows only)
     *
     * @param int|null $iOMaximumIOps
     *
     * @return self
     */
    public function setIOMaximumIOps(?int $iOMaximumIOps) : self
    {
        $this->iOMaximumIOps = $iOMaximumIOps;
        return $this;
    }
    /**
     * Maximum IO in bytes per second for the container system drive (Windows only)
     *
     * @return int|null
     */
    public function getIOMaximumBandwidth() : ?int
    {
        return $this->iOMaximumBandwidth;
    }
    /**
     * Maximum IO in bytes per second for the container system drive (Windows only)
     *
     * @param int|null $iOMaximumBandwidth
     *
     * @return self
     */
    public function setIOMaximumBandwidth(?int $iOMaximumBandwidth) : self
    {
        $this->iOMaximumBandwidth = $iOMaximumBandwidth;
        return $this;
    }
}