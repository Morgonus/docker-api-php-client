<?php

namespace Docker\API\Model;

class BuildInfo
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $stream;
    /**
     * 
     *
     * @var string|null
     */
    protected $error;
    /**
     * 
     *
     * @var ErrorDetail|null
     */
    protected $errorDetail;
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
     * Image ID or Digest
     *
     * @var ImageID|null
     */
    protected $aux;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStream() : ?string
    {
        return $this->stream;
    }
    /**
     * 
     *
     * @param string|null $stream
     *
     * @return self
     */
    public function setStream(?string $stream) : self
    {
        $this->stream = $stream;
        return $this;
    }
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
     * @return ErrorDetail|null
     */
    public function getErrorDetail() : ?ErrorDetail
    {
        return $this->errorDetail;
    }
    /**
     * 
     *
     * @param ErrorDetail|null $errorDetail
     *
     * @return self
     */
    public function setErrorDetail(?ErrorDetail $errorDetail) : self
    {
        $this->errorDetail = $errorDetail;
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
    /**
     * Image ID or Digest
     *
     * @return ImageID|null
     */
    public function getAux() : ?ImageID
    {
        return $this->aux;
    }
    /**
     * Image ID or Digest
     *
     * @param ImageID|null $aux
     *
     * @return self
     */
    public function setAux(?ImageID $aux) : self
    {
        $this->aux = $aux;
        return $this;
    }
}