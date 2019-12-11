<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 16:12
 */
require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\DeleteQuery();
$bean->setIndex('my-index-2');
$bean->setType('my-type-2');
$bean->setBody(['query'=>['match'=>['test-field'=>'abc']]]);



\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->deleteByQuery($bean);
    print_r($response->getBody());
});