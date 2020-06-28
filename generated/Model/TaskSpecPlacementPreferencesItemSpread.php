<?php

namespace Docker\API\Model;

class TaskSpecPlacementPreferencesItemSpread
{
    /**
     * label descriptor, such as engine.labels.az
     *
     * @var string|null
     */
    protected $spreadDescriptor;
    /**
     * label descriptor, such as engine.labels.az
     *
     * @return string|null
     */
    public function getSpreadDescriptor() : ?string
    {
        return $this->spreadDescriptor;
    }
    /**
     * label descriptor, such as engine.labels.az
     *
     * @param string|null $spreadDescriptor
     *
     * @return self
     */
    public function setSpreadDescriptor(?string $spreadDescriptor) : self
    {
        $this->spreadDescriptor = $spreadDescriptor;
        return $this;
    }
}