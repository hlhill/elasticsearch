<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:34
 */

namespace EasySwoole\ElasticSearch\RequestBean\Snapshot;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class CreateRepository extends AbstractBean
{
    protected $repository;
    protected $master_timeout;
    protected $timeout;
    protected $verify;
    protected $body;

    /**
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param mixed $repository
     */
    public function setRepository($repository): void
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getMasterTimeout()
    {
        return $this->master_timeout;
    }

    /**
     * @param mixed $master_timeout
     */
    public function setMasterTimeout($master_timeout): void
    {
        $this->master_timeout = $master_timeout;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * @return mixed
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * @param mixed $verify
     */
    public function setVerify($verify): void
    {
        $this->verify = $verify;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }


}