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
class HealthcheckResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\HealthcheckResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\HealthcheckResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\HealthcheckResult();
        if (\array_key_exists('Start', $data) && $data['Start'] !== null) {
            $object->setStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['Start']));
        }
        elseif (\array_key_exists('Start', $data) && $data['Start'] === null) {
            $object->setStart(null);
        }
        if (\array_key_exists('End', $data) && $data['End'] !== null) {
            $object->setEnd($data['End']);
        }
        elseif (\array_key_exists('End', $data) && $data['End'] === null) {
            $object->setEnd(null);
        }
        if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
            $object->setExitCode($data['ExitCode']);
        }
        elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('Output', $data) && $data['Output'] !== null) {
            $object->setOutput($data['Output']);
        }
        elseif (\array_key_exists('Output', $data) && $data['Output'] === null) {
            $object->setOutput(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStart()) {
            $data['Start'] = $object->getStart()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getEnd()) {
            $data['End'] = $object->getEnd();
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        if (null !== $object->getOutput()) {
            $data['Output'] = $object->getOutput();
        }
        return $data;
    }
}