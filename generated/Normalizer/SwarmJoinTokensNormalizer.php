<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class SwarmJoinTokensNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SwarmJoinTokens') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SwarmJoinTokens) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\SwarmJoinTokens();
        if (property_exists($data, 'Worker')) {
            $object->setWorker($data->{'Worker'});
        }
        if (property_exists($data, 'Manager')) {
            $object->setManager($data->{'Manager'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getWorker()) {
            $data->{'Worker'} = $object->getWorker();
        }
        if (null !== $object->getManager()) {
            $data->{'Manager'} = $object->getManager();
        }
        return $data;
    }
}