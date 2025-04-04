<?php

class Qna_ {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Táto metóda načíta všetky otázky a odpovede z tabuľky 'qna'
    public function getAllQnA() {
        $sql = "SELECT question, answer FROM qna";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }

    
}
