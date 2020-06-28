<?php

namespace Docker\API\Model;

class ProcessConfig
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $privileged;
    /**
     * 
     *
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var bool|null
     */
    protected $tty;
    /**
     * 
     *
     * @var string|null
     */
    protected $entrypoint;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $arguments;
    /**
     * 
     *
     * @return bool|null
     */
    public function getPrivileged() : ?bool
    {
        return $this->privileged;
    }
    /**
     * 
     *
     * @param bool|null $privileged
     *
     * @return self
     */
    public function setPrivileged(?bool $privileged) : self
    {
        $this->privileged = $privileged;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getTty() : ?bool
    {
        return $this->tty;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getEntrypoint() : ?string
    {
        return $this->entrypoint;
    }
    /**
     * 
     *
     * @param string|null $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(?string $entrypoint) : self
    {
        $this->entrypoint = $entrypoint;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getArguments() : ?array
    {
        return $this->arguments;
    }
    /**
     * 
     *
     * @param string[]|null $arguments
     *
     * @return self
     */
    public function setArguments(?array $arguments) : self
    {
        $this->arguments = $arguments;
        return $this;
    }
}