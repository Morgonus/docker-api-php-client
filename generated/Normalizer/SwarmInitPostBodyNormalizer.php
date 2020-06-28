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
class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmInitPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmInitPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmInitPostBody();
        if (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] !== null) {
            $object->setListenAddr($data['ListenAddr']);
        }
        elseif (\array_key_exists('ListenAddr', $data) && $data['ListenAddr'] === null) {
            $object->setListenAddr(null);
        }
        if (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] !== null) {
            $object->setAdvertiseAddr($data['AdvertiseAddr']);
        }
        elseif (\array_key_exists('AdvertiseAddr', $data) && $data['AdvertiseAddr'] === null) {
            $object->setAdvertiseAddr(null);
        }
        if (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] !== null) {
            $object->setDataPathAddr($data['DataPathAddr']);
        }
        elseif (\array_key_exists('DataPathAddr', $data) && $data['DataPathAddr'] === null) {
            $object->setDataPathAddr(null);
        }
        if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
            $object->setDataPathPort($data['DataPathPort']);
        }
        elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
            $object->setDataPathPort(null);
        }
        if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
            $values = array();
            foreach ($data['DefaultAddrPool'] as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
            $object->setDefaultAddrPool(null);
        }
        if (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] !== null) {
            $object->setForceNewCluster($data['ForceNewCluster']);
        }
        elseif (\array_key_exists('ForceNewCluster', $data) && $data['ForceNewCluster'] === null) {
            $object->setForceNewCluster(null);
        }
        if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
            $object->setSubnetSize($data['SubnetSize']);
        }
        elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
            $object->setSubnetSize(null);
        }
        if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
            $object->setSpec($this->denormalizer->denormalize($data['Spec'], 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
        }
        elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
            $object->setSpec(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getListenAddr()) {
            $data['ListenAddr'] = $object->getListenAddr();
        }
        if (null !== $object->getAdvertiseAddr()) {
            $data['AdvertiseAddr'] = $object->getAdvertiseAddr();
        }
        if (null !== $object->getDataPathAddr()) {
            $data['DataPathAddr'] = $object->getDataPathAddr();
        }
        if (null !== $object->getDataPathPort()) {
            $data['DataPathPort'] = $object->getDataPathPort();
        }
        if (null !== $object->getDefaultAddrPool()) {
            $values = array();
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data['DefaultAddrPool'] = $values;
        }
        if (null !== $object->getForceNewCluster()) {
            $data['ForceNewCluster'] = $object->getForceNewCluster();
        }
        if (null !== $object->getSubnetSize()) {
            $data['SubnetSize'] = $object->getSubnetSize();
        }
        if (null !== $object->getSpec()) {
            $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }
        return $data;
    }
}