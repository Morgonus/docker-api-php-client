<?php

namespace Docker\API\Model;

class ImagesSearchGetResponse200Item
{
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isOfficial;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAutomated;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $starCount;
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsOfficial() : ?bool
    {
        return $this->isOfficial;
    }
    /**
     * 
     *
     * @param bool|null $isOfficial
     *
     * @return self
     */
    public function setIsOfficial(?bool $isOfficial) : self
    {
        $this->isOfficial = $isOfficial;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAutomated() : ?bool
    {
        return $this->isAutomated;
    }
    /**
     * 
     *
     * @param bool|null $isAutomated
     *
     * @return self
     */
    public function setIsAutomated(?bool $isAutomated) : self
    {
        $this->isAutomated = $isAutomated;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return int|null
     */
    public function getStarCount() : ?int
    {
        return $this->starCount;
    }
    /**
     * 
     *
     * @param int|null $starCount
     *
     * @return self
     */
    public function setStarCount(?int $starCount) : self
    {
        $this->starCount = $starCount;
        return $this;
    }
}