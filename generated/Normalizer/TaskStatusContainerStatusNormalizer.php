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
class TaskStatusContainerStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskStatusContainerStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskStatusContainerStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskStatusContainerStatus();
        if (\array_key_exists('ContainerID', $data) && $data['ContainerID'] !== null) {
            $object->setContainerID($data['ContainerID']);
        }
        elseif (\array_key_exists('ContainerID', $data) && $data['ContainerID'] === null) {
            $object->setContainerID(null);
        }
        if (\array_key_exists('PID', $data) && $data['PID'] !== null) {
            $object->setPID($data['PID']);
        }
        elseif (\array_key_exists('PID', $data) && $data['PID'] === null) {
            $object->setPID(null);
        }
        if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
            $object->setExitCode($data['ExitCode']);
        }
        elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
            $object->setExitCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContainerID()) {
            $data['ContainerID'] = $object->getContainerID();
        }
        if (null !== $object->getPID()) {
            $data['PID'] = $object->getPID();
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        return $data;
    }
}