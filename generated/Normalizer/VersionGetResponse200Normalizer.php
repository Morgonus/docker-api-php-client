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
class VersionGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\VersionGetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\VersionGetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\VersionGetResponse200();
        if (\array_key_exists('Platform', $data) && $data['Platform'] !== null) {
            $object->setPlatform($this->denormalizer->denormalize($data['Platform'], 'Docker\\API\\Model\\VersionGetResponse200Platform', 'json', $context));
        }
        elseif (\array_key_exists('Platform', $data) && $data['Platform'] === null) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('Components', $data) && $data['Components'] !== null) {
            $values = array();
            foreach ($data['Components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\VersionGetResponse200ComponentsItem', 'json', $context);
            }
            $object->setComponents($values);
        }
        elseif (\array_key_exists('Components', $data) && $data['Components'] === null) {
            $object->setComponents(null);
        }
        if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
            $object->setVersion($data['Version']);
        }
        elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('ApiVersion', $data) && $data['ApiVersion'] !== null) {
            $object->setApiVersion($data['ApiVersion']);
        }
        elseif (\array_key_exists('ApiVersion', $data) && $data['ApiVersion'] === null) {
            $object->setApiVersion(null);
        }
        if (\array_key_exists('MinAPIVersion', $data) && $data['MinAPIVersion'] !== null) {
            $object->setMinAPIVersion($data['MinAPIVersion']);
        }
        elseif (\array_key_exists('MinAPIVersion', $data) && $data['MinAPIVersion'] === null) {
            $object->setMinAPIVersion(null);
        }
        if (\array_key_exists('GitCommit', $data) && $data['GitCommit'] !== null) {
            $object->setGitCommit($data['GitCommit']);
        }
        elseif (\array_key_exists('GitCommit', $data) && $data['GitCommit'] === null) {
            $object->setGitCommit(null);
        }
        if (\array_key_exists('GoVersion', $data) && $data['GoVersion'] !== null) {
            $object->setGoVersion($data['GoVersion']);
        }
        elseif (\array_key_exists('GoVersion', $data) && $data['GoVersion'] === null) {
            $object->setGoVersion(null);
        }
        if (\array_key_exists('Os', $data) && $data['Os'] !== null) {
            $object->setOs($data['Os']);
        }
        elseif (\array_key_exists('Os', $data) && $data['Os'] === null) {
            $object->setOs(null);
        }
        if (\array_key_exists('Arch', $data) && $data['Arch'] !== null) {
            $object->setArch($data['Arch']);
        }
        elseif (\array_key_exists('Arch', $data) && $data['Arch'] === null) {
            $object->setArch(null);
        }
        if (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] !== null) {
            $object->setKernelVersion($data['KernelVersion']);
        }
        elseif (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] === null) {
            $object->setKernelVersion(null);
        }
        if (\array_key_exists('Experimental', $data) && $data['Experimental'] !== null) {
            $object->setExperimental($data['Experimental']);
        }
        elseif (\array_key_exists('Experimental', $data) && $data['Experimental'] === null) {
            $object->setExperimental(null);
        }
        if (\array_key_exists('BuildTime', $data) && $data['BuildTime'] !== null) {
            $object->setBuildTime($data['BuildTime']);
        }
        elseif (\array_key_exists('BuildTime', $data) && $data['BuildTime'] === null) {
            $object->setBuildTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPlatform()) {
            $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getComponents()) {
            $values = array();
            foreach ($object->getComponents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['Components'] = $values;
        }
        if (null !== $object->getVersion()) {
            $data['Version'] = $object->getVersion();
        }
        if (null !== $object->getApiVersion()) {
            $data['ApiVersion'] = $object->getApiVersion();
        }
        if (null !== $object->getMinAPIVersion()) {
            $data['MinAPIVersion'] = $object->getMinAPIVersion();
        }
        if (null !== $object->getGitCommit()) {
            $data['GitCommit'] = $object->getGitCommit();
        }
        if (null !== $object->getGoVersion()) {
            $data['GoVersion'] = $object->getGoVersion();
        }
        if (null !== $object->getOs()) {
            $data['Os'] = $object->getOs();
        }
        if (null !== $object->getArch()) {
            $data['Arch'] = $object->getArch();
        }
        if (null !== $object->getKernelVersion()) {
            $data['KernelVersion'] = $object->getKernelVersion();
        }
        if (null !== $object->getExperimental()) {
            $data['Experimental'] = $object->getExperimental();
        }
        if (null !== $object->getBuildTime()) {
            $data['BuildTime'] = $object->getBuildTime();
        }
        return $data;
    }
}