<?php

class QnA {
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

    /*
    // Táto metóda vkladá otázku a odpoveď do tabuľky 'qna' (aktuálne zakomentovaná)
    public function insertQnA($question, $answer) {
        $stmt = $this->conn->prepare("INSERT INTO qna (question, answer) VALUES (?, ?)");
        $stmt->bind_param("ss", $question, $answer); aa
        $stmt->execute();
        $stmt->close();
    }
    */
}
