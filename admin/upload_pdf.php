<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1);

include '../include/db.php'; // Ensure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["pdf_file"])) {
    $file_name = $_FILES["pdf_file"]["name"];
    $file_tmp = $_FILES["pdf_file"]["tmp_name"];

    // Correct the upload directory path
    $upload_dir = __DIR__ . "/../uploads/"; // Use proper concatenation

    // Ensure upload directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
    }

    $file_path = $upload_dir . basename($file_name);

    // Move uploaded file to the server directory
    if (move_uploaded_file($file_tmp, $file_path)) {
        // Store file details in the database (relative path)
        $relative_path = "uploads/" . basename($file_name); // Relative path for web access
        $sql = "INSERT INTO pdf_files (file_name, file_path) VALUES ('$file_name', '$relative_path')";
        if (mysqli_query($conn, $sql)) {
            echo "✅ PDF uploaded successfully!";
        } else {
            echo "❌ Database error: " . mysqli_error($conn);
        }
    } else {
        echo "❌ File upload failed!";
    }
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="pdf_file" required>
    <button type="submit">Upload PDF</button>
</form>