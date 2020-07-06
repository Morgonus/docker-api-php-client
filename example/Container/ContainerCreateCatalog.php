<?php
require_once '../../vendor/autoload.php';

use Docker\API\Model\ContainerConfigVolumesItem;
use Docker\API\Model\ContainersCreatePostBody;
use Docker\API\Model\ContainersCreatePostBodyNetworkingConfig;
use Docker\API\Model\EndpointIPAMConfig;
use Docker\API\Model\EndpointSettings;
use Docker\API\Model\NetworksCreatePostBody;
use Docker\Docker;

$docker = Docker::create();

$mount = new \Docker\API\Model\Mount(); //create mount
$mount->setSource("/home/morgonus/");
$mount->setTarget("/your-path-in-container");
$mount->setType("bind");

$hostConfig = new \Docker\API\Model\HostConfig(); // set config host
$hostConfig->setMounts([$mount]);

$container = new ContainersCreatePostBody();
$container->setImage("ubuntu:latest");
$container->setHostConfig($hostConfig); // add config

try {
    $docker->containerCreate($container);
}catch (Exception $exception){
    dd($exception);
}