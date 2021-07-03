<?php

namespace src\database;

class Connection {
    private static $instance;

    public static function getConnection() {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=rgb_gallery; charset=utf8', 'root', '');
        }

        return self::$instance;
    }
}
