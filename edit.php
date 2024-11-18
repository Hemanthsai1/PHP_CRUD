<?php
include 'db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch student data
    $query = "SELECT * FROM student WHERE id = $id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "<script>alert('Student not found!'); window.location.href='index.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Invalid ID!'); window.location.href='index.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $class_id = $_POST['class_id'];
    $new_image = $_FILES['image'];

    // Check if the email already exists in the same class (excluding this student)
    $query = "SELECT * FROM student WHERE email = '$email' AND class_id = $class_id AND id != $id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<script>alert('The email is already being used in this class.'); window.location.href='edit.php?id=$id';</script>";
        exit;
    }

    // Handle image upload if a new image is provided
    if (!empty($new_image['name'])) {
        $target_dir = "uploads/";
        $image_name = time() . '_' . basename($new_image["name"]);
        $target_file = $target_dir . $image_name;
        move_uploaded_file($new_image["tmp_name"], $target_file);

        // Update student with the new image
        $sql = "UPDATE student SET name = '$name', email = '$email', address = '$address', class_id = $class_id, image = '$image_name' WHERE id = $id";
    } else {
        // Update student without changing the image
        $sql = "UPDATE student SET name = '$name', email = '$email', address = '$address', class_id = $class_id WHERE id = $id";
    }

    $conn->query($sql);
    header('Location: index.php');
}

// Fetch classes
$class_result = $conn->query("SELECT * FROM classes");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?= $student['name'] ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $student['email'] ?>" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control"><?= $student['address'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class_id" class="form-control" required>
                <?php while ($class = $class_result->fetch_assoc()) { ?>
                    <option value="<?= $class['class_id'] ?>" <?= $class['class_id'] == $student['class_id'] ? 'selected' : '' ?>>
                        <?= $class['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <small>
                <?php
                // Check if the student has an image
                if (!empty($student['image'])) {
                    echo "Current Image: " . htmlspecialchars($student['image']);
                } else {
                    echo "Current Image: Nothing";
                }
                ?>
            </small>
        </div><br>
        <a href="index.php" class="btn btn-primary">Back to Student List</a>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
