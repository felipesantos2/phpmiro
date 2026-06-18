<?php

namespace core\database;

use \PDO;
use \PDOException;


class Connection
{
    public static ?PDO $pdo = null;

    private static function connect(): ?PDO
    {
        $host    = 'localhost';
        $db      = 'your_database_name';
        $user    = 'your_username';
        $pass    = 'your_password';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throws exceptions on SQL errors
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,       // Fetches rows as objects of the specified class
            PDO::ATTR_EMULATE_PREPARES   => false,                  // Uses native prepared statements
        ];

        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $erro) {
            // Handle failures cleanly without leaking sensitive details like passwords]
            dd($erro);
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        return null;
    }

    public static function getConnection(): ?PDO
    {
        if (self::$pdo === null) {
            self::$pdo = self::connect();
        }

        return self::$pdo;
    }

    public static function close(): void
    {
        self::$pdo = null;
    }

}

