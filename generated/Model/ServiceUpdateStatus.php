<?php

namespace Docker\API\Model;

class ServiceUpdateStatus
{
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $startedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $completedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getStartedAt() : ?string
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param string|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?string $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompletedAt() : ?string
    {
        return $this->completedAt;
    }
    /**
     * 
     *
     * @param string|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?string $completedAt) : self
    {
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}