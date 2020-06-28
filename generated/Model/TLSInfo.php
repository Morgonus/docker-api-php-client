<?php

namespace Docker\API\Model;

class TLSInfo
{
    /**
     * The root CA certificate(s) that are used to validate leaf TLS certificates
     *
     * @var string|null
     */
    protected $trustRoot;
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer
     *
     * @var string|null
     */
    protected $certIssuerSubject;
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer
     *
     * @var string|null
     */
    protected $certIssuerPublicKey;
    /**
     * The root CA certificate(s) that are used to validate leaf TLS certificates
     *
     * @return string|null
     */
    public function getTrustRoot() : ?string
    {
        return $this->trustRoot;
    }
    /**
     * The root CA certificate(s) that are used to validate leaf TLS certificates
     *
     * @param string|null $trustRoot
     *
     * @return self
     */
    public function setTrustRoot(?string $trustRoot) : self
    {
        $this->trustRoot = $trustRoot;
        return $this;
    }
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer
     *
     * @return string|null
     */
    public function getCertIssuerSubject() : ?string
    {
        return $this->certIssuerSubject;
    }
    /**
     * The base64-url-safe-encoded raw subject bytes of the issuer
     *
     * @param string|null $certIssuerSubject
     *
     * @return self
     */
    public function setCertIssuerSubject(?string $certIssuerSubject) : self
    {
        $this->certIssuerSubject = $certIssuerSubject;
        return $this;
    }
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer
     *
     * @return string|null
     */
    public function getCertIssuerPublicKey() : ?string
    {
        return $this->certIssuerPublicKey;
    }
    /**
     * The base64-url-safe-encoded raw public key bytes of the issuer
     *
     * @param string|null $certIssuerPublicKey
     *
     * @return self
     */
    public function setCertIssuerPublicKey(?string $certIssuerPublicKey) : self
    {
        $this->certIssuerPublicKey = $certIssuerPublicKey;
        return $this;
    }
}