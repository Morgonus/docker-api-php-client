<?php

require_once '../../vendor/autoload.php';
use Docker\Docker;
use Docker\DockerClientFactory;

$docker = Docker::create();

$containers = $docker->containerList();
foreach ($containers as $container){
    echo "<pre>";
    echo dump($container);
    echo "</pre>";
}
