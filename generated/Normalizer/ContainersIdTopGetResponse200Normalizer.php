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
class ContainersIdTopGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainersIdTopGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainersIdTopGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdTopGetResponse200();
        if (\array_key_exists('Titles', $data) && $data['Titles'] !== null) {
            $values = array();
            foreach ($data['Titles'] as $value) {
                $values[] = $value;
            }
            $object->setTitles($values);
        }
        elseif (\array_key_exists('Titles', $data) && $data['Titles'] === null) {
            $object->setTitles(null);
        }
        if (\array_key_exists('Processes', $data) && $data['Processes'] !== null) {
            $values_1 = array();
            foreach ($data['Processes'] as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setProcesses($values_1);
        }
        elseif (\array_key_exists('Processes', $data) && $data['Processes'] === null) {
            $object->setProcesses(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTitles()) {
            $values = array();
            foreach ($object->getTitles() as $value) {
                $values[] = $value;
            }
            $data['Titles'] = $values;
        }
        if (null !== $object->getProcesses()) {
            $values_1 = array();
            foreach ($object->getProcesses() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['Processes'] = $values_1;
        }
        return $data;
    }
}