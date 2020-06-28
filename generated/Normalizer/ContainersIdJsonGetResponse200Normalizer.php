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
class ContainersIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainersIdJsonGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainersIdJsonGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdJsonGetResponse200();
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
        }
        elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Path', $data) && $data['Path'] !== null) {
            $object->setPath($data['Path']);
        }
        elseif (\array_key_exists('Path', $data) && $data['Path'] === null) {
            $object->setPath(null);
        }
        if (\array_key_exists('Args', $data) && $data['Args'] !== null) {
            $values = array();
            foreach ($data['Args'] as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        elseif (\array_key_exists('Args', $data) && $data['Args'] === null) {
            $object->setArgs(null);
        }
        if (\array_key_exists('State', $data) && $data['State'] !== null) {
            $object->setState($this->denormalizer->denormalize($data['State'], 'Docker\\API\\Model\\ContainerState', 'json', $context));
        }
        elseif (\array_key_exists('State', $data) && $data['State'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
            $object->setImage($data['Image']);
        }
        elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('ResolvConfPath', $data) && $data['ResolvConfPath'] !== null) {
            $object->setResolvConfPath($data['ResolvConfPath']);
        }
        elseif (\array_key_exists('ResolvConfPath', $data) && $data['ResolvConfPath'] === null) {
            $object->setResolvConfPath(null);
        }
        if (\array_key_exists('HostnamePath', $data) && $data['HostnamePath'] !== null) {
            $object->setHostnamePath($data['HostnamePath']);
        }
        elseif (\array_key_exists('HostnamePath', $data) && $data['HostnamePath'] === null) {
            $object->setHostnamePath(null);
        }
        if (\array_key_exists('HostsPath', $data) && $data['HostsPath'] !== null) {
            $object->setHostsPath($data['HostsPath']);
        }
        elseif (\array_key_exists('HostsPath', $data) && $data['HostsPath'] === null) {
            $object->setHostsPath(null);
        }
        if (\array_key_exists('LogPath', $data) && $data['LogPath'] !== null) {
            $object->setLogPath($data['LogPath']);
        }
        elseif (\array_key_exists('LogPath', $data) && $data['LogPath'] === null) {
            $object->setLogPath(null);
        }
        if (\array_key_exists('Node', $data) && $data['Node'] !== null) {
            $object->setNode($this->denormalizer->denormalize($data['Node'], 'Docker\\API\\Model\\ContainersIdJsonGetResponse200Node', 'json', $context));
        }
        elseif (\array_key_exists('Node', $data) && $data['Node'] === null) {
            $object->setNode(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('RestartCount', $data) && $data['RestartCount'] !== null) {
            $object->setRestartCount($data['RestartCount']);
        }
        elseif (\array_key_exists('RestartCount', $data) && $data['RestartCount'] === null) {
            $object->setRestartCount(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        }
        elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Platform', $data) && $data['Platform'] !== null) {
            $object->setPlatform($data['Platform']);
        }
        elseif (\array_key_exists('Platform', $data) && $data['Platform'] === null) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('MountLabel', $data) && $data['MountLabel'] !== null) {
            $object->setMountLabel($data['MountLabel']);
        }
        elseif (\array_key_exists('MountLabel', $data) && $data['MountLabel'] === null) {
            $object->setMountLabel(null);
        }
        if (\array_key_exists('ProcessLabel', $data) && $data['ProcessLabel'] !== null) {
            $object->setProcessLabel($data['ProcessLabel']);
        }
        elseif (\array_key_exists('ProcessLabel', $data) && $data['ProcessLabel'] === null) {
            $object->setProcessLabel(null);
        }
        if (\array_key_exists('AppArmorProfile', $data) && $data['AppArmorProfile'] !== null) {
            $object->setAppArmorProfile($data['AppArmorProfile']);
        }
        elseif (\array_key_exists('AppArmorProfile', $data) && $data['AppArmorProfile'] === null) {
            $object->setAppArmorProfile(null);
        }
        if (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] !== null) {
            $values_1 = array();
            foreach ($data['ExecIDs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExecIDs($values_1);
        }
        elseif (\array_key_exists('ExecIDs', $data) && $data['ExecIDs'] === null) {
            $object->setExecIDs(null);
        }
        if (\array_key_exists('HostConfig', $data) && $data['HostConfig'] !== null) {
            $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], 'Docker\\API\\Model\\HostConfig', 'json', $context));
        }
        elseif (\array_key_exists('HostConfig', $data) && $data['HostConfig'] === null) {
            $object->setHostConfig(null);
        }
        if (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] !== null) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
        }
        elseif (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] === null) {
            $object->setGraphDriver(null);
        }
        if (\array_key_exists('SizeRw', $data) && $data['SizeRw'] !== null) {
            $object->setSizeRw($data['SizeRw']);
        }
        elseif (\array_key_exists('SizeRw', $data) && $data['SizeRw'] === null) {
            $object->setSizeRw(null);
        }
        if (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] !== null) {
            $object->setSizeRootFs($data['SizeRootFs']);
        }
        elseif (\array_key_exists('SizeRootFs', $data) && $data['SizeRootFs'] === null) {
            $object->setSizeRootFs(null);
        }
        if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
            $values_2 = array();
            foreach ($data['Mounts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\MountPoint', 'json', $context);
            }
            $object->setMounts($values_2);
        }
        elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
            $object->setMounts(null);
        }
        if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        }
        elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('NetworkSettings', $data) && $data['NetworkSettings'] !== null) {
            $object->setNetworkSettings($this->denormalizer->denormalize($data['NetworkSettings'], 'Docker\\API\\Model\\NetworkSettings', 'json', $context));
        }
        elseif (\array_key_exists('NetworkSettings', $data) && $data['NetworkSettings'] === null) {
            $object->setNetworkSettings(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getPath()) {
            $data['Path'] = $object->getPath();
        }
        if (null !== $object->getArgs()) {
            $values = array();
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data['Args'] = $values;
        }
        if (null !== $object->getState()) {
            $data['State'] = $this->normalizer->normalize($object->getState(), 'json', $context);
        }
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getResolvConfPath()) {
            $data['ResolvConfPath'] = $object->getResolvConfPath();
        }
        if (null !== $object->getHostnamePath()) {
            $data['HostnamePath'] = $object->getHostnamePath();
        }
        if (null !== $object->getHostsPath()) {
            $data['HostsPath'] = $object->getHostsPath();
        }
        if (null !== $object->getLogPath()) {
            $data['LogPath'] = $object->getLogPath();
        }
        if (null !== $object->getNode()) {
            $data['Node'] = $this->normalizer->normalize($object->getNode(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getRestartCount()) {
            $data['RestartCount'] = $object->getRestartCount();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $object->getPlatform();
        }
        if (null !== $object->getMountLabel()) {
            $data['MountLabel'] = $object->getMountLabel();
        }
        if (null !== $object->getProcessLabel()) {
            $data['ProcessLabel'] = $object->getProcessLabel();
        }
        if (null !== $object->getAppArmorProfile()) {
            $data['AppArmorProfile'] = $object->getAppArmorProfile();
        }
        if (null !== $object->getExecIDs()) {
            $values_1 = array();
            foreach ($object->getExecIDs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ExecIDs'] = $values_1;
        }
        if (null !== $object->getHostConfig()) {
            $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
        }
        if (null !== $object->getGraphDriver()) {
            $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        }
        if (null !== $object->getSizeRw()) {
            $data['SizeRw'] = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data['SizeRootFs'] = $object->getSizeRootFs();
        }
        if (null !== $object->getMounts()) {
            $values_2 = array();
            foreach ($object->getMounts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Mounts'] = $values_2;
        }
        if (null !== $object->getConfig()) {
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkSettings()) {
            $data['NetworkSettings'] = $this->normalizer->normalize($object->getNetworkSettings(), 'json', $context);
        }
        return $data;
    }
}