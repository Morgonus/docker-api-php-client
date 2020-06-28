<?php

namespace Docker\API\Exception;

class ContainerArchiveNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Container or path does not exist', 404);
    }
}