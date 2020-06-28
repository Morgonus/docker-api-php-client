<?php

namespace Docker\API\Model;

class ContainersIdTopGetResponse200
{
    /**
     * The ps column titles
     *
     * @var string[]|null
     */
    protected $titles;
    /**
     * Each process running in the container, where each is process is an array of values corresponding to the titles
     *
     * @var string[][]|null
     */
    protected $processes;
    /**
     * The ps column titles
     *
     * @return string[]|null
     */
    public function getTitles() : ?array
    {
        return $this->titles;
    }
    /**
     * The ps column titles
     *
     * @param string[]|null $titles
     *
     * @return self
     */
    public function setTitles(?array $titles) : self
    {
        $this->titles = $titles;
        return $this;
    }
    /**
     * Each process running in the container, where each is process is an array of values corresponding to the titles
     *
     * @return string[][]|null
     */
    public function getProcesses() : ?array
    {
        return $this->processes;
    }
    /**
     * Each process running in the container, where each is process is an array of values corresponding to the titles
     *
     * @param string[][]|null $processes
     *
     * @return self
     */
    public function setProcesses(?array $processes) : self
    {
        $this->processes = $processes;
        return $this;
    }
}