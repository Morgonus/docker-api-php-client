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
class GenericResourcesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\GenericResourcesItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\GenericResourcesItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\GenericResourcesItem();
        if (\array_key_exists('NamedResourceSpec', $data) && $data['NamedResourceSpec'] !== null) {
            $object->setNamedResourceSpec($this->denormalizer->denormalize($data['NamedResourceSpec'], 'Docker\\API\\Model\\GenericResourcesItemNamedResourceSpec', 'json', $context));
        }
        elseif (\array_key_exists('NamedResourceSpec', $data) && $data['NamedResourceSpec'] === null) {
            $object->setNamedResourceSpec(null);
        }
        if (\array_key_exists('DiscreteResourceSpec', $data) && $data['DiscreteResourceSpec'] !== null) {
            $object->setDiscreteResourceSpec($this->denormalizer->denormalize($data['DiscreteResourceSpec'], 'Docker\\API\\Model\\GenericResourcesItemDiscreteResourceSpec', 'json', $context));
        }
        elseif (\array_key_exists('DiscreteResourceSpec', $data) && $data['DiscreteResourceSpec'] === null) {
            $object->setDiscreteResourceSpec(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNamedResourceSpec()) {
            $data['NamedResourceSpec'] = $this->normalizer->normalize($object->getNamedResourceSpec(), 'json', $context);
        }
        if (null !== $object->getDiscreteResourceSpec()) {
            $data['DiscreteResourceSpec'] = $this->normalizer->normalize($object->getDiscreteResourceSpec(), 'json', $context);
        }
        return $data;
    }
}