<?php

namespace Docker\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SystemInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SystemInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SystemInfo();
        if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
            $object->setID($data['ID']);
        }
        elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
            $object->setID(null);
        }
        if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
            $object->setContainers($data['Containers']);
        }
        elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
            $object->setContainers(null);
        }
        if (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] !== null) {
            $object->setContainersRunning($data['ContainersRunning']);
        }
        elseif (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] === null) {
            $object->setContainersRunning(null);
        }
        if (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] !== null) {
            $object->setContainersPaused($data['ContainersPaused']);
        }
        elseif (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] === null) {
            $object->setContainersPaused(null);
        }
        if (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] !== null) {
            $object->setContainersStopped($data['ContainersStopped']);
        }
        elseif (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] === null) {
            $object->setContainersStopped(null);
        }
        if (\array_key_exists('Images', $data) && $data['Images'] !== null) {
            $object->setImages($data['Images']);
        }
        elseif (\array_key_exists('Images', $data) && $data['Images'] === null) {
            $object->setImages(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        }
        elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] !== null) {
            $values = array();
            foreach ($data['DriverStatus'] as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        }
        elseif (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] === null) {
            $object->setDriverStatus(null);
        }
        if (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] !== null) {
            $object->setDockerRootDir($data['DockerRootDir']);
        }
        elseif (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] === null) {
            $object->setDockerRootDir(null);
        }
        if (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] !== null) {
            $values_2 = array();
            foreach ($data['SystemStatus'] as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setSystemStatus($values_2);
        }
        elseif (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] === null) {
            $object->setSystemStatus(null);
        }
        if (\array_key_exists('Plugins', $data) && $data['Plugins'] !== null) {
            $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], 'Docker\\API\\Model\\PluginsInfo', 'json', $context));
        }
        elseif (\array_key_exists('Plugins', $data) && $data['Plugins'] === null) {
            $object->setPlugins(null);
        }
        if (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] !== null) {
            $object->setMemoryLimit($data['MemoryLimit']);
        }
        elseif (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] === null) {
            $object->setMemoryLimit(null);
        }
        if (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] !== null) {
            $object->setSwapLimit($data['SwapLimit']);
        }
        elseif (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] === null) {
            $object->setSwapLimit(null);
        }
        if (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] !== null) {
            $object->setKernelMemory($data['KernelMemory']);
        }
        elseif (\array_key_exists('KernelMemory', $data) && $data['KernelMemory'] === null) {
            $object->setKernelMemory(null);
        }
        if (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] !== null) {
            $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
        }
        elseif (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] === null) {
            $object->setCpuCfsPeriod(null);
        }
        if (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] !== null) {
            $object->setCpuCfsQuota($data['CpuCfsQuota']);
        }
        elseif (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] === null) {
            $object->setCpuCfsQuota(null);
        }
        if (\array_key_exists('CPUShares', $data) && $data['CPUShares'] !== null) {
            $object->setCPUShares($data['CPUShares']);
        }
        elseif (\array_key_exists('CPUShares', $data) && $data['CPUShares'] === null) {
            $object->setCPUShares(null);
        }
        if (\array_key_exists('CPUSet', $data) && $data['CPUSet'] !== null) {
            $object->setCPUSet($data['CPUSet']);
        }
        elseif (\array_key_exists('CPUSet', $data) && $data['CPUSet'] === null) {
            $object->setCPUSet(null);
        }
        if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
            $object->setPidsLimit($data['PidsLimit']);
        }
        elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
            $object->setPidsLimit(null);
        }
        if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
            $object->setOomKillDisable($data['OomKillDisable']);
        }
        elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
            $object->setOomKillDisable(null);
        }
        if (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] !== null) {
            $object->setIPv4Forwarding($data['IPv4Forwarding']);
        }
        elseif (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] === null) {
            $object->setIPv4Forwarding(null);
        }
        if (\array_key_exists('BridgeNfIptables', $data) && $data['BridgeNfIptables'] !== null) {
            $object->setBridgeNfIptables($data['BridgeNfIptables']);
        }
        elseif (\array_key_exists('BridgeNfIptables', $data) && $data['BridgeNfIptables'] === null) {
            $object->setBridgeNfIptables(null);
        }
        if (\array_key_exists('BridgeNfIp6tables', $data) && $data['BridgeNfIp6tables'] !== null) {
            $object->setBridgeNfIp6tables($data['BridgeNfIp6tables']);
        }
        elseif (\array_key_exists('BridgeNfIp6tables', $data) && $data['BridgeNfIp6tables'] === null) {
            $object->setBridgeNfIp6tables(null);
        }
        if (\array_key_exists('Debug', $data) && $data['Debug'] !== null) {
            $object->setDebug($data['Debug']);
        }
        elseif (\array_key_exists('Debug', $data) && $data['Debug'] === null) {
            $object->setDebug(null);
        }
        if (\array_key_exists('NFd', $data) && $data['NFd'] !== null) {
            $object->setNFd($data['NFd']);
        }
        elseif (\array_key_exists('NFd', $data) && $data['NFd'] === null) {
            $object->setNFd(null);
        }
        if (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] !== null) {
            $object->setNGoroutines($data['NGoroutines']);
        }
        elseif (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] === null) {
            $object->setNGoroutines(null);
        }
        if (\array_key_exists('SystemTime', $data) && $data['SystemTime'] !== null) {
            $object->setSystemTime($data['SystemTime']);
        }
        elseif (\array_key_exists('SystemTime', $data) && $data['SystemTime'] === null) {
            $object->setSystemTime(null);
        }
        if (\array_key_exists('LoggingDriver', $data) && $data['LoggingDriver'] !== null) {
            $object->setLoggingDriver($data['LoggingDriver']);
        }
        elseif (\array_key_exists('LoggingDriver', $data) && $data['LoggingDriver'] === null) {
            $object->setLoggingDriver(null);
        }
        if (\array_key_exists('CgroupDriver', $data) && $data['CgroupDriver'] !== null) {
            $object->setCgroupDriver($data['CgroupDriver']);
        }
        elseif (\array_key_exists('CgroupDriver', $data) && $data['CgroupDriver'] === null) {
            $object->setCgroupDriver(null);
        }
        if (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] !== null) {
            $object->setNEventsListener($data['NEventsListener']);
        }
        elseif (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] === null) {
            $object->setNEventsListener(null);
        }
        if (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] !== null) {
            $object->setKernelVersion($data['KernelVersion']);
        }
        elseif (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] === null) {
            $object->setKernelVersion(null);
        }
        if (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] !== null) {
            $object->setOperatingSystem($data['OperatingSystem']);
        }
        elseif (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] === null) {
            $object->setOperatingSystem(null);
        }
        if (\array_key_exists('OSType', $data) && $data['OSType'] !== null) {
            $object->setOSType($data['OSType']);
        }
        elseif (\array_key_exists('OSType', $data) && $data['OSType'] === null) {
            $object->setOSType(null);
        }
        if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
            $object->setArchitecture($data['Architecture']);
        }
        elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('NCPU', $data) && $data['NCPU'] !== null) {
            $object->setNCPU($data['NCPU']);
        }
        elseif (\array_key_exists('NCPU', $data) && $data['NCPU'] === null) {
            $object->setNCPU(null);
        }
        if (\array_key_exists('MemTotal', $data) && $data['MemTotal'] !== null) {
            $object->setMemTotal($data['MemTotal']);
        }
        elseif (\array_key_exists('MemTotal', $data) && $data['MemTotal'] === null) {
            $object->setMemTotal(null);
        }
        if (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] !== null) {
            $object->setIndexServerAddress($data['IndexServerAddress']);
        }
        elseif (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] === null) {
            $object->setIndexServerAddress(null);
        }
        if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], 'Docker\\API\\Model\\RegistryServiceConfig', 'json', $context));
        }
        elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
            $object->setRegistryConfig(null);
        }
        if (\array_key_exists('GenericResources', $data) && $data['GenericResources'] !== null) {
            $values_4 = array();
            foreach ($data['GenericResources'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\GenericResourcesItem', 'json', $context);
            }
            $object->setGenericResources($values_4);
        }
        elseif (\array_key_exists('GenericResources', $data) && $data['GenericResources'] === null) {
            $object->setGenericResources(null);
        }
        if (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] !== null) {
            $object->setHttpProxy($data['HttpProxy']);
        }
        elseif (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] === null) {
            $object->setHttpProxy(null);
        }
        if (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] !== null) {
            $object->setHttpsProxy($data['HttpsProxy']);
        }
        elseif (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] === null) {
            $object->setHttpsProxy(null);
        }
        if (\array_key_exists('NoProxy', $data) && $data['NoProxy'] !== null) {
            $object->setNoProxy($data['NoProxy']);
        }
        elseif (\array_key_exists('NoProxy', $data) && $data['NoProxy'] === null) {
            $object->setNoProxy(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_5 = array();
            foreach ($data['Labels'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setLabels($values_5);
        }
        elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] !== null) {
            $object->setExperimentalBuild($data['ExperimentalBuild']);
        }
        elseif (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] === null) {
            $object->setExperimentalBuild(null);
        }
        if (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] !== null) {
            $object->setServerVersion($data['ServerVersion']);
        }
        elseif (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] === null) {
            $object->setServerVersion(null);
        }
        if (\array_key_exists('ClusterStore', $data) && $data['ClusterStore'] !== null) {
            $object->setClusterStore($data['ClusterStore']);
        }
        elseif (\array_key_exists('ClusterStore', $data) && $data['ClusterStore'] === null) {
            $object->setClusterStore(null);
        }
        if (\array_key_exists('ClusterAdvertise', $data) && $data['ClusterAdvertise'] !== null) {
            $object->setClusterAdvertise($data['ClusterAdvertise']);
        }
        elseif (\array_key_exists('ClusterAdvertise', $data) && $data['ClusterAdvertise'] === null) {
            $object->setClusterAdvertise(null);
        }
        if (\array_key_exists('Runtimes', $data) && $data['Runtimes'] !== null) {
            $values_6 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Runtimes'] as $key => $value_6) {
                $values_6[$key] = $this->denormalizer->denormalize($value_6, 'Docker\\API\\Model\\Runtime', 'json', $context);
            }
            $object->setRuntimes($values_6);
        }
        elseif (\array_key_exists('Runtimes', $data) && $data['Runtimes'] === null) {
            $object->setRuntimes(null);
        }
        if (\array_key_exists('DefaultRuntime', $data) && $data['DefaultRuntime'] !== null) {
            $object->setDefaultRuntime($data['DefaultRuntime']);
        }
        elseif (\array_key_exists('DefaultRuntime', $data) && $data['DefaultRuntime'] === null) {
            $object->setDefaultRuntime(null);
        }
        if (\array_key_exists('Swarm', $data) && $data['Swarm'] !== null) {
            $object->setSwarm($this->denormalizer->denormalize($data['Swarm'], 'Docker\\API\\Model\\SwarmInfo', 'json', $context));
        }
        elseif (\array_key_exists('Swarm', $data) && $data['Swarm'] === null) {
            $object->setSwarm(null);
        }
        if (\array_key_exists('LiveRestoreEnabled', $data) && $data['LiveRestoreEnabled'] !== null) {
            $object->setLiveRestoreEnabled($data['LiveRestoreEnabled']);
        }
        elseif (\array_key_exists('LiveRestoreEnabled', $data) && $data['LiveRestoreEnabled'] === null) {
            $object->setLiveRestoreEnabled(null);
        }
        if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
            $object->setIsolation($data['Isolation']);
        }
        elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('InitBinary', $data) && $data['InitBinary'] !== null) {
            $object->setInitBinary($data['InitBinary']);
        }
        elseif (\array_key_exists('InitBinary', $data) && $data['InitBinary'] === null) {
            $object->setInitBinary(null);
        }
        if (\array_key_exists('ContainerdCommit', $data) && $data['ContainerdCommit'] !== null) {
            $object->setContainerdCommit($this->denormalizer->denormalize($data['ContainerdCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        }
        elseif (\array_key_exists('ContainerdCommit', $data) && $data['ContainerdCommit'] === null) {
            $object->setContainerdCommit(null);
        }
        if (\array_key_exists('RuncCommit', $data) && $data['RuncCommit'] !== null) {
            $object->setRuncCommit($this->denormalizer->denormalize($data['RuncCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        }
        elseif (\array_key_exists('RuncCommit', $data) && $data['RuncCommit'] === null) {
            $object->setRuncCommit(null);
        }
        if (\array_key_exists('InitCommit', $data) && $data['InitCommit'] !== null) {
            $object->setInitCommit($this->denormalizer->denormalize($data['InitCommit'], 'Docker\\API\\Model\\Commit', 'json', $context));
        }
        elseif (\array_key_exists('InitCommit', $data) && $data['InitCommit'] === null) {
            $object->setInitCommit(null);
        }
        if (\array_key_exists('SecurityOptions', $data) && $data['SecurityOptions'] !== null) {
            $values_7 = array();
            foreach ($data['SecurityOptions'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setSecurityOptions($values_7);
        }
        elseif (\array_key_exists('SecurityOptions', $data) && $data['SecurityOptions'] === null) {
            $object->setSecurityOptions(null);
        }
        if (\array_key_exists('ProductLicense', $data) && $data['ProductLicense'] !== null) {
            $object->setProductLicense($data['ProductLicense']);
        }
        elseif (\array_key_exists('ProductLicense', $data) && $data['ProductLicense'] === null) {
            $object->setProductLicense(null);
        }
        if (\array_key_exists('Warnings', $data) && $data['Warnings'] !== null) {
            $values_8 = array();
            foreach ($data['Warnings'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setWarnings($values_8);
        }
        elseif (\array_key_exists('Warnings', $data) && $data['Warnings'] === null) {
            $object->setWarnings(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getID()) {
            $data['ID'] = $object->getID();
        }
        if (null !== $object->getContainers()) {
            $data['Containers'] = $object->getContainers();
        }
        if (null !== $object->getContainersRunning()) {
            $data['ContainersRunning'] = $object->getContainersRunning();
        }
        if (null !== $object->getContainersPaused()) {
            $data['ContainersPaused'] = $object->getContainersPaused();
        }
        if (null !== $object->getContainersStopped()) {
            $data['ContainersStopped'] = $object->getContainersStopped();
        }
        if (null !== $object->getImages()) {
            $data['Images'] = $object->getImages();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getDriverStatus()) {
            $values = array();
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['DriverStatus'] = $values;
        }
        if (null !== $object->getDockerRootDir()) {
            $data['DockerRootDir'] = $object->getDockerRootDir();
        }
        if (null !== $object->getSystemStatus()) {
            $values_2 = array();
            foreach ($object->getSystemStatus() as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data['SystemStatus'] = $values_2;
        }
        if (null !== $object->getPlugins()) {
            $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if (null !== $object->getMemoryLimit()) {
            $data['MemoryLimit'] = $object->getMemoryLimit();
        }
        if (null !== $object->getSwapLimit()) {
            $data['SwapLimit'] = $object->getSwapLimit();
        }
        if (null !== $object->getKernelMemory()) {
            $data['KernelMemory'] = $object->getKernelMemory();
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
        }
        if (null !== $object->getCPUShares()) {
            $data['CPUShares'] = $object->getCPUShares();
        }
        if (null !== $object->getCPUSet()) {
            $data['CPUSet'] = $object->getCPUSet();
        }
        if (null !== $object->getPidsLimit()) {
            $data['PidsLimit'] = $object->getPidsLimit();
        }
        if (null !== $object->getOomKillDisable()) {
            $data['OomKillDisable'] = $object->getOomKillDisable();
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
        }
        if (null !== $object->getBridgeNfIptables()) {
            $data['BridgeNfIptables'] = $object->getBridgeNfIptables();
        }
        if (null !== $object->getBridgeNfIp6tables()) {
            $data['BridgeNfIp6tables'] = $object->getBridgeNfIp6tables();
        }
        if (null !== $object->getDebug()) {
            $data['Debug'] = $object->getDebug();
        }
        if (null !== $object->getNFd()) {
            $data['NFd'] = $object->getNFd();
        }
        if (null !== $object->getNGoroutines()) {
            $data['NGoroutines'] = $object->getNGoroutines();
        }
        if (null !== $object->getSystemTime()) {
            $data['SystemTime'] = $object->getSystemTime();
        }
        if (null !== $object->getLoggingDriver()) {
            $data['LoggingDriver'] = $object->getLoggingDriver();
        }
        if (null !== $object->getCgroupDriver()) {
            $data['CgroupDriver'] = $object->getCgroupDriver();
        }
        if (null !== $object->getNEventsListener()) {
            $data['NEventsListener'] = $object->getNEventsListener();
        }
        if (null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        }
        if (null !== $object->getOperatingSystem()) {
            $data['OperatingSystem'] = $object->getOperatingSystem();
        }
        if (null !== $object->getOSType()) {
            $data['OSType'] = $object->getOSType();
        }
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getNCPU()) {
            $data['NCPU'] = $object->getNCPU();
        }
        if (null !== $object->getMemTotal()) {
            $data['MemTotal'] = $object->getMemTotal();
        }
        if (null !== $object->getIndexServerAddress()) {
            $data['IndexServerAddress'] = $object->getIndexServerAddress();
        }
        if (null !== $object->getRegistryConfig()) {
            $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if (null !== $object->getGenericResources()) {
            $values_4 = array();
            foreach ($object->getGenericResources() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['GenericResources'] = $values_4;
        }
        if (null !== $object->getHttpProxy()) {
            $data['HttpProxy'] = $object->getHttpProxy();
        }
        if (null !== $object->getHttpsProxy()) {
            $data['HttpsProxy'] = $object->getHttpsProxy();
        }
        if (null !== $object->getNoProxy()) {
            $data['NoProxy'] = $object->getNoProxy();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values_5 = array();
            foreach ($object->getLabels() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['Labels'] = $values_5;
        }
        if (null !== $object->getExperimentalBuild()) {
            $data['ExperimentalBuild'] = $object->getExperimentalBuild();
        }
        if (null !== $object->getServerVersion()) {
            $data['ServerVersion'] = $object->getServerVersion();
        }
        if (null !== $object->getClusterStore()) {
            $data['ClusterStore'] = $object->getClusterStore();
        }
        if (null !== $object->getClusterAdvertise()) {
            $data['ClusterAdvertise'] = $object->getClusterAdvertise();
        }
        if (null !== $object->getRuntimes()) {
            $values_6 = array();
            foreach ($object->getRuntimes() as $key => $value_6) {
                $values_6[$key] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['Runtimes'] = $values_6;
        }
        if (null !== $object->getDefaultRuntime()) {
            $data['DefaultRuntime'] = $object->getDefaultRuntime();
        }
        if (null !== $object->getSwarm()) {
            $data['Swarm'] = $this->normalizer->normalize($object->getSwarm(), 'json', $context);
        }
        if (null !== $object->getLiveRestoreEnabled()) {
            $data['LiveRestoreEnabled'] = $object->getLiveRestoreEnabled();
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getInitBinary()) {
            $data['InitBinary'] = $object->getInitBinary();
        }
        if (null !== $object->getContainerdCommit()) {
            $data['ContainerdCommit'] = $this->normalizer->normalize($object->getContainerdCommit(), 'json', $context);
        }
        if (null !== $object->getRuncCommit()) {
            $data['RuncCommit'] = $this->normalizer->normalize($object->getRuncCommit(), 'json', $context);
        }
        if (null !== $object->getInitCommit()) {
            $data['InitCommit'] = $this->normalizer->normalize($object->getInitCommit(), 'json', $context);
        }
        if (null !== $object->getSecurityOptions()) {
            $values_7 = array();
            foreach ($object->getSecurityOptions() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['SecurityOptions'] = $values_7;
        }
        if (null !== $object->getProductLicense()) {
            $data['ProductLicense'] = $object->getProductLicense();
        }
        if (null !== $object->getWarnings()) {
            $values_8 = array();
            foreach ($object->getWarnings() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['Warnings'] = $values_8;
        }
        return $data;
    }
}