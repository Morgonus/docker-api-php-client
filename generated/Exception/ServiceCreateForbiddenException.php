<?php

namespace Docker\API\Exception;

class ServiceCreateForbiddenException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('network is not eligible for services', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}