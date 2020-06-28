<?php

namespace Docker\API\Model;

class ContainerSummaryItem
{
    /**
     * The ID of this container
     *
     * @var string|null
     */
    protected $id;
    /**
     * The names that this container has been given
     *
     * @var string[]|null
     */
    protected $names;
    /**
     * The name of the image used when creating this container
     *
     * @var string|null
     */
    protected $image;
    /**
     * The ID of the image that this container was created from
     *
     * @var string|null
     */
    protected $imageID;
    /**
     * Command to run when starting the container
     *
     * @var string|null
     */
    protected $command;
    /**
     * When the container was created
     *
     * @var int|null
     */
    protected $created;
    /**
     * The ports exposed by this container
     *
     * @var Port[]|null
     */
    protected $ports;
    /**
     * The size of files that have been created or changed by this container
     *
     * @var int|null
     */
    protected $sizeRw;
    /**
     * The total size of all the files in this container
     *
     * @var int|null
     */
    protected $sizeRootFs;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]|null
     */
    protected $labels;
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @var string|null
     */
    protected $state;
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var ContainerSummaryItemHostConfig|null
     */
    protected $hostConfig;
    /**
     * A summary of the container's network settings
     *
     * @var ContainerSummaryItemNetworkSettings|null
     */
    protected $networkSettings;
    /**
     * 
     *
     * @var Mount[]|null
     */
    protected $mounts;
    /**
     * The ID of this container
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ID of this container
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
     * The names that this container has been given
     *
     * @return string[]|null
     */
    public function getNames() : ?array
    {
        return $this->names;
    }
    /**
     * The names that this container has been given
     *
     * @param string[]|null $names
     *
     * @return self
     */
    public function setNames(?array $names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * The name of the image used when creating this container
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * The name of the image used when creating this container
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
     * The ID of the image that this container was created from
     *
     * @return string|null
     */
    public function getImageID() : ?string
    {
        return $this->imageID;
    }
    /**
     * The ID of the image that this container was created from
     *
     * @param string|null $imageID
     *
     * @return self
     */
    public function setImageID(?string $imageID) : self
    {
        $this->imageID = $imageID;
        return $this;
    }
    /**
     * Command to run when starting the container
     *
     * @return string|null
     */
    public function getCommand() : ?string
    {
        return $this->command;
    }
    /**
     * Command to run when starting the container
     *
     * @param string|null $command
     *
     * @return self
     */
    public function setCommand(?string $command) : self
    {
        $this->command = $command;
        return $this;
    }
    /**
     * When the container was created
     *
     * @return int|null
     */
    public function getCreated() : ?int
    {
        return $this->created;
    }
    /**
     * When the container was created
     *
     * @param int|null $created
     *
     * @return self
     */
    public function setCreated(?int $created) : self
    {
        $this->created = $created;
        return $this;
    }
    /**
     * The ports exposed by this container
     *
     * @return Port[]|null
     */
    public function getPorts() : ?array
    {
        return $this->ports;
    }
    /**
     * The ports exposed by this container
     *
     * @param Port[]|null $ports
     *
     * @return self
     */
    public function setPorts(?array $ports) : self
    {
        $this->ports = $ports;
        return $this;
    }
    /**
     * The size of files that have been created or changed by this container
     *
     * @return int|null
     */
    public function getSizeRw() : ?int
    {
        return $this->sizeRw;
    }
    /**
     * The size of files that have been created or changed by this container
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
     * The total size of all the files in this container
     *
     * @return int|null
     */
    public function getSizeRootFs() : ?int
    {
        return $this->sizeRootFs;
    }
    /**
     * The total size of all the files in this container
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
     * The state of this container (e.g. `Exited`)
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * The state of this container (e.g. `Exited`)
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return ContainerSummaryItemHostConfig|null
     */
    public function getHostConfig() : ?ContainerSummaryItemHostConfig
    {
        return $this->hostConfig;
    }
    /**
     * 
     *
     * @param ContainerSummaryItemHostConfig|null $hostConfig
     *
     * @return self
     */
    public function setHostConfig(?ContainerSummaryItemHostConfig $hostConfig) : self
    {
        $this->hostConfig = $hostConfig;
        return $this;
    }
    /**
     * A summary of the container's network settings
     *
     * @return ContainerSummaryItemNetworkSettings|null
     */
    public function getNetworkSettings() : ?ContainerSummaryItemNetworkSettings
    {
        return $this->networkSettings;
    }
    /**
     * A summary of the container's network settings
     *
     * @param ContainerSummaryItemNetworkSettings|null $networkSettings
     *
     * @return self
     */
    public function setNetworkSettings(?ContainerSummaryItemNetworkSettings $networkSettings) : self
    {
        $this->networkSettings = $networkSettings;
        return $this;
    }
    /**
     * 
     *
     * @return Mount[]|null
     */
    public function getMounts() : ?array
    {
        return $this->mounts;
    }
    /**
     * 
     *
     * @param Mount[]|null $mounts
     *
     * @return self
     */
    public function setMounts(?array $mounts) : self
    {
        $this->mounts = $mounts;
        return $this;
    }
}