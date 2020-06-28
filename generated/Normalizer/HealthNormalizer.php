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
class HealthNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Health';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Health';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Health();
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('FailingStreak', $data) && $data['FailingStreak'] !== null) {
            $object->setFailingStreak($data['FailingStreak']);
        }
        elseif (\array_key_exists('FailingStreak', $data) && $data['FailingStreak'] === null) {
            $object->setFailingStreak(null);
        }
        if (\array_key_exists('Log', $data) && $data['Log'] !== null) {
            $values = array();
            foreach ($data['Log'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\HealthcheckResult', 'json', $context);
            }
            $object->setLog($values);
        }
        elseif (\array_key_exists('Log', $data) && $data['Log'] === null) {
            $object->setLog(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getFailingStreak()) {
            $data['FailingStreak'] = $object->getFailingStreak();
        }
        if (null !== $object->getLog()) {
            $values = array();
            foreach ($object->getLog() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Log'] = $values;
        }
        return $data;
    }
}