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
class TaskSpecResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecResources';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecResources';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecResources();
        if (\array_key_exists('Limits', $data) && $data['Limits'] !== null) {
            $object->setLimits($this->denormalizer->denormalize($data['Limits'], 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }
        elseif (\array_key_exists('Limits', $data) && $data['Limits'] === null) {
            $object->setLimits(null);
        }
        if (\array_key_exists('Reservation', $data) && $data['Reservation'] !== null) {
            $object->setReservation($this->denormalizer->denormalize($data['Reservation'], 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }
        elseif (\array_key_exists('Reservation', $data) && $data['Reservation'] === null) {
            $object->setReservation(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLimits()) {
            $data['Limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if (null !== $object->getReservation()) {
            $data['Reservation'] = $this->normalizer->normalize($object->getReservation(), 'json', $context);
        }
        return $data;
    }
}