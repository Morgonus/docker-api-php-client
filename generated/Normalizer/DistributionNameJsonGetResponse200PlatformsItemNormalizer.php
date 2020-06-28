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
class DistributionNameJsonGetResponse200PlatformsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DistributionNameJsonGetResponse200PlatformsItem();
        if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
            $object->setArchitecture($data['Architecture']);
        }
        elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('OS', $data) && $data['OS'] !== null) {
            $object->setOS($data['OS']);
        }
        elseif (\array_key_exists('OS', $data) && $data['OS'] === null) {
            $object->setOS(null);
        }
        if (\array_key_exists('OSVersion', $data) && $data['OSVersion'] !== null) {
            $object->setOSVersion($data['OSVersion']);
        }
        elseif (\array_key_exists('OSVersion', $data) && $data['OSVersion'] === null) {
            $object->setOSVersion(null);
        }
        if (\array_key_exists('OSFeatures', $data) && $data['OSFeatures'] !== null) {
            $values = array();
            foreach ($data['OSFeatures'] as $value) {
                $values[] = $value;
            }
            $object->setOSFeatures($values);
        }
        elseif (\array_key_exists('OSFeatures', $data) && $data['OSFeatures'] === null) {
            $object->setOSFeatures(null);
        }
        if (\array_key_exists('Variant', $data) && $data['Variant'] !== null) {
            $object->setVariant($data['Variant']);
        }
        elseif (\array_key_exists('Variant', $data) && $data['Variant'] === null) {
            $object->setVariant(null);
        }
        if (\array_key_exists('Features', $data) && $data['Features'] !== null) {
            $values_1 = array();
            foreach ($data['Features'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFeatures($values_1);
        }
        elseif (\array_key_exists('Features', $data) && $data['Features'] === null) {
            $object->setFeatures(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getOS()) {
            $data['OS'] = $object->getOS();
        }
        if (null !== $object->getOSVersion()) {
            $data['OSVersion'] = $object->getOSVersion();
        }
        if (null !== $object->getOSFeatures()) {
            $values = array();
            foreach ($object->getOSFeatures() as $value) {
                $values[] = $value;
            }
            $data['OSFeatures'] = $values;
        }
        if (null !== $object->getVariant()) {
            $data['Variant'] = $object->getVariant();
        }
        if (null !== $object->getFeatures()) {
            $values_1 = array();
            foreach ($object->getFeatures() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Features'] = $values_1;
        }
        return $data;
    }
}