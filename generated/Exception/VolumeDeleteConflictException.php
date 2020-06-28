<?php

namespace Docker\API\Exception;

class VolumeDeleteConflictException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Volume is in use and cannot be removed', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}