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

    //  Validate required fields
    if (empty($name)) {
        $errors['name'] = "Error: Name is required.";
    }
    if (empty($company)) {
        $errors['company'] = "Error: Company name is required.";
    }
    if (empty($designation)) {
        $errors['designation'] = "Error: Designation is required.";
    }
    if (empty($city)) {
        $errors['city'] = "Error: City is required.";
    }

    //  Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Error: Invalid email address.";
    }

    //  Validate phone (only digits, 10 digits, starts with 6-9)
    if (empty($phone) || !ctype_digit($phone) || strlen($phone) !== 10 || !preg_match('/^[6-9]/', $phone)) {
        $errors['phone'] = "Error: Invalid phone number. It must be 10 digits and start with 6-9.";
    }

    //  Redirect back if validation fails
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_input'] = $old_input; // Store input values
        header("Location: ../../chennai_visit_reg.php");
        exit;
    }

    //  Insert into database using prepared statements
    $stmt = $conn->prepare("INSERT INTO chennai_visit_data (name, company, designation, phone, email, city) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $company, $designation, $phone, $email, $city);

    if ($stmt->execute()) {
        $visitor_id = $stmt->insert_id;
        $stmt->close();
        header("Location: ../../chennai_visit_reg.php?visitor_id=" . $visitor_id);
        exit;
    } else {
        $_SESSION['error'] = "Database error. Please try again.";
        header("Location: ../../chennai_visit_reg.php");
        exit;
    }
}

//  Delete Functionality
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']); // Ensure the ID is an integer

    if ($delete_id > 0) { // Validate the ID
        $stmt = $conn->prepare("DELETE FROM chennai_visit_data WHERE id = ?");
        $stmt->bind_param("i", $delete_id);

        if ($stmt->execute()) {
            $stmt->close();
            $_SESSION['success'] = "Record deleted successfully.";
            header("Location: ../tables/chennai_visit_table.php");
            exit();
        } else {
            $_SESSION['error'] = "Error deleting record.";
            header("Location: ../tables/chennai_visit_table.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid record ID.";
        header("Location: ../tables/chennai_visit_table.php");
        exit();
    }
}
?>
