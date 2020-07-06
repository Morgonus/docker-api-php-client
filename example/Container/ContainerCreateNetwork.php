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

//network
$endPoints = new EndpointSettings();
$endPoints->setNetworkID("your-network");

$ar = new ArrayObject();
$ar->offsetSet("your-network",$endPoints);

$network = new ContainersCreatePostBodyNetworkingConfig();
$network->setEndpointsConfig($ar);

$container = new ContainersCreatePostBody();
$container->setImage("ubuntu:latest");
$container->setNetworkingConfig($network); //insert config network

try {
    $docker->containerCreate($container);
}catch (Exception $exception){
    dd($exception);
}