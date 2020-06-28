<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecSecretsItem
{
    /**
     * File represents a specific target that is backed by a file.
     *
     * @var TaskSpecContainerSpecSecretsItemFile|null
     */
    protected $file;
    /**
     * SecretID represents the ID of the specific secret that we're referencing.
     *
     * @var string|null
     */
    protected $secretID;
    /**
    * SecretName is the name of the secret that this references, but this is just provided for
    lookup/display purposes. The secret in the reference will be identified by its ID.
    
    *
    * @var string|null
    */
    protected $secretName;
    /**
     * File represents a specific target that is backed by a file.
     *
     * @return TaskSpecContainerSpecSecretsItemFile|null
     */
    public function getFile() : ?TaskSpecContainerSpecSecretsItemFile
    {
        return $this->file;
    }
    /**
     * File represents a specific target that is backed by a file.
     *
     * @param TaskSpecContainerSpecSecretsItemFile|null $file
     *
     * @return self
     */
    public function setFile(?TaskSpecContainerSpecSecretsItemFile $file) : self
    {
        $this->file = $file;
        return $this;
    }
    /**
     * SecretID represents the ID of the specific secret that we're referencing.
     *
     * @return string|null
     */
    public function getSecretID() : ?string
    {
        return $this->secretID;
    }
    /**
     * SecretID represents the ID of the specific secret that we're referencing.
     *
     * @param string|null $secretID
     *
     * @return self
     */
    public function setSecretID(?string $secretID) : self
    {
        $this->secretID = $secretID;
        return $this;
    }
    /**
    * SecretName is the name of the secret that this references, but this is just provided for
    lookup/display purposes. The secret in the reference will be identified by its ID.
    
    *
    * @return string|null
    */
    public function getSecretName() : ?string
    {
        return $this->secretName;
    }
    /**
    * SecretName is the name of the secret that this references, but this is just provided for
    lookup/display purposes. The secret in the reference will be identified by its ID.
    
    *
    * @param string|null $secretName
    *
    * @return self
    */
    public function setSecretName(?string $secretName) : self
    {
        $this->secretName = $secretName;
        return $this;
    }
}