<?php

require_once '../vendor/autoload.php';
use Docker\Docker;
use Docker\DockerClientFactory;

$docker = Docker::create();

/** @var \Docker\API\Model\Volume[] $volumes */
$volumes = $docker->volumeList();
foreach ($volumes as $volume){
    echo "<pre>";
    echo var_dump($volume->getLabels());
    echo "</pre>";
}
