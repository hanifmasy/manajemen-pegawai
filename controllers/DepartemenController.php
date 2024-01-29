<?php
require_once '../models/Departemen.php';

class DepartemenController {
    public function getAllDepartemen() {
        $departemenModel = new Departemen();
        return $departemenModel->getAllDepartemen();
    }

    public function getDepartemenById($id) {
        $departemenModel = new Departemen();
        return $departemenModel->getDepartemenById($id);
    }

    public function addDepartemen($name) {
        $departemenModel = new Departemen();
        return $departemenModel->addDepartemen($name);
    }

    public function updateDepartemen($id, $name) {
        $departemenModel = new Departemen();
        return $departemenModel->updateDepartemen($id, $name);
    }

    public function deleteDepartemen($id) {
        $departemenModel = new Departemen();
        return $departemenModel->deleteDepartemen($id);
    }
}
?>
