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
class SwarmSpecRaftNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmSpecRaft';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmSpecRaft';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpecRaft();
        if (\array_key_exists('SnapshotInterval', $data) && $data['SnapshotInterval'] !== null) {
            $object->setSnapshotInterval($data['SnapshotInterval']);
        }
        elseif (\array_key_exists('SnapshotInterval', $data) && $data['SnapshotInterval'] === null) {
            $object->setSnapshotInterval(null);
        }
        if (\array_key_exists('KeepOldSnapshots', $data) && $data['KeepOldSnapshots'] !== null) {
            $object->setKeepOldSnapshots($data['KeepOldSnapshots']);
        }
        elseif (\array_key_exists('KeepOldSnapshots', $data) && $data['KeepOldSnapshots'] === null) {
            $object->setKeepOldSnapshots(null);
        }
        if (\array_key_exists('LogEntriesForSlowFollowers', $data) && $data['LogEntriesForSlowFollowers'] !== null) {
            $object->setLogEntriesForSlowFollowers($data['LogEntriesForSlowFollowers']);
        }
        elseif (\array_key_exists('LogEntriesForSlowFollowers', $data) && $data['LogEntriesForSlowFollowers'] === null) {
            $object->setLogEntriesForSlowFollowers(null);
        }
        if (\array_key_exists('ElectionTick', $data) && $data['ElectionTick'] !== null) {
            $object->setElectionTick($data['ElectionTick']);
        }
        elseif (\array_key_exists('ElectionTick', $data) && $data['ElectionTick'] === null) {
            $object->setElectionTick(null);
        }
        if (\array_key_exists('HeartbeatTick', $data) && $data['HeartbeatTick'] !== null) {
            $object->setHeartbeatTick($data['HeartbeatTick']);
        }
        elseif (\array_key_exists('HeartbeatTick', $data) && $data['HeartbeatTick'] === null) {
            $object->setHeartbeatTick(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSnapshotInterval()) {
            $data['SnapshotInterval'] = $object->getSnapshotInterval();
        }
        if (null !== $object->getKeepOldSnapshots()) {
            $data['KeepOldSnapshots'] = $object->getKeepOldSnapshots();
        }
        if (null !== $object->getLogEntriesForSlowFollowers()) {
            $data['LogEntriesForSlowFollowers'] = $object->getLogEntriesForSlowFollowers();
        }
        if (null !== $object->getElectionTick()) {
            $data['ElectionTick'] = $object->getElectionTick();
        }
        if (null !== $object->getHeartbeatTick()) {
            $data['HeartbeatTick'] = $object->getHeartbeatTick();
        }
        return $data;
    }
}