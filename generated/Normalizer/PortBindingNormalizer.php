<?php

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PortBindingNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\PortBinding') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\PortBinding) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\PortBinding();
        if (property_exists($data, 'HostPort')) {
            $object->setHostPort($data->{'HostPort'});
        }
        if (property_exists($data, 'HostIp')) {
            $object->setHostIp($data->{'HostIp'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHostPort()) {
            $data->{'HostPort'} = $object->getHostPort();
        }
        if (null !== $object->getHostIp()) {
            $data->{'HostIp'} = $object->getHostIp();
        }

        return $data;
    }
}
