<?php
require_once 'Database.php';

class Proyek extends Database {
    public function getAllProyek() {
        $query = "SELECT * FROM proyek";
        $result = $this->connection->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProyekById($id) {
        $query = "SELECT * FROM proyek WHERE id = $id";
        $result = $this->connection->query($query);

        return $result->fetch_assoc();
    }

    public function addProyek($name) {
        $query = "INSERT INTO proyek (name) VALUES ('$name')";
        return $this->connection->query($query);
    }

    public function updateProyek($id, $name) {
        $query = "UPDATE proyek SET name = '$name' WHERE id = $id";
        return $this->connection->query($query);
    }

    public function deleteProyek($id) {
        $query = "DELETE FROM proyek WHERE id = $id";
        return $this->connection->query($query);
    }
}
?>
