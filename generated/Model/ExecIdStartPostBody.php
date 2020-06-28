<?php

namespace Docker\API\Model;

class ExecIdStartPostBody
{
    /**
     * Detach from the command.
     *
     * @var bool|null
     */
    protected $detach;
    /**
     * Allocate a pseudo-TTY.
     *
     * @var bool|null
     */
    protected $tty;
    /**
     * Detach from the command.
     *
     * @return bool|null
     */
    public function getDetach() : ?bool
    {
        return $this->detach;
    }
    /**
     * Detach from the command.
     *
     * @param bool|null $detach
     *
     * @return self
     */
    public function setDetach(?bool $detach) : self
    {
        $this->detach = $detach;
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
}