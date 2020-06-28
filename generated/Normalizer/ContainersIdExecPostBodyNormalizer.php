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
class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainersIdExecPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainersIdExecPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainersIdExecPostBody();
        if (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] !== null) {
            $object->setAttachStdin($data['AttachStdin']);
        }
        elseif (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] === null) {
            $object->setAttachStdin(null);
        }
        if (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] !== null) {
            $object->setAttachStdout($data['AttachStdout']);
        }
        elseif (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] === null) {
            $object->setAttachStdout(null);
        }
        if (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] !== null) {
            $object->setAttachStderr($data['AttachStderr']);
        }
        elseif (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] === null) {
            $object->setAttachStderr(null);
        }
        if (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] !== null) {
            $object->setDetachKeys($data['DetachKeys']);
        }
        elseif (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] === null) {
            $object->setDetachKeys(null);
        }
        if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
            $object->setTty($data['Tty']);
        }
        elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
            $object->setTty(null);
        }
        if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
            $values = array();
            foreach ($data['Env'] as $value) {
                $values[] = $value;
            }
            $object->setEnv($values);
        }
        elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
            $object->setEnv(null);
        }
        if (\array_key_exists('Cmd', $data) && $data['Cmd'] !== null) {
            $values_1 = array();
            foreach ($data['Cmd'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCmd($values_1);
        }
        elseif (\array_key_exists('Cmd', $data) && $data['Cmd'] === null) {
            $object->setCmd(null);
        }
        if (\array_key_exists('Privileged', $data) && $data['Privileged'] !== null) {
            $object->setPrivileged($data['Privileged']);
        }
        elseif (\array_key_exists('Privileged', $data) && $data['Privileged'] === null) {
            $object->setPrivileged(null);
        }
        if (\array_key_exists('User', $data) && $data['User'] !== null) {
            $object->setUser($data['User']);
        }
        elseif (\array_key_exists('User', $data) && $data['User'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] !== null) {
            $object->setWorkingDir($data['WorkingDir']);
        }
        elseif (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] === null) {
            $object->setWorkingDir(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttachStdin()) {
            $data['AttachStdin'] = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data['AttachStdout'] = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data['AttachStderr'] = $object->getAttachStderr();
        }
        if (null !== $object->getDetachKeys()) {
            $data['DetachKeys'] = $object->getDetachKeys();
        }
        if (null !== $object->getTty()) {
            $data['Tty'] = $object->getTty();
        }
        if (null !== $object->getEnv()) {
            $values = array();
            foreach ($object->getEnv() as $value) {
                $values[] = $value;
            }
            $data['Env'] = $values;
        }
        if (null !== $object->getCmd()) {
            $values_1 = array();
            foreach ($object->getCmd() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['Cmd'] = $values_1;
        }
        if (null !== $object->getPrivileged()) {
            $data['Privileged'] = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data['User'] = $object->getUser();
        }
        if (null !== $object->getWorkingDir()) {
            $data['WorkingDir'] = $object->getWorkingDir();
        }
        return $data;
    }
}