<?php

namespace Docker\API\Exception;

class NodeInspectNotFoundException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('no such node', 404);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}