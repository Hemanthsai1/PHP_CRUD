<?php
// Include the database connection
include('db.php');

// Check if ID is passed in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = $_GET['id'];

    // Fetch the student details including class name
    $query = "SELECT student.id, student.name, student.email, student.address, student.image, student.created_at, classes.name AS class_name
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>View Student</title>

    <style>
        .student-details-box {
            border: 1px solid #ddd;  /* Border around the details */
            padding: 15px;            /* Padding for better spacing */
            border-radius: 10px;      /* Rounded corners */
            margin-top: 20px;  
            margin-bottom: 20px       /* Space between image and details */
        }

        .student-details-box p {
            margin: 5px 0;  /* Adds space between each detail */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Student Details</h2>
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <!-- Student Name -->
                    <h3 class="card-title" style="margin-bottom: 0;"><?php echo htmlspecialchars($student['name']); ?></h3>
                    
                    <!-- Student Image -->
                    <img src="uploads/<?php echo htmlspecialchars($student['image']); ?>" 
                         alt="Student Image" 
                         style="width: 120px; height: 120px; border-radius: 20%; object-fit: cover; margin-left: 10px;">
                </div>

                <!-- Student Details with a Box around -->
                <div class="student-details-box">
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($student['email']); ?></p>
                    <p><strong>Class:</strong> <?php echo htmlspecialchars($student['class_name']); ?></p>
                    <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($student['address'])); ?></p>
                    <p><strong>Created At:</strong> <?php echo htmlspecialchars(isset($student['created_at']) ? $student['created_at'] : 'N/A'); ?></p>
                </div>

                <!-- Back Button -->
                <a href="index.php" class="btn btn-primary">Back to Student List</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
