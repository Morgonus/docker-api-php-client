<?php

namespace Docker\API\Model;

class HealthcheckResult
{
    /**
    * Date and time at which this check started in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var \DateTime|null
    */
    protected $start;
    /**
    * Date and time at which this check ended in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @var string|null
    */
    protected $end;
    /**
    * ExitCode meanings:
    
    - `0` healthy
    - `1` unhealthy
    - `2` reserved (considered unhealthy)
    - other values: error running probe
    
    *
    * @var int|null
    */
    protected $exitCode;
    /**
     * Output from last check
     *
     * @var string|null
     */
    protected $output;
    /**
    * Date and time at which this check started in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return \DateTime|null
    */
    public function getStart() : ?\DateTime
    {
        return $this->start;
    }
    /**
    * Date and time at which this check started in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param \DateTime|null $start
    *
    * @return self
    */
    public function setStart(?\DateTime $start) : self
    {
        $this->start = $start;
        return $this;
    }
    /**
    * Date and time at which this check ended in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @return string|null
    */
    public function getEnd() : ?string
    {
        return $this->end;
    }
    /**
    * Date and time at which this check ended in
    [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds.
    
    *
    * @param string|null $end
    *
    * @return self
    */
    public function setEnd(?string $end) : self
    {
        $this->end = $end;
        return $this;
    }
    /**
    * ExitCode meanings:
    
    - `0` healthy
    - `1` unhealthy
    - `2` reserved (considered unhealthy)
    - other values: error running probe
    
    *
    * @return int|null
    */
    public function getExitCode() : ?int
    {
        return $this->exitCode;
    }
    /**
    * ExitCode meanings:
    
    - `0` healthy
    - `1` unhealthy
    - `2` reserved (considered unhealthy)
    - other values: error running probe
    
    *
    * @param int|null $exitCode
    *
    * @return self
    */
    public function setExitCode(?int $exitCode) : self
    {
        $this->exitCode = $exitCode;
        return $this;
    }
    /**
     * Output from last check
     *
     * @return string|null
     */
    public function getOutput() : ?string
    {
        return $this->output;
    }
    /**
     * Output from last check
     *
     * @param string|null $output
     *
     * @return self
     */
    public function setOutput(?string $output) : self
    {
        $this->output = $output;
        return $this;
    }
}