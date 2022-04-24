<?php
// GENERATED CODE -- DO NOT EDIT!

namespace TodoPackage;

/**
 */
class TodoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \TodoPackage\TodoItem $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createTodo(\TodoPackage\TodoItem $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todoPackage.Todo/createTodo',
        $argument,
        ['\TodoPackage\TodoItem', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \TodoPackage\NoParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function readTodos(\TodoPackage\NoParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/todoPackage.Todo/readTodos',
        $argument,
        ['\TodoPackage\TodoItems', 'decode'],
        $metadata, $options);
    }

}