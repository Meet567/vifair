<?php
// clear_cache.php
session_start();

// Check if the user is logged in and has admin privileges
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access.");
}

// Define the cache directory
$cacheDir = __DIR__ . '/cache/'; // Adjust the path to your cache directory

// Check if the cache directory exists
if (!is_dir($cacheDir)) {
    die("Cache directory not found.");
}

// Delete all files in the cache directory
$files = glob($cacheDir . '*'); // Get all files in the cache directory
foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file); // Delete the file
    }
}

// Optionally, you can also clear specific cache files or directories
// Example: Clear a specific cache file
// $specificCacheFile = __DIR__ . '/cache/specific_file.cache';
// if (file_exists($specificCacheFile)) {
//     unlink($specificCacheFile);
// }

// Return a success message
echo json_encode(['status' => 'success', 'message' => 'Cache cleared successfully.']);
exit;

?>
