<?php
class User extends Database {
    public function authenticate($username, $password) {
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }
}
?>
