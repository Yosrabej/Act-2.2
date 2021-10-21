<?php
class DbConnection
{
    private static $instance = null;
    private static $connection;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }
    public function __construct()
    {
        //  echo 'connection created';
        // $this->connection =  new mysqli('localhost', 'root', '', 'articles');
        // $this->connection = $connection;
    }
    public static function connect($dbName)
    {
        self::$connection = new mysqli('localhost', 'yosra', '123456', $dbName);
    }
    public static function getConnection()
    {
        return self::$connection;
    }
}
