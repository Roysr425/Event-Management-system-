<?php
class DB {

    private static $host = "localhost";
    private static $database = "event_management_database";
    private static $username = "root";
    private static $password = "";
    
    public static function getConnection() {
        $dsn = 'mysql:host=' . DB::$host . ';dbname=' . DB::$database;

        $connection = new PDO($dsn, DB::$username, DB::$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }

}