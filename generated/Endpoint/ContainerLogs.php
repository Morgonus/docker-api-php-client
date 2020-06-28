<?php

namespace Docker\API\Endpoint;

class ContainerLogs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
    * Get `stdout` and `stderr` logs from a container.
    
    Note: This endpoint works only for containers with the `json-file` or `journald` logging driver.
    
    *
    * @param string $id ID or name of the container
    * @param array $queryParameters {
    *     @var bool $follow Keep connection after returning logs.
    *     @var bool $stdout Return logs from `stdout`
    *     @var bool $stderr Return logs from `stderr`
    *     @var int $since Only return logs since this time, as a UNIX timestamp
    *     @var int $until Only return logs before this time, as a UNIX timestamp
    *     @var bool $timestamps Add timestamps to every log line
    *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
    * }
    */
    public function __construct(string $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/containers/{id}/logs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('follow', 'stdout', 'stderr', 'since', 'until', 'timestamps', 'tail'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('follow' => false, 'stdout' => false, 'stderr' => false, 'since' => 0, 'until' => 0, 'timestamps' => false, 'tail' => 'all'));
        $optionsResolver->setAllowedTypes('follow', array('bool'));
        $optionsResolver->setAllowedTypes('stdout', array('bool'));
        $optionsResolver->setAllowedTypes('stderr', array('bool'));
        $optionsResolver->setAllowedTypes('since', array('int'));
        $optionsResolver->setAllowedTypes('until', array('int'));
        $optionsResolver->setAllowedTypes('timestamps', array('bool'));
        $optionsResolver->setAllowedTypes('tail', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ContainerLogsNotFoundException
     * @throws \Docker\API\Exception\ContainerLogsInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ContainerLogsNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ContainerLogsInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}