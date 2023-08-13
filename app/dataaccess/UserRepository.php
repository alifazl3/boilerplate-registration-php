<?php
require_once 'Connect.php';
class UserRepository {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function signup($username, $password) {
        $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES (?,  ?)");
        $stmt->bind_param("ss", $username,$password);
        return $stmt->execute();
    }

    public function signin($username, $password) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
