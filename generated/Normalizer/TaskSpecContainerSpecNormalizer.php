<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecContainerSpec';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\TaskSpecContainerSpec;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\TaskSpecContainerSpec();
        if (property_exists($data, 'Image') && $data->{'Image'} !== null) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'Labels') && $data->{'Labels'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Command') && $data->{'Command'} !== null) {
            $values_1 = [];
            foreach ($data->{'Command'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        }
        if (property_exists($data, 'Args') && $data->{'Args'} !== null) {
            $values_2 = [];
            foreach ($data->{'Args'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        if (property_exists($data, 'Hostname') && $data->{'Hostname'} !== null) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Env') && $data->{'Env'} !== null) {
            $values_3 = [];
            foreach ($data->{'Env'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        }
        if (property_exists($data, 'Dir') && $data->{'Dir'} !== null) {
            $object->setDir($data->{'Dir'});
        }
        if (property_exists($data, 'User') && $data->{'User'} !== null) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'Groups') && $data->{'Groups'} !== null) {
            $values_4 = [];
            foreach ($data->{'Groups'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGroups($values_4);
        }
        if (property_exists($data, 'Privileges') && $data->{'Privileges'} !== null) {
            $object->setPrivileges($this->denormalizer->denormalize($data->{'Privileges'}, 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges', 'json', $context));
        }
        if (property_exists($data, 'TTY') && $data->{'TTY'} !== null) {
            $object->setTTY($data->{'TTY'});
        }
        if (property_exists($data, 'OpenStdin') && $data->{'OpenStdin'} !== null) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'ReadOnly') && $data->{'ReadOnly'} !== null) {
            $object->setReadOnly($data->{'ReadOnly'});
        }
        if (property_exists($data, 'Mounts') && $data->{'Mounts'} !== null) {
            $values_5 = [];
            foreach ($data->{'Mounts'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_5);
        }
        if (property_exists($data, 'StopSignal') && $data->{'StopSignal'} !== null) {
            $object->setStopSignal($data->{'StopSignal'});
        }
        if (property_exists($data, 'StopGracePeriod') && $data->{'StopGracePeriod'} !== null) {
            $object->setStopGracePeriod($data->{'StopGracePeriod'});
        }
        if (property_exists($data, 'HealthCheck') && $data->{'HealthCheck'} !== null) {
            $object->setHealthCheck($this->denormalizer->denormalize($data->{'HealthCheck'}, 'Docker\\API\\Model\\HealthConfig', 'json', $context));
        }
        if (property_exists($data, 'Hosts') && $data->{'Hosts'} !== null) {
            $values_6 = [];
            foreach ($data->{'Hosts'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setHosts($values_6);
        }
        if (property_exists($data, 'DNSConfig') && $data->{'DNSConfig'} !== null) {
            $object->setDNSConfig($this->denormalizer->denormalize($data->{'DNSConfig'}, 'Docker\\API\\Model\\TaskSpecContainerSpecDNSConfig', 'json', $context));
        }
        if (property_exists($data, 'Secrets') && $data->{'Secrets'} !== null) {
            $values_7 = [];
            foreach ($data->{'Secrets'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem', 'json', $context);
            }
            $object->setSecrets($values_7);
        }
        if (property_exists($data, 'Configs') && $data->{'Configs'} !== null) {
            $values_8 = [];
            foreach ($data->{'Configs'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem', 'json', $context);
            }
            $object->setConfigs($values_8);
        }
        if (property_exists($data, 'Isolation') && $data->{'Isolation'} !== null) {
            $object->setIsolation($data->{'Isolation'});
        }
        if (property_exists($data, 'Init') && $data->{'Init'} !== null) {
            $object->setInit($data->{'Init'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getCommand()) {
            $values_1 = [];
            foreach ($object->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Command'} = $values_1;
        }
        if (null !== $object->getArgs()) {
            $values_2 = [];
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Args'} = $values_2;
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getEnv()) {
            $values_3 = [];
            foreach ($object->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'Env'} = $values_3;
        }
        if (null !== $object->getDir()) {
            $data->{'Dir'} = $object->getDir();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getGroups()) {
            $values_4 = [];
            foreach ($object->getGroups() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Groups'} = $values_4;
        }
        if (null !== $object->getPrivileges()) {
            $data->{'Privileges'} = $this->normalizer->normalize($object->getPrivileges(), 'json', $context);
        }
        if (null !== $object->getTTY()) {
            $data->{'TTY'} = $object->getTTY();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getReadOnly()) {
            $data->{'ReadOnly'} = $object->getReadOnly();
        }
        if (null !== $object->getMounts()) {
            $values_5 = [];
            foreach ($object->getMounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Mounts'} = $values_5;
        }
        if (null !== $object->getStopSignal()) {
            $data->{'StopSignal'} = $object->getStopSignal();
        }
        if (null !== $object->getStopGracePeriod()) {
            $data->{'StopGracePeriod'} = $object->getStopGracePeriod();
        }
        if (null !== $object->getHealthCheck()) {
            $data->{'HealthCheck'} = $this->normalizer->normalize($object->getHealthCheck(), 'json', $context);
        }
        if (null !== $object->getHosts()) {
            $values_6 = [];
            foreach ($object->getHosts() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'Hosts'} = $values_6;
        }
        if (null !== $object->getDNSConfig()) {
            $data->{'DNSConfig'} = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
        }
        if (null !== $object->getSecrets()) {
            $values_7 = [];
            foreach ($object->getSecrets() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'Secrets'} = $values_7;
        }
        if (null !== $object->getConfigs()) {
            $values_8 = [];
            foreach ($object->getConfigs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'Configs'} = $values_8;
        }
        if (null !== $object->getIsolation()) {
            $data->{'Isolation'} = $object->getIsolation();
        }
        if (null !== $object->getInit()) {
            $data->{'Init'} = $object->getInit();
        }

        return $data;
    }
}
