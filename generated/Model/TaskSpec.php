<?php

namespace Docker\API\Model;

class TaskSpec
{
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecPluginSpec|null
    */
    protected $pluginSpec;
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecContainerSpec|null
    */
    protected $containerSpec;
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecNetworkAttachmentSpec|null
    */
    protected $networkAttachmentSpec;
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @var TaskSpecResources|null
     */
    protected $resources;
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @var TaskSpecRestartPolicy|null
     */
    protected $restartPolicy;
    /**
     * 
     *
     * @var TaskSpecPlacement|null
     */
    protected $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @var int|null
     */
    protected $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string|null
     */
    protected $runtime;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var NetworkAttachmentConfig[]|null
     */
    protected $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @var TaskSpecLogDriver|null
     */
    protected $logDriver;
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecPluginSpec|null
    */
    public function getPluginSpec() : ?TaskSpecPluginSpec
    {
        return $this->pluginSpec;
    }
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecPluginSpec|null $pluginSpec
    *
    * @return self
    */
    public function setPluginSpec(?TaskSpecPluginSpec $pluginSpec) : self
    {
        $this->pluginSpec = $pluginSpec;
        return $this;
    }
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecContainerSpec|null
    */
    public function getContainerSpec() : ?TaskSpecContainerSpec
    {
        return $this->containerSpec;
    }
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecContainerSpec|null $containerSpec
    *
    * @return self
    */
    public function setContainerSpec(?TaskSpecContainerSpec $containerSpec) : self
    {
        $this->containerSpec = $containerSpec;
        return $this;
    }
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecNetworkAttachmentSpec|null
    */
    public function getNetworkAttachmentSpec() : ?TaskSpecNetworkAttachmentSpec
    {
        return $this->networkAttachmentSpec;
    }
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecNetworkAttachmentSpec|null $networkAttachmentSpec
    *
    * @return self
    */
    public function setNetworkAttachmentSpec(?TaskSpecNetworkAttachmentSpec $networkAttachmentSpec) : self
    {
        $this->networkAttachmentSpec = $networkAttachmentSpec;
        return $this;
    }
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @return TaskSpecResources|null
     */
    public function getResources() : ?TaskSpecResources
    {
        return $this->resources;
    }
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @param TaskSpecResources|null $resources
     *
     * @return self
     */
    public function setResources(?TaskSpecResources $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @return TaskSpecRestartPolicy|null
     */
    public function getRestartPolicy() : ?TaskSpecRestartPolicy
    {
        return $this->restartPolicy;
    }
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @param TaskSpecRestartPolicy|null $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(?TaskSpecRestartPolicy $restartPolicy) : self
    {
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return TaskSpecPlacement|null
     */
    public function getPlacement() : ?TaskSpecPlacement
    {
        return $this->placement;
    }
    /**
     * 
     *
     * @param TaskSpecPlacement|null $placement
     *
     * @return self
     */
    public function setPlacement(?TaskSpecPlacement $placement) : self
    {
        $this->placement = $placement;
        return $this;
    }
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @return int|null
     */
    public function getForceUpdate() : ?int
    {
        return $this->forceUpdate;
    }
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @param int|null $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate(?int $forceUpdate) : self
    {
        $this->forceUpdate = $forceUpdate;
        return $this;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @return string|null
     */
    public function getRuntime() : ?string
    {
        return $this->runtime;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @param string|null $runtime
     *
     * @return self
     */
    public function setRuntime(?string $runtime) : self
    {
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @return NetworkAttachmentConfig[]|null
     */
    public function getNetworks() : ?array
    {
        return $this->networks;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @param NetworkAttachmentConfig[]|null $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @return TaskSpecLogDriver|null
     */
    public function getLogDriver() : ?TaskSpecLogDriver
    {
        return $this->logDriver;
    }
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @param TaskSpecLogDriver|null $logDriver
     *
     * @return self
     */
    public function setLogDriver(?TaskSpecLogDriver $logDriver) : self
    {
        $this->logDriver = $logDriver;
        return $this;
    }
}