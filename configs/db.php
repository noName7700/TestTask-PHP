<?php
class DB {
    const USER = "root";
    const PASSWORD = "";
    const HOST = "127.0.0.1";
    const DB_NAME = "urls";

    public static function db_connect() {
        $user = self::USER;
        $pass = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB_NAME;

        return mysqli_connect($host, $user, $pass, $db);
    }
}