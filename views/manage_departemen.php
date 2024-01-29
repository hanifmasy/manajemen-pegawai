<?php
require_once '../controllers/DepartemenController.php';

$departemenController = new DepartemenController();

if (isset($_POST['addDepartemen'])) {
    $name = $_POST['name'];
    $departemenController->addDepartemen($name);
}

if (isset($_POST['updateDepartemen'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $departemenController->updateDepartemen($id, $name);
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $departemenController->deleteDepartemen($id);
}

$departemen = $departemenController->getAllDepartemen();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Departemen</title>
</head>
<body>
    <h2>Manage Departemen</h2>

    <!-- Form: Add Departemen -->
    <form method="post">
        <label for="name">Nama Departemen:</label>
        <input type="text" name="name" required>
        <button type="submit" name="addDepartemen">Add Departemen</button>
    </form>

    <!-- Lis Departemen -->
    <h3>Lis Departemen:</h3>
    <ul>
        <?php foreach ($departemen as $departemen): ?>
            <li>
                <?php echo $departemen['name']; ?>
                <a href="manage_departemen.php?action=delete&id=<?php echo $departemen['id']; ?>">Delete</a>
                <a href="manage_departemen.php?action=edit&id=<?php echo $departemen['id']; ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
    // Form: Edit Departemen
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
        $departemenId = $_GET['id'];
        $departemen = $departemenController->getDepartemenById($departemenId);
        ?>
        <h3>Edit Departemen:</h3>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $departemen['id']; ?>">
            <label for="name">Nama Departemen:</label>
            <input type="text" name="name" value="<?php echo $departemen['name']; ?>" required>
            <button type="submit" name="updateDepartemen">Update Departemen</button>
        </form>
    <?php } ?>
</body>
</html>
