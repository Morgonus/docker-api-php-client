<?php

namespace Docker\API\Model;

class DeviceMapping
{
    /**
     * 
     *
     * @var string|null
     */
    protected $pathOnHost;
    /**
     * 
     *
     * @var string|null
     */
    protected $pathInContainer;
    /**
     * 
     *
     * @var string|null
     */
    protected $cgroupPermissions;
    /**
     * 
     *
     * @return string|null
     */
    public function getPathOnHost() : ?string
    {
        return $this->pathOnHost;
    }
    /**
     * 
     *
     * @param string|null $pathOnHost
     *
     * @return self
     */
    public function setPathOnHost(?string $pathOnHost) : self
    {
        $this->pathOnHost = $pathOnHost;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPathInContainer() : ?string
    {
        return $this->pathInContainer;
    }
    /**
     * 
     *
     * @param string|null $pathInContainer
     *
     * @return self
     */
    public function setPathInContainer(?string $pathInContainer) : self
    {
        $this->pathInContainer = $pathInContainer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCgroupPermissions() : ?string
    {
        return $this->cgroupPermissions;
    }
    /**
     * 
     *
     * @param string|null $cgroupPermissions
     *
     * @return self
     */
    public function setCgroupPermissions(?string $cgroupPermissions) : self
    {
        $this->cgroupPermissions = $cgroupPermissions;
        return $this;
    }
}