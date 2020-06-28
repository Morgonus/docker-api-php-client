<?php

namespace Docker\API\Model;

class ServiceUpdateResponse
{
    /**
     * Optional warning messages
     *
     * @var string[]|null
     */
    protected $warnings;
    /**
     * Optional warning messages
     *
     * @return string[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * Optional warning messages
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