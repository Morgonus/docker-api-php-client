<?php

require_once '../vendor/autoload.php';
use Docker\Docker;
use Docker\DockerClientFactory;

$docker = Docker::create();

$containers = $docker->containerList();
foreach ($containers as $container){
    echo "<pre>";
    echo var_dump($container->getLabels());
    echo "</pre>";
}
