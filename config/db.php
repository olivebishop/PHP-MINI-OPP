<?php
class DatabaseConnection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "foodiedb";

    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            echo "Error connecting to the database: " . $this->connection->connect_error;
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
