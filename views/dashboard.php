<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h2>
    <a href="../controllers/AuthController.php?logout=true">Logout</a>

    <h3>Menu:</h3>
    <ul>
        <li><a href="dashboard.php?page=manage_employees">Manage Employees</a></li>
        <li><a href="dashboard.php?page=manage_departments">Manage Departments</a></li>
        <li><a href="dashboard.php?page=manage_projects">Manage Projects</a></li>
    </ul>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = '';
    }

    switch ($page) {
        case 'manage_employees':
            include 'manage_employees.php';
            break;
        case 'manage_departments':
            include 'manage_departments.php';
            break;
        case 'manage_projects':
            include 'manage_projects.php';
            break;
        default:
            break;
    }
    ?>
</body>
</html>
