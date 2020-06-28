<?php

namespace Docker\API\Exception;

class PutContainerArchiveForbiddenException extends \RuntimeException implements ClientException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Permission denied, the volume or container rootfs is marked as read-only.', 403);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}