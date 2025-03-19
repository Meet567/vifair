<?php
session_start();
require '../includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
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
// deleted Functionality
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']); // Ensure the ID is an integer
    echo "<script>console.log('Delete ID: " . $delete_id . "');</script>"; // Debugging

    if ($delete_id > 0) { // Validate the ID
        $stmt = $conn->prepare("DELETE FROM chennai_visit_data  WHERE id = ?");
        $stmt->bind_param("i", $delete_id);

        if ($stmt->execute()) {
            echo "<script>console.log('Record deleted successfully');</script>";
            echo "<script>alert('Record deleted successfully');</script>";
            header("Location: ../tables/chennai_visit_table.php"); // Redirect to the same page
            exit();
        } else {
            echo "<script>console.error('Error deleting record: " . $stmt->error . "');</script>";
            echo "<script>alert('Error deleting record: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Invalid record ID');</script>";
    }
} else {
    echo "<script>console.log('Delete ID not set');</script>"; // Debugging
}

?>