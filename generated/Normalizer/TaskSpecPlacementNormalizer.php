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
class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecPlacement';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecPlacement';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecPlacement();
        if (\array_key_exists('Constraints', $data) && $data['Constraints'] !== null) {
            $values = array();
            foreach ($data['Constraints'] as $value) {
                $values[] = $value;
            }
            $object->setConstraints($values);
        }
        elseif (\array_key_exists('Constraints', $data) && $data['Constraints'] === null) {
            $object->setConstraints(null);
        }
        if (\array_key_exists('Preferences', $data) && $data['Preferences'] !== null) {
            $values_1 = array();
            foreach ($data['Preferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItem', 'json', $context);
            }
            $object->setPreferences($values_1);
        }
        elseif (\array_key_exists('Preferences', $data) && $data['Preferences'] === null) {
            $object->setPreferences(null);
        }
        if (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] !== null) {
            $object->setMaxReplicas($data['MaxReplicas']);
        }
        elseif (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] === null) {
            $object->setMaxReplicas(null);
        }
        if (\array_key_exists('Platforms', $data) && $data['Platforms'] !== null) {
            $values_2 = array();
            foreach ($data['Platforms'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\Platform', 'json', $context);
            }
            $object->setPlatforms($values_2);
        }
        elseif (\array_key_exists('Platforms', $data) && $data['Platforms'] === null) {
            $object->setPlatforms(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConstraints()) {
            $values = array();
            foreach ($object->getConstraints() as $value) {
                $values[] = $value;
            }
            $data['Constraints'] = $values;
        }
        if (null !== $object->getPreferences()) {
            $values_1 = array();
            foreach ($object->getPreferences() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Preferences'] = $values_1;
        }
        if (null !== $object->getMaxReplicas()) {
            $data['MaxReplicas'] = $object->getMaxReplicas();
        }
        if (null !== $object->getPlatforms()) {
            $values_2 = array();
            foreach ($object->getPlatforms() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['Platforms'] = $values_2;
        }
        return $data;
    }
}