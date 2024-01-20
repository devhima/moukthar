<?php

namespace C2;

use PDO;

/**
 * Database adapter
 */
class Database
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new \PDO(
                "mysql:host=". $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASSWORD']
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $exception) {
            throw $exception;
        }

    }

    public function insert(): void
    {

    }


    /**
     * Select data from database
     * 
     * @param string $query
     * @param array $data
     * 
     * @return array
     */
    public function select(string $query, array $data): array
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($data);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

    public function update(): void
    {
        
    }

    public function delete(): void
    {

    }
}