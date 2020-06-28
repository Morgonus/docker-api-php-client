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
class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\NetworksCreatePostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\NetworksCreatePostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NetworksCreatePostBody();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('CheckDuplicate', $data) && $data['CheckDuplicate'] !== null) {
            $object->setCheckDuplicate($data['CheckDuplicate']);
        }
        elseif (\array_key_exists('CheckDuplicate', $data) && $data['CheckDuplicate'] === null) {
            $object->setCheckDuplicate(null);
        }
        if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
            $object->setDriver($data['Driver']);
        }
        elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
            $object->setDriver(null);
        }
        if (\array_key_exists('Internal', $data) && $data['Internal'] !== null) {
            $object->setInternal($data['Internal']);
        }
        elseif (\array_key_exists('Internal', $data) && $data['Internal'] === null) {
            $object->setInternal(null);
        }
        if (\array_key_exists('Attachable', $data) && $data['Attachable'] !== null) {
            $object->setAttachable($data['Attachable']);
        }
        elseif (\array_key_exists('Attachable', $data) && $data['Attachable'] === null) {
            $object->setAttachable(null);
        }
        if (\array_key_exists('Ingress', $data) && $data['Ingress'] !== null) {
            $object->setIngress($data['Ingress']);
        }
        elseif (\array_key_exists('Ingress', $data) && $data['Ingress'] === null) {
            $object->setIngress(null);
        }
        if (\array_key_exists('IPAM', $data) && $data['IPAM'] !== null) {
            $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], 'Docker\\API\\Model\\IPAM', 'json', $context));
        }
        elseif (\array_key_exists('IPAM', $data) && $data['IPAM'] === null) {
            $object->setIPAM(null);
        }
        if (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] !== null) {
            $object->setEnableIPv6($data['EnableIPv6']);
        }
        elseif (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] === null) {
            $object->setEnableIPv6(null);
        }
        if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOptions($values);
        }
        elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
            $object->setOptions(null);
        }
        if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setLabels($values_1);
        }
        elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
            $object->setLabels(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getCheckDuplicate()) {
            $data['CheckDuplicate'] = $object->getCheckDuplicate();
        }
        if (null !== $object->getDriver()) {
            $data['Driver'] = $object->getDriver();
        }
        if (null !== $object->getInternal()) {
            $data['Internal'] = $object->getInternal();
        }
        if (null !== $object->getAttachable()) {
            $data['Attachable'] = $object->getAttachable();
        }
        if (null !== $object->getIngress()) {
            $data['Ingress'] = $object->getIngress();
        }
        if (null !== $object->getIPAM()) {
            $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
        }
        if (null !== $object->getEnableIPv6()) {
            $data['EnableIPv6'] = $object->getEnableIPv6();
        }
        if (null !== $object->getOptions()) {
            $values = array();
            foreach ($object->getOptions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Options'] = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = array();
            foreach ($object->getLabels() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['Labels'] = $values_1;
        }
        return $data;
    }
}