<?php

declare(strict_types=1);

namespace core;

use PDO;
use PDOException;

class Connection
{
    public static ?PDO $pdo = null;

    private function __construct() {}

    private static function connect(): ?PDO
    {

        $host = $_ENV['DB_HOST'] ?? 'mysql:3306';
        $db = $_ENV['DB_NAME'] ?? 'app_dev';
        $user = $_ENV['DB_USER'] ?? 'root';
        $pass = $_ENV['DB_PASS'] ?? 'root';
        $charset = $_ENV['CHARSET'] ?? 'utf8mb4';

        $dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $erro) {
            // Handle failures cleanly without leaking sensitive details like passwords]
            dd($erro->getMessage());
            throw new PDOException($erro->getMessage(), (int) $erro->getCode());
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
