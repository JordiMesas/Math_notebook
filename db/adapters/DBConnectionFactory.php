<?php

declare(strict_types=1);

include_once 'MySQLAdapter.php';

class DBConnectionFactory {

    private static $connection = null;

    public static function getConnection() {
        if (DBConnectionFactory::$connection == null) {
            DBConnectionFactory::$connection = new MySQLAdapter("127.0.0.1", 3306, "userdaw1", "Dejan10!", "cuaderno");
            if (strcmp(DBConnectionFactory::$connection->connect(), "done") != 0) {
               DBConnectionFactory::$connection = null; 
            }
        }
        return DBConnectionFactory::$connection;
    }
    
    private static function closeConnection() {
        DBConnectionFactory::$connection->closeConnection();
        DBConnectionFactory::$connection = null; 
    }

}
