<?php

namespace Docker\API\Model;

class ErrorResponse
{
    /**
     * The error message.
     *
     * @var string|null
     */
    protected $message;
    /**
     * The error message.
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The error message.
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