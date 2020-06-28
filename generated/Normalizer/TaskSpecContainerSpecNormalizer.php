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
class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecContainerSpec';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecContainerSpec';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpec();
        if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
            $object->setImage($data['Image']);
        }
        elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('Command', $data) && $data['Command'] !== null) {
            $values_1 = array();
            foreach ($data['Command'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        }
        elseif (\array_key_exists('Command', $data) && $data['Command'] === null) {
            $object->setCommand(null);
        }
        if (\array_key_exists('Args', $data) && $data['Args'] !== null) {
            $values_2 = array();
            foreach ($data['Args'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        elseif (\array_key_exists('Args', $data) && $data['Args'] === null) {
            $object->setArgs(null);
        }
        if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
            $object->setHostname($data['Hostname']);
        }
        elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
            $object->setHostname(null);
        }
        if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
            $values_3 = array();
            foreach ($data['Env'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        }
        elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Dir', $data) && $data['Dir'] !== null) {
            $object->setDir($data['Dir']);
        }
        elseif (\array_key_exists('Dir', $data) && $data['Dir'] === null) {
            $object->setDir(null);
        }
        if (\array_key_exists('User', $data) && $data['User'] !== null) {
            $object->setUser($data['User']);
        }
        elseif (\array_key_exists('User', $data) && $data['User'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('Groups', $data) && $data['Groups'] !== null) {
            $values_4 = array();
            foreach ($data['Groups'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGroups($values_4);
        }
        elseif (\array_key_exists('Groups', $data) && $data['Groups'] === null) {
            $object->setGroups(null);
        }
        if (\array_key_exists('Privileges', $data) && $data['Privileges'] !== null) {
            $object->setPrivileges($this->denormalizer->denormalize($data['Privileges'], 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges', 'json', $context));
        }
        elseif (\array_key_exists('Privileges', $data) && $data['Privileges'] === null) {
            $object->setPrivileges(null);
        }
        if (\array_key_exists('TTY', $data) && $data['TTY'] !== null) {
            $object->setTTY($data['TTY']);
        }
        elseif (\array_key_exists('TTY', $data) && $data['TTY'] === null) {
            $object->setTTY(null);
        }
        if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
            $object->setOpenStdin($data['OpenStdin']);
        }
        elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
            $object->setOpenStdin(null);
        }
        if (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] !== null) {
            $object->setReadOnly($data['ReadOnly']);
        }
        elseif (\array_key_exists('ReadOnly', $data) && $data['ReadOnly'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
            $values_5 = array();
            foreach ($data['Mounts'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_5);
        }
        elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
            $object->setMounts(null);
        }
        if (\array_key_exists('StopSignal', $data) && $data['StopSignal'] !== null) {
            $object->setStopSignal($data['StopSignal']);
        }
        elseif (\array_key_exists('StopSignal', $data) && $data['StopSignal'] === null) {
            $object->setStopSignal(null);
        }
        if (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] !== null) {
            $object->setStopGracePeriod($data['StopGracePeriod']);
        }
        elseif (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] === null) {
            $object->setStopGracePeriod(null);
        }
        if (\array_key_exists('HealthCheck', $data) && $data['HealthCheck'] !== null) {
            $object->setHealthCheck($this->denormalizer->denormalize($data['HealthCheck'], 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        }
        elseif (\array_key_exists('HealthCheck', $data) && $data['HealthCheck'] === null) {
            $object->setHealthCheck(null);
        }
        if (\array_key_exists('Hosts', $data) && $data['Hosts'] !== null) {
            $values_6 = array();
            foreach ($data['Hosts'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setHosts($values_6);
        }
        elseif (\array_key_exists('Hosts', $data) && $data['Hosts'] === null) {
            $object->setHosts(null);
        }
        if (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] !== null) {
            $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], 'Docker\\API\\Model\\TaskSpecContainerSpecDNSConfig', 'json', $context));
        }
        elseif (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] === null) {
            $object->setDNSConfig(null);
        }
        if (\array_key_exists('Secrets', $data) && $data['Secrets'] !== null) {
            $values_7 = array();
            foreach ($data['Secrets'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem', 'json', $context);
            }
            $object->setSecrets($values_7);
        }
        elseif (\array_key_exists('Secrets', $data) && $data['Secrets'] === null) {
            $object->setSecrets(null);
        }
        if (\array_key_exists('Configs', $data) && $data['Configs'] !== null) {
            $values_8 = array();
            foreach ($data['Configs'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem', 'json', $context);
            }
            $object->setConfigs($values_8);
        }
        elseif (\array_key_exists('Configs', $data) && $data['Configs'] === null) {
            $object->setConfigs(null);
        }
        if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
            $object->setIsolation($data['Isolation']);
        }
        elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
            $object->setIsolation(null);
        }
        if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
            $object->setInit($data['Init']);
        }
        elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
            $object->setInit(null);
        }
        if (\array_key_exists('Sysctls', $data) && $data['Sysctls'] !== null) {
            $values_9 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Sysctls'] as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $object->setSysctls($values_9);
        }
        elseif (\array_key_exists('Sysctls', $data) && $data['Sysctls'] === null) {
            $object->setSysctls(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getImage()) {
            $data['Image'] = $object->getImage();
        }
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Labels'] = $values;
        }
        if (null !== $object->getCommand()) {
            $values_1 = array();
            foreach ($object->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Command'] = $values_1;
        }
        if (null !== $object->getArgs()) {
            $values_2 = array();
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['Args'] = $values_2;
        }
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        }
        if (null !== $object->getEnv()) {
            $values_3 = array();
            foreach ($object->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['Env'] = $values_3;
        }
        if (null !== $object->getDir()) {
            $data['Dir'] = $object->getDir();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getGroups()) {
            $values_4 = array();
            foreach ($object->getGroups() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['Groups'] = $values_4;
        }
        if (null !== $object->getPrivileges()) {
            $data['Privileges'] = $this->normalizer->normalize($object->getPrivileges(), 'json', $context);
        }
        if (null !== $object->getTTY()) {
            $data['TTY'] = $object->getTTY();
        }
        if (null !== $object->getOpenStdin()) {
            $data['OpenStdin'] = $object->getOpenStdin();
        }
        if (null !== $object->getReadOnly()) {
            $data['ReadOnly'] = $object->getReadOnly();
        }
        if (null !== $object->getMounts()) {
            $values_5 = array();
            foreach ($object->getMounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['Mounts'] = $values_5;
        }
        if (null !== $object->getStopSignal()) {
            $data['StopSignal'] = $object->getStopSignal();
        }
        if (null !== $object->getStopGracePeriod()) {
            $data['StopGracePeriod'] = $object->getStopGracePeriod();
        }
        if (null !== $object->getHealthCheck()) {
            $data['HealthCheck'] = $this->normalizer->normalize($object->getHealthCheck(), 'json', $context);
        }
        if (null !== $object->getHosts()) {
            $values_6 = array();
            foreach ($object->getHosts() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['Hosts'] = $values_6;
        }
        if (null !== $object->getDNSConfig()) {
            $data['DNSConfig'] = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
        }
        if (null !== $object->getSecrets()) {
            $values_7 = array();
            foreach ($object->getSecrets() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['Secrets'] = $values_7;
        }
        if (null !== $object->getConfigs()) {
            $values_8 = array();
            foreach ($object->getConfigs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['Configs'] = $values_8;
        }
        if (null !== $object->getIsolation()) {
            $data['Isolation'] = $object->getIsolation();
        }
        if (null !== $object->getInit()) {
            $data['Init'] = $object->getInit();
        }
        if (null !== $object->getSysctls()) {
            $values_9 = array();
            foreach ($object->getSysctls() as $key_1 => $value_9) {
                $values_9[$key_1] = $value_9;
            }
            $data['Sysctls'] = $values_9;
        }
        return $data;
    }
}