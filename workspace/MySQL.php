<?php
  class Database {
    public static function initDB() {
        $db_host = '127.0.0.1';
        $db_name = 'c9';
        $username = 'john777';
        $password = '';
        $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
        $db = new PDO($dsn, $username, $password);
        return $db;
    }
}
?>