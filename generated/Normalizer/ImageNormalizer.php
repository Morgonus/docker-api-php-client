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
class ImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Image';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\Image';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\Image();
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
        }
        elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('RepoTags', $data) && $data['RepoTags'] !== null) {
            $values = array();
            foreach ($data['RepoTags'] as $value) {
                $values[] = $value;
            }
            $object->setRepoTags($values);
        }
        elseif (\array_key_exists('RepoTags', $data) && $data['RepoTags'] === null) {
            $object->setRepoTags(null);
        }
        if (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] !== null) {
            $values_1 = array();
            foreach ($data['RepoDigests'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoDigests($values_1);
        }
        elseif (\array_key_exists('RepoDigests', $data) && $data['RepoDigests'] === null) {
            $object->setRepoDigests(null);
        }
        if (\array_key_exists('Parent', $data) && $data['Parent'] !== null) {
            $object->setParent($data['Parent']);
        }
        elseif (\array_key_exists('Parent', $data) && $data['Parent'] === null) {
            $object->setParent(null);
        }
        if (\array_key_exists('Comment', $data) && $data['Comment'] !== null) {
            $object->setComment($data['Comment']);
        }
        elseif (\array_key_exists('Comment', $data) && $data['Comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
            $object->setCreated($data['Created']);
        }
        elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
            $object->setCreated(null);
        }
        if (\array_key_exists('Container', $data) && $data['Container'] !== null) {
            $object->setContainer($data['Container']);
        }
        elseif (\array_key_exists('Container', $data) && $data['Container'] === null) {
            $object->setContainer(null);
        }
        if (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] !== null) {
            $object->setContainerConfig($this->denormalizer->denormalize($data['ContainerConfig'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        }
        elseif (\array_key_exists('ContainerConfig', $data) && $data['ContainerConfig'] === null) {
            $object->setContainerConfig(null);
        }
        if (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] !== null) {
            $object->setDockerVersion($data['DockerVersion']);
        }
        elseif (\array_key_exists('DockerVersion', $data) && $data['DockerVersion'] === null) {
            $object->setDockerVersion(null);
        }
        if (\array_key_exists('Author', $data) && $data['Author'] !== null) {
            $object->setAuthor($data['Author']);
        }
        elseif (\array_key_exists('Author', $data) && $data['Author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
            $object->setConfig($this->denormalizer->denormalize($data['Config'], 'Docker\\API\\Model\\ContainerConfig', 'json', $context));
        }
        elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
            $object->setArchitecture($data['Architecture']);
        }
        elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
            $object->setArchitecture(null);
        }
        if (\array_key_exists('Os', $data) && $data['Os'] !== null) {
            $object->setOs($data['Os']);
        }
        elseif (\array_key_exists('Os', $data) && $data['Os'] === null) {
            $object->setOs(null);
        }
        if (\array_key_exists('OsVersion', $data) && $data['OsVersion'] !== null) {
            $object->setOsVersion($data['OsVersion']);
        }
        elseif (\array_key_exists('OsVersion', $data) && $data['OsVersion'] === null) {
            $object->setOsVersion(null);
        }
        if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
            $object->setSize($data['Size']);
        }
        elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] !== null) {
            $object->setVirtualSize($data['VirtualSize']);
        }
        elseif (\array_key_exists('VirtualSize', $data) && $data['VirtualSize'] === null) {
            $object->setVirtualSize(null);
        }
        if (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] !== null) {
            $object->setGraphDriver($this->denormalizer->denormalize($data['GraphDriver'], 'Docker\\API\\Model\\GraphDriverData', 'json', $context));
        }
        elseif (\array_key_exists('GraphDriver', $data) && $data['GraphDriver'] === null) {
            $object->setGraphDriver(null);
        }
        if (\array_key_exists('RootFS', $data) && $data['RootFS'] !== null) {
            $object->setRootFS($this->denormalizer->denormalize($data['RootFS'], 'Docker\\API\\Model\\ImageRootFS', 'json', $context));
        }
        elseif (\array_key_exists('RootFS', $data) && $data['RootFS'] === null) {
            $object->setRootFS(null);
        }
        if (\array_key_exists('Metadata', $data) && $data['Metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['Metadata'], 'Docker\\API\\Model\\ImageMetadata', 'json', $context));
        }
        elseif (\array_key_exists('Metadata', $data) && $data['Metadata'] === null) {
            $object->setMetadata(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getRepoTags()) {
            $values = array();
            foreach ($object->getRepoTags() as $value) {
                $values[] = $value;
            }
            $data['RepoTags'] = $values;
        }
        if (null !== $object->getRepoDigests()) {
            $values_1 = array();
            foreach ($object->getRepoDigests() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['RepoDigests'] = $values_1;
        }
        if (null !== $object->getParent()) {
            $data['Parent'] = $object->getParent();
        }
        if (null !== $object->getComment()) {
            $data['Comment'] = $object->getComment();
        }
        if (null !== $object->getCreated()) {
            $data['Created'] = $object->getCreated();
        }
        if (null !== $object->getContainer()) {
            $data['Container'] = $object->getContainer();
        }
        if (null !== $object->getContainerConfig()) {
            $data['ContainerConfig'] = $this->normalizer->normalize($object->getContainerConfig(), 'json', $context);
        }
        if (null !== $object->getDockerVersion()) {
            $data['DockerVersion'] = $object->getDockerVersion();
        }
        if (null !== $object->getAuthor()) {
            $data['Author'] = $object->getAuthor();
        }
        if (null !== $object->getConfig()) {
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getArchitecture()) {
            $data['Architecture'] = $object->getArchitecture();
        }
        if (null !== $object->getOs()) {
            $data['Os'] = $object->getOs();
        }
        if (null !== $object->getOsVersion()) {
            $data['OsVersion'] = $object->getOsVersion();
        }
        if (null !== $object->getSize()) {
            $data['Size'] = $object->getSize();
        }
        if (null !== $object->getVirtualSize()) {
            $data['VirtualSize'] = $object->getVirtualSize();
        }
        if (null !== $object->getGraphDriver()) {
            $data['GraphDriver'] = $this->normalizer->normalize($object->getGraphDriver(), 'json', $context);
        }
        if (null !== $object->getRootFS()) {
            $data['RootFS'] = $this->normalizer->normalize($object->getRootFS(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $data['Metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        return $data;
    }
}