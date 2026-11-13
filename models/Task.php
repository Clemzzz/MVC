<?php
class Task {

    private $pdo;

    public function __construct() {
        $this->pdo = new PDO(
            'mysql:host=127.0.0.1;port=3307;dbname=mvc;charset=utf8mb4',
            'root',
            '',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }

    public function getAllTasks() {
        $stmt = $this->pdo->query('SELECT * FROM tasks');
        return $stmt->fetchAll();
    }

    public function getTaskById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM tasks WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $task = $stmt->fetch();

        return $task ?: null;
    }    
}