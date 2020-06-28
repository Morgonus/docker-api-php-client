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
class SystemDfGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SystemDfGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SystemDfGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SystemDfGetResponse200();
        if (\array_key_exists('LayersSize', $data) && $data['LayersSize'] !== null) {
            $object->setLayersSize($data['LayersSize']);
        }
        elseif (\array_key_exists('LayersSize', $data) && $data['LayersSize'] === null) {
            $object->setLayersSize(null);
        }
        if (\array_key_exists('Images', $data) && $data['Images'] !== null) {
            $values = array();
            foreach ($data['Images'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ImageSummary', 'json', $context);
            }
            $object->setImages($values);
        }
        elseif (\array_key_exists('Images', $data) && $data['Images'] === null) {
            $object->setImages(null);
        }
        if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
            $values_1 = array();
            foreach ($data['Containers'] as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ContainerSummaryItem', 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $object->setContainers($values_1);
        }
        elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
            $object->setContainers(null);
        }
        if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
            $values_3 = array();
            foreach ($data['Volumes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\Volume', 'json', $context);
            }
            $object->setVolumes($values_3);
        }
        elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
            $object->setVolumes(null);
        }
        if (\array_key_exists('BuildCache', $data) && $data['BuildCache'] !== null) {
            $values_4 = array();
            foreach ($data['BuildCache'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\BuildCache', 'json', $context);
            }
            $object->setBuildCache($values_4);
        }
        elseif (\array_key_exists('BuildCache', $data) && $data['BuildCache'] === null) {
            $object->setBuildCache(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLayersSize()) {
            $data['LayersSize'] = $object->getLayersSize();
        }
        if (null !== $object->getImages()) {
            $values = array();
            foreach ($object->getImages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Images'] = $values;
        }
        if (null !== $object->getContainers()) {
            $values_1 = array();
            foreach ($object->getContainers() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $values_1[] = $values_2;
            }
            $data['Containers'] = $values_1;
        }
        if (null !== $object->getVolumes()) {
            $values_3 = array();
            foreach ($object->getVolumes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['Volumes'] = $values_3;
        }
        if (null !== $object->getBuildCache()) {
            $values_4 = array();
            foreach ($object->getBuildCache() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['BuildCache'] = $values_4;
        }
        return $data;
    }
}