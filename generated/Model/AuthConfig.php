<?php

namespace Docker\API\Model;

class AuthConfig
{
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @var string|null
     */
    protected $password;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $serveraddress;
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->username = $username;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getServeraddress() : ?string
    {
        return $this->serveraddress;
    }
    /**
     * 
     *
     * @param string|null $serveraddress
     *
     * @return self
     */
    public function setServeraddress(?string $serveraddress) : self
    {
        $this->serveraddress = $serveraddress;
        return $this;
    }
}