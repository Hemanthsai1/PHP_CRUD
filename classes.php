<?php
include 'db.php';

// Handle add class
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sql = "INSERT INTO classes (name) VALUES ('$name')";
    $conn->query($sql);
    header('Location: classes.php');
}

// Handle delete class
if (isset($_GET['delete'])) {
    $class_id = $_GET['delete'];
    $sql = "DELETE FROM classes WHERE class_id = $class_id";
    $conn->query($sql);
    header('Location: classes.php');
}

// Fetch all classes
$class_result = $conn->query("SELECT * FROM classes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Classes</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Manage Classes</h2>
    <form method="POST">
        <div class="form-group">
            <label>Class Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Class</button>
    </form>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Class Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($class = $class_result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $class['class_id'] ?></td>
                    <td><?= $class['name'] ?></td>
                    <td>
                        <a href="index.php" class="btn btn-primary">Back to Student List</a>
                        <a href="?delete=<?= $class['class_id'] ?>" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
