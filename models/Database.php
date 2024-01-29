<?php
class Database {
    private $host = '127.0.0.1';
    private $username = 'username';
    private $password = 'password';
    private $database = 'database';

    protected $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
}
?>
