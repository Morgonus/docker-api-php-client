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
class SwarmJoinPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmJoinPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmJoinPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmJoinPostBody();
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
        if (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] !== null) {
            $values = array();
            foreach ($data['RemoteAddrs'] as $value) {
                $values[] = $value;
            }
            $object->setRemoteAddrs($values);
        }
        elseif (\array_key_exists('RemoteAddrs', $data) && $data['RemoteAddrs'] === null) {
            $object->setRemoteAddrs(null);
        }
        if (\array_key_exists('JoinToken', $data) && $data['JoinToken'] !== null) {
            $object->setJoinToken($data['JoinToken']);
        }
        elseif (\array_key_exists('JoinToken', $data) && $data['JoinToken'] === null) {
            $object->setJoinToken(null);
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
        if (null !== $object->getRemoteAddrs()) {
            $values = array();
            foreach ($object->getRemoteAddrs() as $value) {
                $values[] = $value;
            }
            $data['RemoteAddrs'] = $values;
        }
        if (null !== $object->getJoinToken()) {
            $data['JoinToken'] = $object->getJoinToken();
        }
        return $data;
    }
}