<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: todo.proto

namespace GPBMetadata;

class Todo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�

todo.prototodoPackage"	
NoParam"$
TodoItem

id (
text (	"1
	TodoItems$
items (2.todoPackage.TodoItem2�
Todo:

createTodo.todoPackage.TodoItem.todoPackage.TodoItem9
	readTodos.todoPackage.NoParam.todoPackage.TodoItems<
streamTodos.todoPackage.NoParam.todoPackage.TodoItem0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

