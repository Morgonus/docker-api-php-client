<?php

namespace Docker\API\Model;

class ContainersIdWaitPostResponse200
{
    /**
     * Exit code of the container
     *
     * @var int|null
     */
    protected $statusCode;
    /**
     * container waiting error, if any
     *
     * @var ContainersIdWaitPostResponse200Error|null
     */
    protected $error;
    /**
     * Exit code of the container
     *
     * @return int|null
     */
    public function getStatusCode() : ?int
    {
        return $this->statusCode;
    }
    /**
     * Exit code of the container
     *
     * @param int|null $statusCode
     *
     * @return self
     */
    public function setStatusCode(?int $statusCode) : self
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * container waiting error, if any
     *
     * @return ContainersIdWaitPostResponse200Error|null
     */
    public function getError() : ?ContainersIdWaitPostResponse200Error
    {
        return $this->error;
    }
    /**
     * container waiting error, if any
     *
     * @param ContainersIdWaitPostResponse200Error|null $error
     *
     * @return self
     */
    public function setError(?ContainersIdWaitPostResponse200Error $error) : self
    {
        $this->error = $error;
        return $this;
    }
}