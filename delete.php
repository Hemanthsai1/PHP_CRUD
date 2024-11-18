<?php
// Include the database connection
include('db.php');

// Handle DELETE request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $student_id = $_POST['id'];

    // Fetch the student's image file path
    $query = "SELECT image FROM student WHERE id = $student_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();

        // Delete the image from the server
        if (!empty($student['image']) && file_exists("uploads/" . $student['image'])) {
            unlink("uploads/" . $student['image']);
        }

        // Delete the student from the database
        $delete_query = "DELETE FROM student WHERE id = $student_id";
        if ($conn->query($delete_query)) {
            // Redirect to the home page after deletion
            header("Location: index.php");
            exit;
        } else {
            echo "Error deleting the student: " . $conn->error;
            exit;
        }
    } else {
        echo "Student not found!";
        exit;
    }
}

// Display confirmation form (GET request)
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = $_GET['id'];

    // Fetch the student details including class name
    $query = "SELECT student.id, student.name, student.email, student.address, student.image, classes.name AS class_name
              FROM student
              JOIN classes ON student.class_id = classes.class_id
              WHERE student.id = $student_id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        echo "Student not found!";
        exit;
    }
} else {
    echo "Invalid student ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Delete Student</title>

    <style>
        .confirmation-box {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
            max-width: 600px;
            margin: auto;
        }
        .confirmation-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .student-details-box {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .student-image {
            width: 120px;
            height: 120px;
            border-radius: 20%;
            object-fit: cover;
            margin-left: 10px;
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="confirmation-box">
            <h2>Are you sure you want to delete this student?</h2>
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h3 style="margin-bottom: 0;"><?php echo htmlspecialchars($student['name']); ?></h3>
                <img src="uploads/<?php echo htmlspecialchars($student['image']); ?>" 
                     alt="Student Image" 
                     class="student-image">
            </div>
            <div class="student-details-box">
                <p><strong>Email:</strong> <?php echo htmlspecialchars($student['email']); ?></p>
                <p><strong>Class:</strong> <?php echo htmlspecialchars($student['class_name']); ?></p>
                <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($student['address'])); ?></p>
            </div>
            <div class="btn-container">
                <form action="delete.php" method="POST" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>
                <a href="index.php" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</body>
</html>
