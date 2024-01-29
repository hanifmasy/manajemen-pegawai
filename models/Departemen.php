<?php
require_once 'Database.php';

class Departemen extends Database {
    public function getAllDepartemen() {
        $query = "SELECT * FROM departemen";
        $result = $this->connection->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getDepartemenById($id) {
        $query = "SELECT * FROM departemen WHERE id = $id";
        $result = $this->connection->query($query);

        return $result->fetch_assoc();
    }

    public function addDepartemen($name) {
        $query = "INSERT INTO departemen (name) VALUES ('$name')";
        return $this->connection->query($query);
    }

    public function updateDepartemen($id, $name) {
        $query = "UPDATE departemen SET name = '$name' WHERE id = $id";
        return $this->connection->query($query);
    }

    public function deleteDepartemen($id) {
        $query = "DELETE FROM departemen WHERE id = $id";
        return $this->connection->query($query);
    }
}
?>
