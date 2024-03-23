<?php

class DatabaseConnection {
    private $host;
    private $user;
    private $pass;
    private $database;

    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->database = "uni";
    }

    public function connect() {
        $cn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if ($cn->connect_error) {
            throw new Exception("Connection failed: " . $cn->connect_error);
        }
        return $cn;
    }
}
?>