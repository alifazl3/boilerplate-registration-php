<?php

class Database {
    private $host = 'db';
    private $db   = 'database';
    private $user = 'root';
    private $pass = 'example';
    private $charset = 'utf8mb4';

    public function connect() {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
