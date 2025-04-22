<?php

class Database
{
    private static $pdo = null;
    private static $config = [];

    public static function setConfig($config)
    {
        self::$config = $config;
    }

    public static function getConnection()
    {
        if (self::$pdo === null) {
            $dsn = 'mysql:host=' . self::$config['host'] . ';dbname=' . self::$config['dbname'] . ';charset=' . self::$config['charset'];
            try {
                self::$pdo = new PDO($dsn, self::$config['user'], self::$config['password'], [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
