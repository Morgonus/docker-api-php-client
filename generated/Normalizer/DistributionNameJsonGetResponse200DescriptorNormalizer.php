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
class DistributionNameJsonGetResponse200DescriptorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\DistributionNameJsonGetResponse200Descriptor();
        if (\array_key_exists('MediaType', $data) && $data['MediaType'] !== null) {
            $object->setMediaType($data['MediaType']);
        }
        elseif (\array_key_exists('MediaType', $data) && $data['MediaType'] === null) {
            $object->setMediaType(null);
        }
        if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
            $object->setSize($data['Size']);
        }
        elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('Digest', $data) && $data['Digest'] !== null) {
            $object->setDigest($data['Digest']);
        }
        elseif (\array_key_exists('Digest', $data) && $data['Digest'] === null) {
            $object->setDigest(null);
        }
        if (\array_key_exists('URLs', $data) && $data['URLs'] !== null) {
            $values = array();
            foreach ($data['URLs'] as $value) {
                $values[] = $value;
            }
            $object->setURLs($values);
        }
        elseif (\array_key_exists('URLs', $data) && $data['URLs'] === null) {
            $object->setURLs(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMediaType()) {
            $data['MediaType'] = $object->getMediaType();
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        }
        if (null !== $object->getDigest()) {
            $data['Digest'] = $object->getDigest();
        }
        if (null !== $object->getURLs()) {
            $values = array();
            foreach ($object->getURLs() as $value) {
                $values[] = $value;
            }
            $data['URLs'] = $values;
        }
        return $data;
    }
}