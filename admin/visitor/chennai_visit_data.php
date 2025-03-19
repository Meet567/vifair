<?php
session_start();
require '../includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $designation = $_POST['designation'] ?? '';
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $city = $_POST['city'] ?? '';

    $errors = [];
    $old_input = $_POST; // Store old input

    // ✅ Sanitize and validate email
    $email = trim($_POST['email'] ?? '');
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "❌ Error: Invalid email address.";
    }

    // ✅ Sanitize and validate phone (only digits, 10 digits, starts with 6-9)
    $phone = trim($_POST['phone'] ?? '');
    if (empty($phone) || !ctype_digit($phone) || strlen($phone) !== 10 || !preg_match('/^[6-9]/', $phone)) {
        $errors['phone'] = "❌ Error: Invalid phone number. It must be 10 digits and start with 6-9.";
    }

    // ✅ Redirect back if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input; // Store input values
        header("Location: ../../chennai_visit_reg.php"); // Redirect to the form
        exit;
    }

    // ✅ Insert into database
    $sql = "INSERT INTO chennai_visit_data (name, company, designation, phone, email, city) 
            VALUES ('$name', '$company', '$designation', '$phone', '$email', '$city')";

    if (mysqli_query($conn, $sql)) {
        $visitor_id = mysqli_insert_id($conn); // Get last inserted ID
        
        // ✅ Redirect immediately (faster)
        header("Location: ../../chennai_visit_reg.php?visitor_id=" . $visitor_id);
        exit;
    } else {
        $_SESSION['error'] = "Database error. Please try again.";
        header("Location: ../../chennai_visit_reg.php");
        exit;
      }
}

?>