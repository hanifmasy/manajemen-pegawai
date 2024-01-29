<?php
require_once 'Database.php';

class Pegawai extends Database {
    public function getAllPegawai() {
        $query = "SELECT * FROM pegawai";
        $result = $this->connection->query($query);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPegawaiById($id) {
        $query = "SELECT * FROM pegawai WHERE id = $id";
        $result = $this->connection->query($query);

        return $result->fetch_assoc();
    }

    public function addPegawai($name, $role) {
        $query = "INSERT INTO pegawai (name, role) VALUES ('$name', '$role')";
        return $this->connection->query($query);
    }

    public function updatePegawai($id, $name, $role) {
        $query = "UPDATE pegawai SET name = '$name', role = '$role' WHERE id = $id";
        return $this->connection->query($query);
    }

    public function deletePegawai($id) {
        $query = "DELETE FROM pegawai WHERE id = $id";
        return $this->connection->query($query);
    }
}
?>
