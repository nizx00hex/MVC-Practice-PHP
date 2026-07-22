<?php
class Student {

    private PDO $connection;
    
    public function __construct() {
        $database = new Database();
        $this->connection = $database->getConnection();
    }

    public function getAll(): array {
        // $sql = 'SELECT id, name, course, create_at FROM students ORDER BY id DESC';
        $sql = 'SELECT id, name, course, create_at FROM students ORDER BY id';


        $stmt = $this->connection->query($sql);

        return $stmt->fetchAll();
    }

}