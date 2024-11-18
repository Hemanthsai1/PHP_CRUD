# School Management System

## Description

This is a PHP-based School Management System where you can manage students and their respective classes. The functionalities include adding, editing, viewing, and deleting students, as well as managing classes.

## Features

Add Student: You can add a new student with details like name, email, address, class, and image.
View Student: You can view the details of any student, including their class and image.
Edit Student: You can edit the details of an existing student, including their image and class.
Delete Student: You can delete a student from the database.
Manage Classes: You can add, edit, and delete classes.

## Prerequisites

To run this project, you'll need to have the following software installed:

PHP (Recommended: PHP 7.4 or higher)
MySQL (or MariaDB)
XAMPP/WAMP/MAMP for local development (Includes PHP, MySQL, and Apache server)
VS Code (or any other code editor)

## Installation

### Step 1: Clone the repository

```bash
git clone <repository-url>


Step 2: Set up the environment
Install XAMPP (or MAMP/WAMP) on your computer.
Place the project folder inside the htdocs folder (for XAMPP) or the appropriate folder for other environments.
Open the XAMPP control panel and start the Apache and MySQL services.


Step 3: Set up the database
Open phpMyAdmin (usually at http://localhost/phpmyadmin/).
Create a new database named school_db.
Run the following SQL queries to create the necessary tables:
sql

CREATE TABLE classes (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT,
    class_id INT,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (class_id) REFERENCES classes(class_id)
);
Optionally, you can insert some sample data into the classes table:
sql

INSERT INTO classes (name) VALUES ('Class 1'), ('Class 2'), ('Class 3');



Step 4: Configure Database Connection
Ensure that the database connection in the db.php file is configured correctly:

php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


Step 5: Run the Application
Open your browser and go to http://localhost/school_demo/ (replace school_demo with the actual folder name if needed).
You should see the homepage with a list of students and options to manage them.
Project Structure
bash

school_demo/
├── db.php               # Database connection
├── index.php            # Home page listing all students
├── create.php           # Form to add a new student
├── view.php             # View details of a student
├── edit.php             # Edit student details
├── delete.php           # Delete student
├── classes.php          # Manage classes (add/edit/delete)
├── uploads/             # Folder for storing uploaded student images
├── css/
│   └── style.css        # Custom styles for the app
└── README.md            # Project documentation
Known Issues
No image validation for file size or dimensions (to be added if necessary).
Limited styling; you can improve the UI as needed.

License
This project is open-source and can be modified as per your needs. No official license is applied.

```
