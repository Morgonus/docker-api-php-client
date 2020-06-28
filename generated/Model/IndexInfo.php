<?php

namespace Docker\API\Model;

class IndexInfo
{
    /**
     * Name of the registry, such as "docker.io".
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of mirrors, expressed as URIs.
     *
     * @var string[]|null
     */
    protected $mirrors;
    /**
    * Indicates if the registry is part of the list of insecure
    registries.
    
    If `false`, the registry is insecure. Insecure registries accept
    un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from
    unknown CAs) communication.
    
    > **Warning**: Insecure registries can be useful when running a local
    > registry. However, because its use creates security vulnerabilities
    > it should ONLY be enabled for testing purposes. For increased
    > security, users should add their CA to their system's list of
    > trusted CAs instead of enabling this option.
    
    *
    * @var bool|null
    */
    protected $secure;
    /**
     * Indicates whether this is an official registry (i.e., Docker Hub / docker.io)
     *
     * @var bool|null
     */
    protected $official;
    /**
     * Name of the registry, such as "docker.io".
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the registry, such as "docker.io".
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * List of mirrors, expressed as URIs.
     *
     * @return string[]|null
     */
    public function getMirrors() : ?array
    {
        return $this->mirrors;
    }
    /**
     * List of mirrors, expressed as URIs.
     *
     * @param string[]|null $mirrors
     *
     * @return self
     */
    public function setMirrors(?array $mirrors) : self
    {
        $this->mirrors = $mirrors;
        return $this;
    }
    /**
    * Indicates if the registry is part of the list of insecure
    registries.
    
    If `false`, the registry is insecure. Insecure registries accept
    un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from
    unknown CAs) communication.
    
    > **Warning**: Insecure registries can be useful when running a local
    > registry. However, because its use creates security vulnerabilities
    > it should ONLY be enabled for testing purposes. For increased
    > security, users should add their CA to their system's list of
    > trusted CAs instead of enabling this option.
    
    *
    * @return bool|null
    */
    public function getSecure() : ?bool
    {
        return $this->secure;
    }
    /**
    * Indicates if the registry is part of the list of insecure
    registries.
    
    If `false`, the registry is insecure. Insecure registries accept
    un-encrypted (HTTP) and/or untrusted (HTTPS with certificates from
    unknown CAs) communication.
    
    > **Warning**: Insecure registries can be useful when running a local
    > registry. However, because its use creates security vulnerabilities
    > it should ONLY be enabled for testing purposes. For increased
    > security, users should add their CA to their system's list of
    > trusted CAs instead of enabling this option.
    
    *
    * @param bool|null $secure
    *
    * @return self
    */
    public function setSecure(?bool $secure) : self
    {
        $this->secure = $secure;
        return $this;
    }
    /**
     * Indicates whether this is an official registry (i.e., Docker Hub / docker.io)
     *
     * @return bool|null
     */
    public function getOfficial() : ?bool
    {
        return $this->official;
    }
    /**
     * Indicates whether this is an official registry (i.e., Docker Hub / docker.io)
     *
     * @param bool|null $official
     *
     * @return self
     */
    public function setOfficial(?bool $official) : self
    {
        $this->official = $official;
        return $this;
    }
}