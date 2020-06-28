<?php

namespace Docker\API\Endpoint;

class PluginUpgrade extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $name;
    /**
    * 
    *
    * @param string $name The name of the plugin. The `:latest` tag is optional, and is the default if omitted.
    * @param \Docker\API\Model\PluginsNameUpgradePostBodyItem[] $requestBody 
    * @param array $queryParameters {
    *     @var string $remote Remote reference to upgrade to.
    
    The `:latest` tag is optional, and is used as the default if omitted.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Registry-Auth A base64-encoded auth configuration to use when pulling a plugin from a registry. [See the authentication section for details.](#section/Authentication)
    * }
    */
    public function __construct(string $name, array $requestBody, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->name = $name;
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
        return str_replace(array('{name}'), array($this->name), '/plugins/{name}/upgrade');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Docker\API\Model\PluginsNameUpgradePostBodyItem) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Docker\API\Model\PluginsNameUpgradePostBodyItem) {
            return array(array('Content-Type' => array('text/plain')), $this->body);
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
        $optionsResolver->setDefined(array('remote'));
        $optionsResolver->setRequired(array('remote'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('remote', array('string'));
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
     * @throws \Docker\API\Exception\PluginUpgradeNotFoundException
     * @throws \Docker\API\Exception\PluginUpgradeInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\PluginUpgradeNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Docker\API\Exception\PluginUpgradeInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}