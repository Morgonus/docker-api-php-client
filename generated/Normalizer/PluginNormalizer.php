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
class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Plugin';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Plugin';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Plugin();
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
        }
        elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
            $object->setName($data['Name']);
        }
        elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('Enabled', $data) && $data['Enabled'] !== null) {
            $object->setEnabled($data['Enabled']);
        }
        elseif (\array_key_exists('Enabled', $data) && $data['Enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('Settings', $data) && $data['Settings'] !== null) {
            $object->setSettings($this->denormalizer->denormalize($data['Settings'], 'Docker\\API\\Model\\PluginSettings', 'json', $context));
        }
        elseif (\array_key_exists('Settings', $data) && $data['Settings'] === null) {
            $object->setSettings(null);
        }
        if (\array_key_exists('PluginReference', $data) && $data['PluginReference'] !== null) {
            $object->setPluginReference($data['PluginReference']);
        }
        elseif (\array_key_exists('PluginReference', $data) && $data['PluginReference'] === null) {
            $object->setPluginReference(null);
        }
        if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\PluginConfig', 'json', $context));
        }
        elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
            $object->setConfig(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getEnabled()) {
            $data['Enabled'] = $object->getEnabled();
        }
        if (null !== $object->getSettings()) {
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getPluginReference()) {
            $data['PluginReference'] = $object->getPluginReference();
        }
        if (null !== $object->getConfig()) {
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        return $data;
    }
}