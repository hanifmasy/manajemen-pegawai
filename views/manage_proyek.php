<?php
require_once '../controllers/ProyekController.php';

$proyekController = new ProyekController();

if (isset($_POST['addProyek'])) {
    $name = $_POST['name'];
    $proyekController->addProyek($name);
}

if (isset($_POST['updateProyek'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $proyekController->updateProyek($id, $name);
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $proyekController->deleteProyek($id);
}

$proyek = $proyekController->getAllProyek();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Proyek</title>
</head>
<body>
    <h2>Manage Proyek</h2>

    <!-- Form: Add Proyek -->
    <form method="post">
        <label for="name">Nama Proyek:</label>
        <input type="text" name="name" required>
        <button type="submit" name="addProyek">Add Proyek</button>
    </form>

    <!-- Lis Proyek -->
    <h3>Lis Proyek:</h3>
    <ul>
        <?php foreach ($proyek as $proyek): ?>
            <li>
                <?php echo $proyek['name']; ?>
                <a href="manage_proyek.php?action=delete&id=<?php echo $proyek['id']; ?>">Delete</a>
                <a href="manage_proyek.php?action=edit&id=<?php echo $proyek['id']; ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
    // Form: Edit Proyek
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
        $proyekId = $_GET['id'];
        $proyek = $proyekController->getProyekById($proyekId);
        ?>
        <h3>Edit Proyek:</h3>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $proyek['id']; ?>">
            <label for="name">Nama Proyek:</label>
            <input type="text" name="name" value="<?php echo $proyek['name']; ?>" required>
            <button type="submit" name="updateProyek">Update Proyek</button>
        </form>
    <?php } ?>
</body>
</html>
