<?php
session_start();
require '../includes/db.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $designation = trim($_POST['designation'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $city = trim($_POST['city'] ?? '');

    $errors = [];
    $old_input = $_POST; // Store old input

    // ✅ Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "❌ Error: Invalid email address.";
    }

    // ✅ Validate phone (only digits, 10 digits, starts with 6-9)
    if (empty($phone) || !ctype_digit($phone) || strlen($phone) !== 10 || !preg_match('/^[6-9]/', $phone)) {
        $errors['phone'] = "❌ Error: Invalid phone number. It must be 10 digits and start with 6-9.";
    }

    // ✅ Redirect back if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input;
        header("Location: ../../delhi_visit_reg.php");
        exit;
    }

    // ✅ Secure SQL Insert using Prepared Statements
    $sql = "INSERT INTO delhi_visit_data (name, company, designation, phone, email, city) 
            VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $company, $designation, $phone, $email, $city);
        
        if (mysqli_stmt_execute($stmt)) {
            $visitor_id = mysqli_insert_id($conn);
            mysqli_stmt_close($stmt);
            header("Location: ../../delhi_visit_reg.php?visitor_id=" . $visitor_id);
            exit;
        } else {
            $_SESSION['error'] = "❌ Database error. Please try again.";
        }
    } else {
        $_SESSION['error'] = "❌ Failed to prepare SQL statement.";
    }

    header("Location: ../../delhi_visit_reg.php");
    exit;
}

// deleted Functionality
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']); // Ensure the ID is an integer
    echo "<script>console.log('Delete ID: " . $delete_id . "');</script>"; // Debugging

    if ($delete_id > 0) { // Validate the ID
        $stmt = $conn->prepare("DELETE FROM delhi_visit_data  WHERE id = ?");
        $stmt->bind_param("i", $delete_id);

        if ($stmt->execute()) {
            echo "<script>console.log('Record deleted successfully');</script>";
            echo "<script>alert('Record deleted successfully');</script>";
            header("Location: ../tables/delhi_visit_table.php"); // Redirect to the same page
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
// Fetch total visitor count
$query = "SELECT COUNT(*) AS total_visitors FROM delhi_visit_data";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$total_visitors = $row['total_visitors'];
?>


