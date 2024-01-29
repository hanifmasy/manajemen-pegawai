<?php
require_once '../controllers/PegawaiController.php';

$pegawaiController = new PegawaiController();

if (isset($_POST['addPegawai'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $pegawaiController->addPegawai($name, $role);
}

if (isset($_POST['updatePegawai'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $pegawaiController->updatePegawai($id, $name, $role);
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $pegawaiController->deletePegawai($id);
}

$pegawai = $pegawaiController->getAllPegawai();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Pegawai</title>
</head>
<body>
    <h2>Manage Pegawai</h2>

    <!-- Form: Add Pegawai  -->
    <form method="post">
        <label for="name">Nama Pegawai:</label>
        <input type="text" name="name" required>
        <label for="role">Role Pegawai:</label>
        <input type="text" name="role" required>
        <button type="submit" name="addPegawai">Add Pegawai</button>
    </form>

    <!-- Lis Pegawai -->
    <h3>Lis Pegawai:</h3>
    <ul>
        <?php foreach ($pegawai as $pegawai): ?>
            <li>
                <?php echo $pegawai['name']; ?> (<?php echo $pegawai['role']; ?>)
                <a href="manage_pegawai.php?action=delete&id=<?php echo $pegawai['id']; ?>">Delete</a>
                <a href="manage_pegawai.php?action=edit&id=<?php echo $pegawai['id']; ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <?php
    // Form: Edit Pegawai
    if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
        $pegawaiId = $_GET['id'];
        $pegawai = $pegawaiController->getPegawaiById($pegawaiId);
        ?>
        <h3>Edit Pegawai:</h3>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $pegawai['id']; ?>">
            <label for="name">Nama Pegawai:</label>
            <input type="text" name="name" value="<?php echo $pegawai['name']; ?>" required>
            <label for="role">Role Pegawai:</label>
            <input type="text" name="role" value="<?php echo $pegawai['role']; ?>" required>
            <button type="submit" name="updatePegawai">Update Pegawai</button>
        </form>
    <?php } ?>
</body>
</html>
