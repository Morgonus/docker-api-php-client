<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;
class ContainerUpdateResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerUpdateResult') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerUpdateResult) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Docker\API\Model\ContainerUpdateResult();
        if (property_exists($data, 'Warnings')) {
            $value = $data->{'Warnings'};
            if (is_array($data->{'Warnings'})) {
                $values = array();
                foreach ($data->{'Warnings'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            if (is_null($data->{'Warnings'})) {
                $value = $data->{'Warnings'};
            }
            $object->setWarnings($value);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $value = $object->getWarnings();
        if (is_array($object->getWarnings())) {
            $values = array();
            foreach ($object->getWarnings() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getWarnings())) {
            $value = $object->getWarnings();
        }
        $data->{'Warnings'} = $value;
        return $data;
    }
}