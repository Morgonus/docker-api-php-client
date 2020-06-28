<?php

namespace Docker\API\Model;

class ContainersIdWaitPostResponse200Error
{
    /**
     * Details of an error
     *
     * @var string|null
     */
    protected $message;
    /**
     * Details of an error
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Details of an error
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