<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'admin/includes/db.php'; // Ensure this path is correct

// Fetch PDF files from the database
$sql = "SELECT * FROM pdf_files ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $sql);
?>