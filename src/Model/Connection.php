<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 30/09/18
 * Time: 12:08 PM
 */

class Connection
{
    protected function getConnection()
    {
        return new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
    }
}