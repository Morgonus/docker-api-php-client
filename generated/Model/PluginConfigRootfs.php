<?php

namespace Docker\API\Model;

class PluginConfigRootfs
{
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $diffIds;
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDiffIds() : ?array
    {
        return $this->diffIds;
    }
    /**
     * 
     *
     * @param string[]|null $diffIds
     *
     * @return self
     */
    public function setDiffIds(?array $diffIds) : self
    {
        $this->diffIds = $diffIds;
        return $this;
    }
}