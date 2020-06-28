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
class ContainerStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ContainerState';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ContainerState';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainerState();
        if (\array_key_exists('Status', $data) && $data['Status'] !== null) {
            $object->setStatus($data['Status']);
        }
        elseif (\array_key_exists('Status', $data) && $data['Status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('Running', $data) && $data['Running'] !== null) {
            $object->setRunning($data['Running']);
        }
        elseif (\array_key_exists('Running', $data) && $data['Running'] === null) {
            $object->setRunning(null);
        }
        if (\array_key_exists('Paused', $data) && $data['Paused'] !== null) {
            $object->setPaused($data['Paused']);
        }
        elseif (\array_key_exists('Paused', $data) && $data['Paused'] === null) {
            $object->setPaused(null);
        }
        if (\array_key_exists('Restarting', $data) && $data['Restarting'] !== null) {
            $object->setRestarting($data['Restarting']);
        }
        elseif (\array_key_exists('Restarting', $data) && $data['Restarting'] === null) {
            $object->setRestarting(null);
        }
        if (\array_key_exists('OOMKilled', $data) && $data['OOMKilled'] !== null) {
            $object->setOOMKilled($data['OOMKilled']);
        }
        elseif (\array_key_exists('OOMKilled', $data) && $data['OOMKilled'] === null) {
            $object->setOOMKilled(null);
        }
        if (\array_key_exists('Dead', $data) && $data['Dead'] !== null) {
            $object->setDead($data['Dead']);
        }
        elseif (\array_key_exists('Dead', $data) && $data['Dead'] === null) {
            $object->setDead(null);
        }
        if (\array_key_exists('Pid', $data) && $data['Pid'] !== null) {
            $object->setPid($data['Pid']);
        }
        elseif (\array_key_exists('Pid', $data) && $data['Pid'] === null) {
            $object->setPid(null);
        }
        if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
            $object->setExitCode($data['ExitCode']);
        }
        elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
            $object->setExitCode(null);
        }
        if (\array_key_exists('Error', $data) && $data['Error'] !== null) {
            $object->setError($data['Error']);
        }
        elseif (\array_key_exists('Error', $data) && $data['Error'] === null) {
            $object->setError(null);
        }
        if (\array_key_exists('StartedAt', $data) && $data['StartedAt'] !== null) {
            $object->setStartedAt($data['StartedAt']);
        }
        elseif (\array_key_exists('StartedAt', $data) && $data['StartedAt'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('FinishedAt', $data) && $data['FinishedAt'] !== null) {
            $object->setFinishedAt($data['FinishedAt']);
        }
        elseif (\array_key_exists('FinishedAt', $data) && $data['FinishedAt'] === null) {
            $object->setFinishedAt(null);
        }
        if (\array_key_exists('Health', $data) && $data['Health'] !== null) {
            $object->setHealth($this->denormalizer->denormalize($data['Health'], 'Docker\\API\\Model\\Health', 'json', $context));
        }
        elseif (\array_key_exists('Health', $data) && $data['Health'] === null) {
            $object->setHealth(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStatus()) {
            $data['Status'] = $object->getStatus();
        }
        if (null !== $object->getRunning()) {
            $data['Running'] = $object->getRunning();
        }
        if (null !== $object->getPaused()) {
            $data['Paused'] = $object->getPaused();
        }
        if (null !== $object->getRestarting()) {
            $data['Restarting'] = $object->getRestarting();
        }
        if (null !== $object->getOOMKilled()) {
            $data['OOMKilled'] = $object->getOOMKilled();
        }
        if (null !== $object->getDead()) {
            $data['Dead'] = $object->getDead();
        }
        if (null !== $object->getPid()) {
            $data['Pid'] = $object->getPid();
        }
        if (null !== $object->getExitCode()) {
            $data['ExitCode'] = $object->getExitCode();
        }
        if (null !== $object->getError()) {
            $data['Error'] = $object->getError();
        }
        if (null !== $object->getStartedAt()) {
            $data['StartedAt'] = $object->getStartedAt();
        }
        if (null !== $object->getFinishedAt()) {
            $data['FinishedAt'] = $object->getFinishedAt();
        }
        if (null !== $object->getHealth()) {
            $data['Health'] = $this->normalizer->normalize($object->getHealth(), 'json', $context);
        }
        return $data;
    }
}