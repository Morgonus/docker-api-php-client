<?php

namespace Docker\API\Model;

class TaskSpecPlacementPreferencesItem
{
    /**
     * 
     *
     * @var TaskSpecPlacementPreferencesItemSpread|null
     */
    protected $spread;
    /**
     * 
     *
     * @return TaskSpecPlacementPreferencesItemSpread|null
     */
    public function getSpread() : ?TaskSpecPlacementPreferencesItemSpread
    {
        return $this->spread;
    }
    /**
     * 
     *
     * @param TaskSpecPlacementPreferencesItemSpread|null $spread
     *
     * @return self
     */
    public function setSpread(?TaskSpecPlacementPreferencesItemSpread $spread) : self
    {
        $this->spread = $spread;
        return $this;
    }
}