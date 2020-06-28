<?php

namespace Docker\API\Model;

class ContainersIdExecPostBody
{
    /**
     * Attach to `stdin` of the exec command.
     *
     * @var bool|null
     */
    protected $attachStdin;
    /**
     * Attach to `stdout` of the exec command.
     *
     * @var bool|null
     */
    protected $attachStdout;
    /**
     * Attach to `stderr` of the exec command.
     *
     * @var bool|null
     */
    protected $attachStderr;
    /**
     * Override the key sequence for detaching a container. Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *
     * @var string|null
     */
    protected $detachKeys;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool|null
     */
    protected $tty;
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @var string[]|null
     */
    protected $env;
    /**
     * Command to run, as a string or array of strings.
     *
     * @var string[]|null
     */
    protected $cmd;
    /**
     * Runs the exec process with extended privileges.
     *
     * @var bool|null
     */
    protected $privileged = false;
    /**
     * The user, and optionally, group to run the exec process inside the container. Format is one of: `user`, `user:group`, `uid`, or `uid:gid`.
     *
     * @var string|null
     */
    protected $user;
    /**
     * The working directory for the exec process inside the container.
     *
     * @var string|null
     */
    protected $workingDir;
    /**
     * Attach to `stdin` of the exec command.
     *
     * @return bool|null
     */
    public function getAttachStdin() : ?bool
    {
        return $this->attachStdin;
    }
    /**
     * Attach to `stdin` of the exec command.
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
     * Attach to `stdout` of the exec command.
     *
     * @return bool|null
     */
    public function getAttachStdout() : ?bool
    {
        return $this->attachStdout;
    }
    /**
     * Attach to `stdout` of the exec command.
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
     * Attach to `stderr` of the exec command.
     *
     * @return bool|null
     */
    public function getAttachStderr() : ?bool
    {
        return $this->attachStderr;
    }
    /**
     * Attach to `stderr` of the exec command.
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
     * Override the key sequence for detaching a container. Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *
     * @return string|null
     */
    public function getDetachKeys() : ?string
    {
        return $this->detachKeys;
    }
    /**
     * Override the key sequence for detaching a container. Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *
     * @param string|null $detachKeys
     *
     * @return self
     */
    public function setDetachKeys(?string $detachKeys) : self
    {
        $this->detachKeys = $detachKeys;
        return $this;
    }
    /**
     * Allocate a pseudo-TTY.
     *
     * @return bool|null
     */
    public function getTty() : ?bool
    {
        return $this->tty;
    }
    /**
     * Allocate a pseudo-TTY.
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
     * A list of environment variables in the form `["VAR=value", ...]`.
     *
     * @return string[]|null
     */
    public function getEnv() : ?array
    {
        return $this->env;
    }
    /**
     * A list of environment variables in the form `["VAR=value", ...]`.
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
     * Command to run, as a string or array of strings.
     *
     * @return string[]|null
     */
    public function getCmd() : ?array
    {
        return $this->cmd;
    }
    /**
     * Command to run, as a string or array of strings.
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
     * Runs the exec process with extended privileges.
     *
     * @return bool|null
     */
    public function getPrivileged() : ?bool
    {
        return $this->privileged;
    }
    /**
     * Runs the exec process with extended privileges.
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
     * The user, and optionally, group to run the exec process inside the container. Format is one of: `user`, `user:group`, `uid`, or `uid:gid`.
     *
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * The user, and optionally, group to run the exec process inside the container. Format is one of: `user`, `user:group`, `uid`, or `uid:gid`.
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
     * The working directory for the exec process inside the container.
     *
     * @return string|null
     */
    public function getWorkingDir() : ?string
    {
        return $this->workingDir;
    }
    /**
     * The working directory for the exec process inside the container.
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
}