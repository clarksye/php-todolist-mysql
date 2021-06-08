<?php namespace Config;

class Database {
    
    static function getConnection(): \PDO
    {
        $host = "localhost";
        $database = "php_todolist_mysql";
        $username = "root";
        $password = "";

        return new \PDO("mysql:host=$host;dbnames=$database", $username, $password);
    }
}