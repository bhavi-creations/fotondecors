<?php
// Database connection
include '../../db.connection/db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $project_type = $_POST['project_type']; // Get project type
    $image = $_FILES['image'];

    // Validate project type
    if (!in_array($project_type, ['completed', 'ongoing'])) {
        die("Invalid project type selected.");
    }

    // Validate and upload the image
    $upload_dir = "uploads/images/";
    $image_name = basename($image['name']);
    $target_path = $upload_dir . $image_name;

    if (move_uploaded_file($image['tmp_name'], $target_path)) {
        // Insert image details into the database
        $sql = "INSERT INTO project_images (project_type, image_path) VALUES ('$project_type', '$target_path')";
        if ($conn->query($sql)) {
            // Redirect to index.php after successful upload
            header("Location: index.php");
            exit();
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}
$conn->close();
?>
