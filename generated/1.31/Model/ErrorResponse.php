<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class ErrorResponse
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }
}