<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Functions extends Service
{
    /**
     * List Functions
     *
     * @param string  $search
     * @param int  $limit
     * @param int  $offset
     * @param string  $orderType
     * @throws Exception
     * @return array
     */
    public function list(string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace([], [], '/functions');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Function
     *
     * @param string  $name
     * @param string  $env
     * @param array  $vars
     * @param array  $events
     * @param string  $schedule
     * @param int  $timeout
     * @throws Exception
     * @return array
     */
    public function create(string $name, string $env, array $vars = , array $events = [], string $schedule = '', int $timeout = 15):array
    {
        $path   = str_replace([], [], '/functions');
        $params = [];

        $params['name'] = $name;
        $params['env'] = $env;
        $params['vars'] = $vars;
        $params['events'] = $events;
        $params['schedule'] = $schedule;
        $params['timeout'] = $timeout;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Function
     *
     * @param string  $functionId
     * @throws Exception
     * @return array
     */
    public function get(string $functionId):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Function
     *
     * @param string  $functionId
     * @param string  $name
     * @param array  $vars
     * @param array  $events
     * @param string  $schedule
     * @param int  $timeout
     * @throws Exception
     * @return array
     */
    public function update(string $functionId, string $name, array $vars = , array $events = [], string $schedule = '', int $timeout = 15):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];

        $params['name'] = $name;
        $params['vars'] = $vars;
        $params['events'] = $events;
        $params['schedule'] = $schedule;
        $params['timeout'] = $timeout;

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Function
     *
     * @param string  $functionId
     * @throws Exception
     * @return array
     */
    public function delete(string $functionId):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Executions
     *
     * @param string  $functionId
     * @param string  $search
     * @param int  $limit
     * @param int  $offset
     * @param string  $orderType
     * @throws Exception
     * @return array
     */
    public function listExecutions(string $functionId, string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Execution
     *
     * @param string  $functionId
     * @throws Exception
     * @return array
     */
    public function createExecution(string $functionId):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/executions');
        $params = [];


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Execution
     *
     * @param string  $functionId
     * @param string  $executionId
     * @throws Exception
     * @return array
     */
    public function getExecution(string $functionId, string $executionId):array
    {
        $path   = str_replace(['{functionId}', '{executionId}'], [$functionId, $executionId], '/functions/{functionId}/executions/{executionId}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Function Tag
     *
     * @param string  $functionId
     * @param string  $tag
     * @throws Exception
     * @return array
     */
    public function updateTag(string $functionId, string $tag):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tag');
        $params = [];

        $params['tag'] = $tag;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Tags
     *
     * @param string  $functionId
     * @param string  $search
     * @param int  $limit
     * @param int  $offset
     * @param string  $orderType
     * @throws Exception
     * @return array
     */
    public function listTags(string $functionId, string $search = '', int $limit = 25, int $offset = 0, string $orderType = 'ASC'):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tags');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Tag
     *
     * @param string  $functionId
     * @param string  $command
     * @param \CurlFile  $code
     * @throws Exception
     * @return array
     */
    public function createTag(string $functionId, string $command, \CurlFile $code):array
    {
        $path   = str_replace(['{functionId}'], [$functionId], '/functions/{functionId}/tags');
        $params = [];

        $params['command'] = $command;
        $params['code'] = $code;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'multipart/form-data',
        ], $params);
    }

    /**
     * Get Tag
     *
     * @param string  $functionId
     * @param string  $tagId
     * @throws Exception
     * @return array
     */
    public function getTag(string $functionId, string $tagId):array
    {
        $path   = str_replace(['{functionId}', '{tagId}'], [$functionId, $tagId], '/functions/{functionId}/tags/{tagId}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Tag
     *
     * @param string  $functionId
     * @param string  $tagId
     * @throws Exception
     * @return array
     */
    public function deleteTag(string $functionId, string $tagId):array
    {
        $path   = str_replace(['{functionId}', '{tagId}'], [$functionId, $tagId], '/functions/{functionId}/tags/{tagId}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

}