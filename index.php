<?php
session_start();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'login';
}

switch ($page) {
    case 'login':
        include 'views/login.php';
        break;
    case 'dashboard':
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?page=login');
        } else {
            include 'views/dashboard.php';
        }
        break;
    default:
        include 'views/login.php';
        break;
}
?>
