<?php

class Database
{
    private string $user = 'root';
    private string $pass = '';
    private string $host = 'localhost';
    private string $dbname = 'exo198';
    private string $charset = 'utf8';

    private static PDO $dbInstance;

    public function __construct()
    {
        try {
            self::$dbInstance = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->user, $this->pass);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return PDO|null
     */
    public static function getInstance(): ?PDO
    {
        if (is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }
}