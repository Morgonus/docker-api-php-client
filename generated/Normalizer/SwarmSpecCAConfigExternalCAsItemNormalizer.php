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
class SwarmSpecCAConfigExternalCAsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem();
        if (\array_key_exists('Protocol', $data) && $data['Protocol'] !== null) {
            $object->setProtocol($data['Protocol']);
        }
        elseif (\array_key_exists('Protocol', $data) && $data['Protocol'] === null) {
            $object->setProtocol(null);
        }
        if (\array_key_exists('URL', $data) && $data['URL'] !== null) {
            $object->setURL($data['URL']);
        }
        elseif (\array_key_exists('URL', $data) && $data['URL'] === null) {
            $object->setURL(null);
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
        if (\array_key_exists('CACert', $data) && $data['CACert'] !== null) {
            $object->setCACert($data['CACert']);
        }
        elseif (\array_key_exists('CACert', $data) && $data['CACert'] === null) {
            $object->setCACert(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProtocol()) {
            $data['Protocol'] = $object->getProtocol();
        }
        if (null !== $object->getURL()) {
            $data['URL'] = $object->getURL();
        }
        if (null !== $object->getOptions()) {
            $values = array();
            foreach ($object->getOptions() as $key => $value) {
                $values[$key] = $value;
            }
            $data['Options'] = $values;
        }
        if (null !== $object->getCACert()) {
            $data['CACert'] = $object->getCACert();
        }
        return $data;
    }
}