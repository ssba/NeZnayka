<?php
namespace core;

class JsonMessage
{
    private static $obj = null;

    public static function getInstance()
    {
        if (null === self::$obj) {
            self::$obj = new JsonMessage();
        }
        return self::$obj;
    }

    private function __clone()
    {
    }

    private function __construct()
    {
    }

    public function create($http,$error_message){

    }
}
