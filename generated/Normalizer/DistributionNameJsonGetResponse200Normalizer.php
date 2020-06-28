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
class DistributionNameJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DistributionNameJsonGetResponse200();
        if (\array_key_exists('Descriptor', $data) && $data['Descriptor'] !== null) {
            $object->setDescriptor($this->denormalizer->denormalize($data['Descriptor'], 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor', 'json', $context));
        }
        elseif (\array_key_exists('Descriptor', $data) && $data['Descriptor'] === null) {
            $object->setDescriptor(null);
        }
        if (\array_key_exists('Platforms', $data) && $data['Platforms'] !== null) {
            $values = array();
            foreach ($data['Platforms'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem', 'json', $context);
            }
            $object->setPlatforms($values);
        }
        elseif (\array_key_exists('Platforms', $data) && $data['Platforms'] === null) {
            $object->setPlatforms(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDescriptor()) {
            $data['Descriptor'] = $this->normalizer->normalize($object->getDescriptor(), 'json', $context);
        }
        if (null !== $object->getPlatforms()) {
            $values = array();
            foreach ($object->getPlatforms() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Platforms'] = $values;
        }
        return $data;
    }
}