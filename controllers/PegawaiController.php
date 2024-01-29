<?php
require_once '../models/Pegawai.php';

class PegawaiController {
    public function getAllPegawai() {
        $pegawaiModel = new Pegawai();
        return $pegawaiModel->getAllPegawai();
    }

    public function getPegawaiById($id) {
        $pegawaiModel = new Pegawai();
        return $pegawaiModel->getPegawaiById($id);
    }

    public function addPegawai($name, $role) {
        $pegawaiModel = new Pegawai();
        return $pegawaiModel->addPegawai($name, $role);
    }

    public function updatePegawai($id, $name, $role) {
        $pegawaiModel = new Pegawai();
        return $pegawaiModel->updatePegawai($id, $name, $role);
    }

    public function deletePegawai($id) {
        $pegawaiModel = new Pegawai();
        return $pegawaiModel->deletePegawai($id);
    }
}
?>
