<?php
// Include the database connection
include('db.php');

// Fetch all students with their associated class name
$query = "SELECT student.id, student.name, student.email, student.image, classes.name AS class_name
          FROM student
          JOIN classes ON student.class_id = classes.class_id";
$result = $conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> <!-- Make sure the path is correct -->
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Students List</title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Students</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['class_name'] . "</td>
                            <td><img src='uploads/" . $row['image'] . "' alt='Student Image' width='50'></td>
                            <td>
                                <a href='view.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>View</a>
                                <a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No students found</td></tr>";
            }
            ?>
        </tbody>
    </table><br>
    <a href="create.php" class="btn btn-success">Add New Student</a>
    <a href="classes.php" class="btn btn-primary">Manage Classes</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
