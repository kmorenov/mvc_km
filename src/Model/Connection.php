<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 30/09/18
 * Time: 12:08 PM
 */

class Connection
{
    private static $connection;
    private function __construct(){}
    private function __clone(){}

    public static function getConnection()
    {
        if (!isset(self::$connection)) {
            self::$connection = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
        }
        return self::$connection;
    }
}