<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $connection = null;

    private function __construct() {}
    private function __clone() {}

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {

            $config = require '../config/database.php';

            $dsn = sprintf(
                "%s:host=%s;dbname=%s;charset=%s",
                $config['driver'],
                $config['host'],
                $config['dbname'],
                $config['charset']
            );

            try {
                self::$connection = new PDO(
                    $dsn,
                    $config['user'],
                    $config['pass'],
                    $config['options']
                );
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
