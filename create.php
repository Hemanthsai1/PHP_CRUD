<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $class_id = $_POST['class_id'];
    $image = $_FILES['image'];

    $query = "SELECT * FROM student WHERE email = '$email' AND class_id = $class_id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        echo "<script>alert('The email is already being used in this class.'); window.location.href='create.php';</script>";
        exit;
    }

    // Image upload
    $target_dir = "uploads/";
    $image_name = time() . '_' . basename($image["name"]);
    $target_file = $target_dir . $image_name;

    if (!empty($image["name"])) {
        move_uploaded_file($image["tmp_name"], $target_file);
    } else {
        $image_name = null; // If no image is uploaded
    }

    // Insert student
    $sql = "INSERT INTO student (name, email, address, class_id, image) 
            VALUES ('$name', '$email', '$address', $class_id, '$image_name')";
    $conn->query($sql);

    header('Location: index.php');
}

// Fetch classes
$class_result = $conn->query("SELECT * FROM classes");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Add Student</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class_id" class="form-control" required>
                <?php while ($class = $class_result->fetch_assoc()) { ?>
                    <option value="<?= $class['class_id'] ?>"><?= $class['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div><br><br>
        <a href="index.php" class="btn btn-primary">Back to Student List</a>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>
