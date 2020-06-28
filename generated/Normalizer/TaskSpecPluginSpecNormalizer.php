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
class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecPluginSpec';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\TaskSpecPluginSpec';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpecPluginSpec();
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Remote', $data) && $data['Remote'] !== null) {
            $object->setRemote($data['Remote']);
        }
        elseif (\array_key_exists('Remote', $data) && $data['Remote'] === null) {
            $object->setRemote(null);
        }
        if (\array_key_exists('Disabled', $data) && $data['Disabled'] !== null) {
            $object->setDisabled($data['Disabled']);
        }
        elseif (\array_key_exists('Disabled', $data) && $data['Disabled'] === null) {
            $object->setDisabled(null);
        }
        if (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] !== null) {
            $values = array();
            foreach ($data['PluginPrivilege'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\TaskSpecPluginSpecPluginPrivilegeItem', 'json', $context);
            }
            $object->setPluginPrivilege($values);
        }
        elseif (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] === null) {
            $object->setPluginPrivilege(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getRemote()) {
            $data['Remote'] = $object->getRemote();
        }
        if (null !== $object->getDisabled()) {
            $data['Disabled'] = $object->getDisabled();
        }
        if (null !== $object->getPluginPrivilege()) {
            $values = array();
            foreach ($object->getPluginPrivilege() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['PluginPrivilege'] = $values;
        }
        return $data;
    }
}