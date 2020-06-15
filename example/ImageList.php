<?php

require_once '../vendor/autoload.php';
use Docker\Docker;
use Docker\DockerClientFactory;

$docker = Docker::create();

$images = $docker->imageList();
foreach ($images as $image){
    echo "<pre>";
    echo var_dump($image->getLabels());
    echo "</pre>";
}
