<?php
require_once 'Connect.php';
class UserRepository {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }
    public function signup($username, $password) {
        // First, check if the user already exists
        $checkStmt = $this->connection->prepare("SELECT * FROM users WHERE username = ?");
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $result = $checkStmt->get_result();

        if ($result->num_rows > 0) {
            // User already exists
            return false;
        }

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // If user doesn't exist, proceed with the insertion
        $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
        return $stmt->execute();
    }

    public function signin($username, $password) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        // Verify the password with the hashed password in the database
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
