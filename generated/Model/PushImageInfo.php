<?php

namespace Docker\API\Model;

class PushImageInfo
{
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $progress;
    /**
     * 
     *
     * @var ProgressDetail|null
     */
    protected $progressDetail;
    /**
     * 
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProgress() : ?string
    {
        return $this->progress;
    }
    /**
     * 
     *
     * @param string|null $progress
     *
     * @return self
     */
    public function setProgress(?string $progress) : self
    {
        $this->progress = $progress;
        return $this;
    }
    /**
     * 
     *
     * @return ProgressDetail|null
     */
    public function getProgressDetail() : ?ProgressDetail
    {
        return $this->progressDetail;
    }
    /**
     * 
     *
     * @param ProgressDetail|null $progressDetail
     *
     * @return self
     */
    public function setProgressDetail(?ProgressDetail $progressDetail) : self
    {
        $this->progressDetail = $progressDetail;
        return $this;
    }
}