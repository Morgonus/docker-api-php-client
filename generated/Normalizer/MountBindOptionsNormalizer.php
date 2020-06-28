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
class MountBindOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\MountBindOptions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\MountBindOptions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\MountBindOptions();
        if (\array_key_exists('Propagation', $data) && $data['Propagation'] !== null) {
            $object->setPropagation($data['Propagation']);
        }
        elseif (\array_key_exists('Propagation', $data) && $data['Propagation'] === null) {
            $object->setPropagation(null);
        }
        if (\array_key_exists('NonRecursive', $data) && $data['NonRecursive'] !== null) {
            $object->setNonRecursive($data['NonRecursive']);
        }
        elseif (\array_key_exists('NonRecursive', $data) && $data['NonRecursive'] === null) {
            $object->setNonRecursive(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPropagation()) {
            $data['Propagation'] = $object->getPropagation();
        }
        if (null !== $object->getNonRecursive()) {
            $data['NonRecursive'] = $object->getNonRecursive();
        }
        return $data;
    }
}