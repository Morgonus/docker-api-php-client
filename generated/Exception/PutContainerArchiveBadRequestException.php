<?php

namespace Docker\API\Exception;

class PutContainerArchiveBadRequestException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Bad parameter', 400);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}