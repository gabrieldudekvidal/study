<?php

class Signup extends Dbh { // Setting the Dbh as parent class and Signup as child
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    // Method
    private function insertUser() {
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->password);
        $stmt->execute();
    }

    // Methods to check errors

    private function isEmptySubmit() {
        if (isset($this->username) && isset($this->password)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser() {
        // Error handlers
        if ($this->isEmptySubmit()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . "/index.php");
            die();
        }

        // If no errors, signup user
        $this->insertUser();

    }


}