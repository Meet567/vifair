<?php
// Database connection
include("../includes/db.php");

// Handle Image Upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $imageName = basename($_FILES["image"]["name"]);
    $targetDir = "../../assets/images/gallery/";
    $targetFile = $targetDir . $imageName;
    $category_id = $conn->real_escape_string($_POST["category"]);
    $subcategory_id = $conn->real_escape_string($_POST["subcategory"]);

    // Ensure the uploads directory exists
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $sql = "INSERT INTO gallery (img, category_id, subcategory_id) VALUES ('$targetFile', '$category_id', '$subcategory_id')";
        if ($conn->query($sql)) {
            echo "<script>alert('✅ Image uploaded successfully!');</script>";
        } else {
            echo "<script>alert('❌ Error: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('❌ Failed to upload image.');</script>";
    }
}

// Handle Image Deletion
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $sql = "DELETE FROM gallery WHERE id='$id'";
    if ($conn->query($sql)) {
        echo "<script>alert('✅ Image deleted successfully!');</script>";
    } else {
        echo "<script>alert('❌ Error deleting image: " . $conn->error . "');</script>";
    }
}

// Fetch images
$filterCategory = isset($_GET['filter_category']) ? $_GET['filter_category'] : "";
$filterSubcategory = isset($_GET['filter_subcategory']) ? $_GET['filter_subcategory'] : "";
$sql = "SELECT g.*, c.name AS category, s.name AS subcategory 
        FROM gallery g
        JOIN categories c ON g.category_id = c.id
        JOIN subcategories s ON g.subcategory_id = s.id
        WHERE 1=1";

if ($filterCategory) $sql .= " AND c.id='$filterCategory'";
if ($filterSubcategory) $sql .= " AND s.id='$filterSubcategory'";

// Debugging: Print the SQL query
// echo "SQL Query: $sql<br>";

$result = $conn->query($sql);
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Image Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Admin Panel - Manage Gallery</h2>

    <!-- Upload Form -->
    <form method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Choose Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Select Category</label>
            <select name="category" class="form-select" required>
                <?php
                $catResult = $conn->query("SELECT * FROM categories");
                while ($cat = $catResult->fetch_assoc()) {
                    echo "<option value='" . $cat['id'] . "'>" . $cat['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Select Subcategory</label>
            <select name="subcategory" class="form-select" required>
                <?php
                $subcatResult = $conn->query("SELECT * FROM subcategories");
                while ($subcat = $subcatResult->fetch_assoc()) {
                    echo "<option value='" . $subcat['id'] . "'>" . $subcat['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <!-- Gallery Table -->
    <h3>Uploaded Images</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><img src="<?php echo $row["img"]; ?>" width="100"></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["subcategory"]; ?></td>
                <td>
                    <a href="?delete=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
