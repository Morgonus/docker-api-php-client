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
class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\NodeDescription';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\NodeDescription';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\NodeDescription();
        if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
            $object->setHostname($data['Hostname']);
        }
        elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
            $object->setHostname(null);
        }
        if (\array_key_exists('Platform', $data) && $data['Platform'] !== null) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\API\\Model\\Platform', 'json', $context));
        }
        elseif (\array_key_exists('Platform', $data) && $data['Platform'] === null) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }
        elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
            $object->setResources(null);
        }
        if (\array_key_exists('Engine', $data) && $data['Engine'] !== null) {
            $object->setEngine($this->denormalizer->denormalize($data['Engine'], 'Docker\\API\\Model\\EngineDescription', 'json', $context));
        }
        elseif (\array_key_exists('Engine', $data) && $data['Engine'] === null) {
            $object->setEngine(null);
        }
        if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
            $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], 'Docker\\API\\Model\\TLSInfo', 'json', $context));
        }
        elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
            $object->setTLSInfo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHostname()) {
            $data['Hostname'] = $object->getHostname();
        }
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }
        if (null !== $object->getEngine()) {
            $data['Engine'] = $this->normalizer->normalize($object->getEngine(), 'json', $context);
        }
        if (null !== $object->getTLSInfo()) {
            $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
        }
        return $data;
    }
}