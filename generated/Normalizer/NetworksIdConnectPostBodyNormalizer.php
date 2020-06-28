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
class NetworksIdConnectPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\NetworksIdConnectPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\NetworksIdConnectPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NetworksIdConnectPostBody();
        if (\array_key_exists('Container', $data) && $data['Container'] !== null) {
            $object->setContainer($data['Container']);
        }
        elseif (\array_key_exists('Container', $data) && $data['Container'] === null) {
            $object->setContainer(null);
        }
        if (\array_key_exists('EndpointConfig', $data) && $data['EndpointConfig'] !== null) {
            $object->setEndpointConfig($this->denormalizer->denormalize($data['EndpointConfig'], 'Docker\\API\\Model\\EndpointSettings', 'json', $context));
        }
        elseif (\array_key_exists('EndpointConfig', $data) && $data['EndpointConfig'] === null) {
            $object->setEndpointConfig(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getContainer()) {
            $data['Container'] = $object->getContainer();
        }
        if (null !== $object->getEndpointConfig()) {
            $data['EndpointConfig'] = $this->normalizer->normalize($object->getEndpointConfig(), 'json', $context);
        }
        return $data;
    }
}