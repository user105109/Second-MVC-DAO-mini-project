<?php
namespace App\Models;
use PDO;

 class Connection {
    protected static $db;

    public static function connect() {
        $dsn = "mysql:host=localhost;dbname=voitures;";
        $user = "root";
        $pass = "ZouhairDev2026";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        if (is_null(static::$db)) {
            static::$db = new PDO($dsn, $user, $pass, $options);
        }

        return static::$db;
    }

}