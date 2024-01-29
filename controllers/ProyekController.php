<?php
require_once '../models/Proyek.php';

class ProyekController {
    public function getAllProyek() {
        $proyekModel = new Proyek();
        return $proyekModel->getAllProyek();
    }

    public function getProyekById($id) {
        $proyekModel = new Proyek();
        return $proyekModel->getProyekById($id);
    }

    public function addProyek($name) {
        $proyekModel = new Proyek();
        return $proyekModel->addProyek($name);
    }

    public function updateProyek($id, $name) {
        $proyekModel = new Proyek();
        return $proyekModel->updateProyek($id, $name);
    }

    public function deleteProyek($id) {
        $proyekModel = new Proyek();
        return $proyekModel->deleteProyek($id);
    }
}
?>
