<?php

namespace Docker\API\Model;

class Image
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
     * @var string[]|null
     */
    protected $repoTags;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $repoDigests;
    /**
     * 
     *
     * @var string|null
     */
    protected $parent;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $created;
    /**
     * 
     *
     * @var string|null
     */
    protected $container;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig|null
     */
    protected $containerConfig;
    /**
     * 
     *
     * @var string|null
     */
    protected $dockerVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $author;
    /**
     * Configuration for a container that is portable between hosts
     *
     * @var ContainerConfig|null
     */
    protected $config;
    /**
     * 
     *
     * @var string|null
     */
    protected $architecture;
    /**
     * 
     *
     * @var string|null
     */
    protected $os;
    /**
     * 
     *
     * @var string|null
     */
    protected $osVersion;
    /**
     * 
     *
     * @var int|null
     */
    protected $size;
    /**
     * 
     *
     * @var int|null
     */
    protected $virtualSize;
    /**
     * Information about a container's graph driver.
     *
     * @var GraphDriverData|null
     */
    protected $graphDriver;
    /**
     * 
     *
     * @var ImageRootFS|null
     */
    protected $rootFS;
    /**
     * 
     *
     * @var ImageMetadata|null
     */
    protected $metadata;
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
     * @return string[]|null
     */
    public function getRepoTags() : ?array
    {
        return $this->repoTags;
    }
    /**
     * 
     *
     * @param string[]|null $repoTags
     *
     * @return self
     */
    public function setRepoTags(?array $repoTags) : self
    {
        $this->repoTags = $repoTags;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRepoDigests() : ?array
    {
        return $this->repoDigests;
    }
    /**
     * 
     *
     * @param string[]|null $repoDigests
     *
     * @return self
     */
    public function setRepoDigests(?array $repoDigests) : self
    {
        $this->repoDigests = $repoDigests;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getParent() : ?string
    {
        return $this->parent;
    }
    /**
     * 
     *
     * @param string|null $parent
     *
     * @return self
     */
    public function setParent(?string $parent) : self
    {
        $this->parent = $parent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreated() : ?string
    {
        return $this->created;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getContainer() : ?string
    {
        return $this->container;
    }
    /**
     * 
     *
     * @param string|null $container
     *
     * @return self
     */
    public function setContainer(?string $container) : self
    {
        $this->container = $container;
        return $this;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @return ContainerConfig|null
     */
    public function getContainerConfig() : ?ContainerConfig
    {
        return $this->containerConfig;
    }
    /**
     * Configuration for a container that is portable between hosts
     *
     * @param ContainerConfig|null $containerConfig
     *
     * @return self
     */
    public function setContainerConfig(?ContainerConfig $containerConfig) : self
    {
        $this->containerConfig = $containerConfig;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDockerVersion() : ?string
    {
        return $this->dockerVersion;
    }
    /**
     * 
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
    public function getAuthor() : ?string
    {
        return $this->author;
    }
    /**
     * 
     *
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author) : self
    {
        $this->author = $author;
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
     * 
     *
     * @return string|null
     */
    public function getArchitecture() : ?string
    {
        return $this->architecture;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getOs() : ?string
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string|null $os
     *
     * @return self
     */
    public function setOs(?string $os) : self
    {
        $this->os = $os;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOsVersion() : ?string
    {
        return $this->osVersion;
    }
    /**
     * 
     *
     * @param string|null $osVersion
     *
     * @return self
     */
    public function setOsVersion(?string $osVersion) : self
    {
        $this->osVersion = $osVersion;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * 
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVirtualSize() : ?int
    {
        return $this->virtualSize;
    }
    /**
     * 
     *
     * @param int|null $virtualSize
     *
     * @return self
     */
    public function setVirtualSize(?int $virtualSize) : self
    {
        $this->virtualSize = $virtualSize;
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
     * 
     *
     * @return ImageRootFS|null
     */
    public function getRootFS() : ?ImageRootFS
    {
        return $this->rootFS;
    }
    /**
     * 
     *
     * @param ImageRootFS|null $rootFS
     *
     * @return self
     */
    public function setRootFS(?ImageRootFS $rootFS) : self
    {
        $this->rootFS = $rootFS;
        return $this;
    }
    /**
     * 
     *
     * @return ImageMetadata|null
     */
    public function getMetadata() : ?ImageMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ImageMetadata|null $metadata
     *
     * @return self
     */
    public function setMetadata(?ImageMetadata $metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
}