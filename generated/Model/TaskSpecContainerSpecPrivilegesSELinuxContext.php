<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecPrivilegesSELinuxContext
{
    /**
     * Disable SELinux
     *
     * @var bool|null
     */
    protected $disable;
    /**
     * SELinux user label
     *
     * @var string|null
     */
    protected $user;
    /**
     * SELinux role label
     *
     * @var string|null
     */
    protected $role;
    /**
     * SELinux type label
     *
     * @var string|null
     */
    protected $type;
    /**
     * SELinux level label
     *
     * @var string|null
     */
    protected $level;
    /**
     * Disable SELinux
     *
     * @return bool|null
     */
    public function getDisable() : ?bool
    {
        return $this->disable;
    }
    /**
     * Disable SELinux
     *
     * @param bool|null $disable
     *
     * @return self
     */
    public function setDisable(?bool $disable) : self
    {
        $this->disable = $disable;
        return $this;
    }
    /**
     * SELinux user label
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * SELinux user label
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
     * SELinux role label
     *
     * @return string|null
     */
    public function getRole() : ?string
    {
        return $this->role;
    }
    /**
     * SELinux role label
     *
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * SELinux type label
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * SELinux type label
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * SELinux level label
     *
     * @return string|null
     */
    public function getLevel() : ?string
    {
        return $this->level;
    }
    /**
     * SELinux level label
     *
     * @param string|null $level
     *
     * @return self
     */
    public function setLevel(?string $level) : self
    {
        $this->level = $level;
        return $this;
    }
}