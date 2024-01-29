<?php
require_once '../models/Database.php';
require_once '../models/User.php';

class AuthController {
    public function login($username, $password) {
        $userModel = new User();
        $user = $userModel->authenticate($username, $password);

        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: ../views/dashboard.php');
        } else {
            echo 'Invalid username or password';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ../views/login.php');
    }
}
?>
