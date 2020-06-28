<?php

namespace Docker\API\Model;

class RegistryServiceConfig
{
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @var string[]|null
    */
    protected $allowNondistributableArtifactsCIDRs;
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @var string[]|null
    */
    protected $allowNondistributableArtifactsHostnames;
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @var string[]|null
    */
    protected $insecureRegistryCIDRs;
    /**
     * 
     *
     * @var IndexInfo[]|null
     */
    protected $indexConfigs;
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
    *
    * @var string[]|null
    */
    protected $mirrors;
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @return string[]|null
    */
    public function getAllowNondistributableArtifactsCIDRs() : ?array
    {
        return $this->allowNondistributableArtifactsCIDRs;
    }
    /**
    * List of IP ranges to which nondistributable artifacts can be pushed,
    using the CIDR syntax [RFC 4632](https://tools.ietf.org/html/4632).
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior, and enables the daemon to
    push nondistributable artifacts to all registries whose resolved IP
    address is within the subnet described by the CIDR syntax.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @param string[]|null $allowNondistributableArtifactsCIDRs
    *
    * @return self
    */
    public function setAllowNondistributableArtifactsCIDRs(?array $allowNondistributableArtifactsCIDRs) : self
    {
        $this->allowNondistributableArtifactsCIDRs = $allowNondistributableArtifactsCIDRs;
        return $this;
    }
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @return string[]|null
    */
    public function getAllowNondistributableArtifactsHostnames() : ?array
    {
        return $this->allowNondistributableArtifactsHostnames;
    }
    /**
    * List of registry hostnames to which nondistributable artifacts can be
    pushed, using the format `<hostname>[:<port>]` or `<IP address>[:<port>]`.
    
    Some images (for example, Windows base images) contain artifacts
    whose distribution is restricted by license. When these images are
    pushed to a registry, restricted artifacts are not included.
    
    This configuration override this behavior for the specified
    registries.
    
    This option is useful when pushing images containing
    nondistributable artifacts to a registry on an air-gapped network so
    hosts on that network can pull the images without connecting to
    another server.
    
    > **Warning**: Nondistributable artifacts typically have restrictions
    > on how and where they can be distributed and shared. Only use this
    > feature to push artifacts to private registries and ensure that you
    > are in compliance with any terms that cover redistributing
    > nondistributable artifacts.
    
    *
    * @param string[]|null $allowNondistributableArtifactsHostnames
    *
    * @return self
    */
    public function setAllowNondistributableArtifactsHostnames(?array $allowNondistributableArtifactsHostnames) : self
    {
        $this->allowNondistributableArtifactsHostnames = $allowNondistributableArtifactsHostnames;
        return $this;
    }
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @return string[]|null
    */
    public function getInsecureRegistryCIDRs() : ?array
    {
        return $this->insecureRegistryCIDRs;
    }
    /**
    * List of IP ranges of insecure registries, using the CIDR syntax
    ([RFC 4632](https://tools.ietf.org/html/4632)). Insecure registries
    accept un-encrypted (HTTP) and/or untrusted (HTTPS with certificates
    from unknown CAs) communication.
    
    By default, local registries (`127.0.0.0/8`) are configured as
    insecure. All other registries are secure. Communicating with an
    insecure registry is not possible if the daemon assumes that registry
    is secure.
    
    This configuration override this behavior, insecure communication with
    registries whose resolved IP address is within the subnet described by
    the CIDR syntax.
    
    Registries can also be marked insecure by hostname. Those registries
    are listed under `IndexConfigs` and have their `Secure` field set to
    `false`.
    
    > **Warning**: Using this option can be useful when running a local
    > registry, but introduces security vulnerabilities. This option
    > should therefore ONLY be used for testing purposes. For increased
    > security, users should add their CA to their system's list of trusted
    > CAs instead of enabling this option.
    
    *
    * @param string[]|null $insecureRegistryCIDRs
    *
    * @return self
    */
    public function setInsecureRegistryCIDRs(?array $insecureRegistryCIDRs) : self
    {
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;
        return $this;
    }
    /**
     * 
     *
     * @return IndexInfo[]|null
     */
    public function getIndexConfigs() : ?\ArrayObject
    {
        return $this->indexConfigs;
    }
    /**
     * 
     *
     * @param IndexInfo[]|null $indexConfigs
     *
     * @return self
     */
    public function setIndexConfigs(?\ArrayObject $indexConfigs) : self
    {
        $this->indexConfigs = $indexConfigs;
        return $this;
    }
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
    *
    * @return string[]|null
    */
    public function getMirrors() : ?array
    {
        return $this->mirrors;
    }
    /**
    * List of registry URLs that act as a mirror for the official
    (`docker.io`) registry.
    
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
}