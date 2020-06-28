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
class ServiceSpecRollbackConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServiceSpecRollbackConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServiceSpecRollbackConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceSpecRollbackConfig();
        if (\array_key_exists('Parallelism', $data) && $data['Parallelism'] !== null) {
            $object->setParallelism($data['Parallelism']);
        }
        elseif (\array_key_exists('Parallelism', $data) && $data['Parallelism'] === null) {
            $object->setParallelism(null);
        }
        if (\array_key_exists('Delay', $data) && $data['Delay'] !== null) {
            $object->setDelay($data['Delay']);
        }
        elseif (\array_key_exists('Delay', $data) && $data['Delay'] === null) {
            $object->setDelay(null);
        }
        if (\array_key_exists('FailureAction', $data) && $data['FailureAction'] !== null) {
            $object->setFailureAction($data['FailureAction']);
        }
        elseif (\array_key_exists('FailureAction', $data) && $data['FailureAction'] === null) {
            $object->setFailureAction(null);
        }
        if (\array_key_exists('Monitor', $data) && $data['Monitor'] !== null) {
            $object->setMonitor($data['Monitor']);
        }
        elseif (\array_key_exists('Monitor', $data) && $data['Monitor'] === null) {
            $object->setMonitor(null);
        }
        if (\array_key_exists('MaxFailureRatio', $data) && $data['MaxFailureRatio'] !== null) {
            $object->setMaxFailureRatio($data['MaxFailureRatio']);
        }
        elseif (\array_key_exists('MaxFailureRatio', $data) && $data['MaxFailureRatio'] === null) {
            $object->setMaxFailureRatio(null);
        }
        if (\array_key_exists('Order', $data) && $data['Order'] !== null) {
            $object->setOrder($data['Order']);
        }
        elseif (\array_key_exists('Order', $data) && $data['Order'] === null) {
            $object->setOrder(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getParallelism()) {
            $data['Parallelism'] = $object->getParallelism();
        }
        if (null !== $object->getDelay()) {
            $data['Delay'] = $object->getDelay();
        }
        if (null !== $object->getFailureAction()) {
            $data['FailureAction'] = $object->getFailureAction();
        }
        if (null !== $object->getMonitor()) {
            $data['Monitor'] = $object->getMonitor();
        }
        if (null !== $object->getMaxFailureRatio()) {
            $data['MaxFailureRatio'] = $object->getMaxFailureRatio();
        }
        if (null !== $object->getOrder()) {
            $data['Order'] = $object->getOrder();
        }
        return $data;
    }
}