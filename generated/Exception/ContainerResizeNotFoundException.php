<?php

namespace Docker\API\Exception;

class ContainerResizeNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('no such container', 404);
    }
}