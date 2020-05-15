<?php

namespace Docker\API\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ImageResource extends Resource
{
    /**
     * List Images
     *
     * @param array  $parameters {
     *     @var bool $all Show all images. Only images from a final layer (no children) are shown by default.
     *     @var string $filters A JSON encoded value of the filters (a map[string][]string) to process on the containers list
     *     @var string $filter Only return images with the specified name.
     *     @var bool $digests Show digest information, default to false
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\ImageItem[]
     */
    public function findAll($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('all', false);
        $queryParam->setDefault('filters', NULL);
        $queryParam->setDefault('filter', NULL);
        $queryParam->setDefault('digests', NULL);
        $url = '/v1.25/images/json';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ImageItem[]', 'json');
            }
        }
        return $response;
    }
    /**
     * Build an image from Dockerfile via stdin
     *
     * @param string $inputStream The input stream must be a tar archive compressed with one of the following algorithms: identity (no compression), gzip, bzip2, xz.
     * @param array  $parameters {
     *     @var string $dockerfile Path within the build context to the Dockerfile. This is ignored if remote is specified and points to an individual filename.
     *     @var string $t A repository name (and optionally a tag) to apply to the resulting image in case of success.
     *     @var string $remote A Git repository URI or HTTP/HTTPS URI build source. If the URI specifies a filename, the file’s contents are placed into a file called Dockerfile.
     *     @var bool $q Suppress verbose build output.
     *     @var bool $nocache Do not use the cache when building the image.
     *     @var string $pull Attempt to pull the image even if an older image exists locally
     *     @var bool $rm Remove intermediate containers after a successful build (default behavior).
     *     @var bool $forcerm always remove intermediate containers (includes rm)
     *     @var int $memory Set memory limit for build.
     *     @var int $memswap Total memory (memory + swap), -1 to disable swap.
     *     @var int $cpushares CPU shares (relative weight).
     *     @var string $cpusetcpus CPUs in which to allow execution (e.g., 0-3, 0,1).
     *     @var int $cpuperiod The length of a CPU period in microseconds.
     *     @var int $cpuquota Microseconds of CPU time that the container can get in a CPU period.
     *     @var int $buildargs Total memory (memory + swap), -1 to disable swap.
     *     @var string $Content-type  Set to 'application/tar'.
     *     @var string $X-Registry-Config A base64-url-safe-encoded Registry Auth Config JSON object
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function build($inputStream, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('dockerfile', NULL);
        $queryParam->setDefault('t', NULL);
        $queryParam->setDefault('remote', NULL);
        $queryParam->setDefault('q', false);
        $queryParam->setDefault('nocache', false);
        $queryParam->setDefault('pull', NULL);
        $queryParam->setDefault('rm', true);
        $queryParam->setDefault('forcerm', false);
        $queryParam->setDefault('memory', NULL);
        $queryParam->setDefault('memswap', NULL);
        $queryParam->setDefault('cpushares', NULL);
        $queryParam->setDefault('cpusetcpus', NULL);
        $queryParam->setDefault('cpuperiod', NULL);
        $queryParam->setDefault('cpuquota', NULL);
        $queryParam->setDefault('buildargs', NULL);
        $queryParam->setDefault('Content-type', 'application/tar');
        $queryParam->setHeaderParameters(array('Content-type'));
        $queryParam->setDefault('X-Registry-Config', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Config'));
        $url = '/v1.25/build';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $inputStream;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Create an image either by pulling it from the registry or by importing it
     *
     * @param string $inputImage Image content if the value - has been specified in fromSrc query parameter
     * @param array  $parameters {
     *     @var string $fromImage Name of the image to pull. The name may include a tag or digest. This parameter may only be used when pulling an image.
     *     @var string $fromSrc Source to import. The value may be a URL from which the image can be retrieved or - to read the image from the request body. This parameter may only be used when importing an image.
     *     @var string $repo Repository name given to an image when it is imported. The repo may include a tag. This parameter may only be used when importing an image.
     *     @var string $tag Tag or digest.
     *     @var string $X-Registry-Auth A base64-encoded AuthConfig object
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function create($inputImage, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('fromImage', NULL);
        $queryParam->setDefault('fromSrc', NULL);
        $queryParam->setDefault('repo', NULL);
        $queryParam->setDefault('tag', NULL);
        $queryParam->setDefault('X-Registry-Auth', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.25/images/create';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $inputImage;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Return low-level information on the image name
     *
     * @param string $name Image name or id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\Image
     */
    public function find($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/images/{name}/json';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\Image', 'json');
            }
        }
        return $response;
    }
    /**
     * Return the history of the image name
     *
     * @param string $name Image name or id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\ImageHistoryItem[]
     */
    public function history($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/images/{name}/history';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ImageHistoryItem[]', 'json');
            }
        }
        return $response;
    }
    /**
     * Push the image name on the registry
     *
     * @param string $name Image name or id
     * @param array  $parameters {
     *     @var string $tag The tag to associate with the image on the registry.
     *     @var string $X-Registry-Auth A base64-encoded AuthConfig object
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function push($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('tag', NULL);
        $queryParam->setRequired('X-Registry-Auth');
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.25/images/{name}/push';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Tag the image name into a repository
     *
     * @param string $name Image name or id
     * @param array  $parameters {
     *     @var string $repo The repository to tag in.
     *     @var string $tag The new tag name.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function tag($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('repo', NULL);
        $queryParam->setDefault('tag', NULL);
        $url = '/v1.25/images/{name}/tag';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Remove the image name from the filesystem
     *
     * @param string $name Image name or id
     * @param array  $parameters {
     *     @var string $force 1/True/true or 0/False/false, default false
     *     @var string $noprune 1/True/true or 0/False/false, default false.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function remove($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('force', NULL);
        $queryParam->setDefault('noprune', NULL);
        $url = '/v1.25/images/{name}';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Search for an image on Docker Hub.
     *
     * @param array  $parameters {
     *     @var string $term Term to search
     *     @var int $limit Maximum returned search results
     *     @var string $filters A JSON encoded value of the filters (a map[string][]string) to process on the images list.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\ImageSearchResult[]
     */
    public function search($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('term', NULL);
        $queryParam->setDefault('limit', NULL);
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.25/images/search';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\ImageSearchResult[]', 'json');
            }
        }
        return $response;
    }
    /**
     * Create a new image from a container’s changes
     *
     * @param \Docker\API\Model\ContainerConfig $containerConfig The container configuration
     * @param array  $parameters {
     *     @var string $container Container id or name to commit
     *     @var string $repo Repository name for the created image
     *     @var string $tag Tag name for the create image
     *     @var string $comment Commit message
     *     @var string $author author (e.g., “John Hannibal Smith <hannibal@a-team.com>“)
     *     @var string $pause 1/True/true or 0/False/false, whether to pause the container before committing
     *     @var string $changes Dockerfile instructions to apply while committing
     *     @var string $Content-Type Content Type of input
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Docker\API\Model\CommitResult
     */
    public function commit(\Docker\API\Model\ContainerConfig $containerConfig, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('container', NULL);
        $queryParam->setDefault('repo', NULL);
        $queryParam->setDefault('tag', NULL);
        $queryParam->setDefault('comment', NULL);
        $queryParam->setDefault('author', NULL);
        $queryParam->setDefault('pause', NULL);
        $queryParam->setDefault('changes', NULL);
        $queryParam->setDefault('Content-Type', 'application/json');
        $queryParam->setHeaderParameters(array('Content-Type'));
        $url = '/v1.25/commit';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($containerConfig, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Docker\\API\\Model\\CommitResult', 'json');
            }
        }
        return $response;
    }
    /**
     * Get a tarball containing all images and metadata for the repository specified by name.
     *
     * @param string $name Image name or id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function save($name, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/images/{name}/get';
        $url = str_replace('{name}', urlencode($name), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Get a tarball containing all images and metadata for one or more repositories.
     *
     * @param array  $parameters {
     *     @var array $names Image names to filter
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function saveAll($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('names', NULL);
        $url = '/v1.25/images/get';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
    /**
     * Load a set of images and tags into a Docker repository. See the image tarball format for more details.
     *
     * @param string $imagesTarball Tar archive containing images
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function load($imagesTarball, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.25/images/load';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $imagesTarball;
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        return $response;
    }
}