<?php
namespace config;
    define('HOST', 'localhost');
    define('DB', 'shop');
    define('USER', 'root');
    define('PASS', 'root');
    define('CHARSET', 'utf8');
    define('PDO', null);
    class Db
    {

    private static $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone() {}
    private function __construct() {}


}