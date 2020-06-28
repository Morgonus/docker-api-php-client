<?php

namespace Docker\API\Endpoint;

class ServiceUpdate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
    * 
    *
    * @param string $id ID or name of service.
    * @param \Docker\API\Model\ServicesIdUpdatePostBody $requestBody 
    * @param array $queryParameters {
    *     @var int $version The version number of the service object being updated. This is required to avoid conflicting writes. This version number should be the value as currently set on the service *before* the update. You can find the current version by calling `GET /services/{id}`
    *     @var string $registryAuthFrom If the `X-Registry-Auth` header is not specified, this parameter
    indicates where to find registry authorization credentials.
    
    *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback
    to the previous service spec. The supplied spec will be ignored in
    this case.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
    * }
    */
    public function __construct(string $id, \Docker\API\Model\ServicesIdUpdatePostBody $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/services/{id}/update');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Docker\API\Model\ServicesIdUpdatePostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('version', 'registryAuthFrom', 'rollback'));
        $optionsResolver->setRequired(array('version'));
        $optionsResolver->setDefaults(array('registryAuthFrom' => 'spec'));
        $optionsResolver->setAllowedTypes('version', array('int'));
        $optionsResolver->setAllowedTypes('registryAuthFrom', array('string'));
        $optionsResolver->setAllowedTypes('rollback', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Registry-Auth'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Registry-Auth', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\ServiceUpdateBadRequestException
     * @throws \Docker\API\Exception\ServiceUpdateNotFoundException
     * @throws \Docker\API\Exception\ServiceUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceUpdateServiceUnavailableException
     *
     * @return null|\Docker\API\Model\ServiceUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Docker\\API\\Model\\ServiceUpdateResponse', 'json');
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ServiceUpdateBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ServiceUpdateNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ServiceUpdateInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (503 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\ServiceUpdateServiceUnavailableException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}