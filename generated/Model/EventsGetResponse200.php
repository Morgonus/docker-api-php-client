<?php

namespace Docker\API\Model;

class EventsGetResponse200
{
    /**
     * The type of object emitting the event
     *
     * @var string|null
     */
    protected $type;
    /**
     * The type of event
     *
     * @var string|null
     */
    protected $action;
    /**
     * 
     *
     * @var EventsGetResponse200Actor|null
     */
    protected $actor;
    /**
     * Timestamp of event
     *
     * @var int|null
     */
    protected $time;
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @var int|null
     */
    protected $timeNano;
    /**
     * The type of object emitting the event
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of object emitting the event
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
     * The type of event
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * The type of event
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return EventsGetResponse200Actor|null
     */
    public function getActor() : ?EventsGetResponse200Actor
    {
        return $this->actor;
    }
    /**
     * 
     *
     * @param EventsGetResponse200Actor|null $actor
     *
     * @return self
     */
    public function setActor(?EventsGetResponse200Actor $actor) : self
    {
        $this->actor = $actor;
        return $this;
    }
    /**
     * Timestamp of event
     *
     * @return int|null
     */
    public function getTime() : ?int
    {
        return $this->time;
    }
    /**
     * Timestamp of event
     *
     * @param int|null $time
     *
     * @return self
     */
    public function setTime(?int $time) : self
    {
        $this->time = $time;
        return $this;
    }
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @return int|null
     */
    public function getTimeNano() : ?int
    {
        return $this->timeNano;
    }
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @param int|null $timeNano
     *
     * @return self
     */
    public function setTimeNano(?int $timeNano) : self
    {
        $this->timeNano = $timeNano;
        return $this;
    }
}