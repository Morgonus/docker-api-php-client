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
class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\SwarmInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmInfo();
        if (\array_key_exists('NodeID', $data) && $data['NodeID'] !== null) {
            $object->setNodeID($data['NodeID']);
        }
        elseif (\array_key_exists('NodeID', $data) && $data['NodeID'] === null) {
            $object->setNodeID(null);
        }
        if (\array_key_exists('NodeAddr', $data) && $data['NodeAddr'] !== null) {
            $object->setNodeAddr($data['NodeAddr']);
        }
        elseif (\array_key_exists('NodeAddr', $data) && $data['NodeAddr'] === null) {
            $object->setNodeAddr(null);
        }
        if (\array_key_exists('LocalNodeState', $data) && $data['LocalNodeState'] !== null) {
            $object->setLocalNodeState($data['LocalNodeState']);
        }
        elseif (\array_key_exists('LocalNodeState', $data) && $data['LocalNodeState'] === null) {
            $object->setLocalNodeState(null);
        }
        if (\array_key_exists('ControlAvailable', $data) && $data['ControlAvailable'] !== null) {
            $object->setControlAvailable($data['ControlAvailable']);
        }
        elseif (\array_key_exists('ControlAvailable', $data) && $data['ControlAvailable'] === null) {
            $object->setControlAvailable(null);
        }
        if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
            $object->setError($data['Error']);
        }
        elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] !== null) {
            $values = array();
            foreach ($data['RemoteManagers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\PeerNode', 'json', $context);
            }
            $object->setRemoteManagers($values);
        }
        elseif (\array_key_exists('RemoteManagers', $data) && $data['RemoteManagers'] === null) {
            $object->setRemoteManagers(null);
        }
        if (\array_key_exists('Nodes', $data) && $data['Nodes'] !== null) {
            $object->setNodes($data['Nodes']);
        }
        elseif (\array_key_exists('Nodes', $data) && $data['Nodes'] === null) {
            $object->setNodes(null);
        }
        if (\array_key_exists('Managers', $data) && $data['Managers'] !== null) {
            $object->setManagers($data['Managers']);
        }
        elseif (\array_key_exists('Managers', $data) && $data['Managers'] === null) {
            $object->setManagers(null);
        }
        if (\array_key_exists('Cluster', $data) && $data['Cluster'] !== null) {
            $object->setCluster($this->denormalizer->denormalize($data['Cluster'], 'Docker\\API\\Model\\ClusterInfo', 'json', $context));
        }
        elseif (\array_key_exists('Cluster', $data) && $data['Cluster'] === null) {
            $object->setCluster(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNodeID()) {
            $data['NodeID'] = $object->getNodeID();
        }
        if (null !== $object->getNodeAddr()) {
            $data['NodeAddr'] = $object->getNodeAddr();
        }
        if (null !== $object->getLocalNodeState()) {
            $data['LocalNodeState'] = $object->getLocalNodeState();
        }
        if (null !== $object->getControlAvailable()) {
            $data['ControlAvailable'] = $object->getControlAvailable();
        }
        if (null !== $object->getError()) {
            $data['Error'] = $object->getError();
        }
        if (null !== $object->getRemoteManagers()) {
            $values = array();
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['RemoteManagers'] = $values;
        }
        if (null !== $object->getNodes()) {
            $data['Nodes'] = $object->getNodes();
        }
        if (null !== $object->getManagers()) {
            $data['Managers'] = $object->getManagers();
        }
        if (null !== $object->getCluster()) {
            $data['Cluster'] = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }
        return $data;
    }
}