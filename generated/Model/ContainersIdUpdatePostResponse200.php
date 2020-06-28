<?php

namespace Docker\API\Model;

class ContainersIdUpdatePostResponse200
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $warnings;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param string[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->warnings = $warnings;
        return $this;
    }
}