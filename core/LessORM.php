<?php
namespace core;

use LessQL\Database as LessQL;

class LessORM
{
    private static $pdo = null;
    private static $db = null;

    public static function getInstance()
    {
        if (null === self::$db) {
            self::$pdo = new \PDO('sqlite:blog.sqlite3');
            self::$db = new LessQL(self::$pdo);
        }
        return self::$db;
    }

    private function __clone()
    {
    }

    private function __construct()
    {
    }
}
