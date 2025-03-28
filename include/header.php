<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vibrant India Fair</title>
    <?php
    // Start output buffering
    ob_start();
    
    // Include common head section
    include_once "include/head_link.php";
    
    // Database connection with error handling
    include 'admin/includes/db.php';
    
    // Function to generate PDF links
    function generatePdfLinks($conn, $category, $linkText) {
        $sql = "SELECT file_path FROM pdf_files WHERE category = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $links = [];
            while ($row = $result->fetch_assoc()) {
                $filePath = htmlspecialchars($row['file_path']);
                // Use relative path instead of hardcoded localhost
                $links[] = "<li class='submenu-list-menu'>
                    <a class='drop-link-menubar' href='http://localhost/vifair/{$filePath}' target='_blank'>
                        {$linkText}
                    </a></li>";
            }
            return implode('', $links);
        } else {
            return "<li class='submenu-list-menu'><a class='drop-link-menubar'>No {$linkText} found</a></li>";
        }
    }
    ?>
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="main">
            <div class="navbar-main">
                <div class="header-logo">
                    <div class="logo-box">
                        <picture>
                            <a href="index.php">
                                <img src="assets/images/VIFair.png" alt="Vibrant India Fair Logo" loading="lazy">
                            </a>
                        </picture>
                    </div>
                </div>
                <div class="header-menubar-box" id="navLinks">
                    <ul class="menubar-unlist-box">
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Home</a>
                            <div class="dropdown-submenu">
                                 <div class="dropdown-subumenu-box">
                                    <ul class="submenu-unlist">
                                        <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Vibrant India Magazine</a></li>
                                        <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Vibrant India 2025</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="about_us.php">About Us</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="about_us.php">About Vibrant India</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">About Organizer</a></li>
                                    <?php echo generatePdfLinks($conn, 'report', 'Post Show Report'); ?>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="about.php">Show Highlights</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Exhibitors</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="why_exhibit.php">Why Exhibit</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="exhibitor_profile.php">Exhibitor Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Brochure</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Sponsorship Opportunity</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Participation Charges</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Floor Plan</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Directory Advertisement</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor inquiry</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Visitors</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="why_visit.php">Why Visit ?</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="visitor_profile.php">Visitor Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visiting Hours</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">General Facilities</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Gallery</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="gallery.php">Photo Gallery</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="video.php">Video Gallery</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Information</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="exhibition_venue.php">Exhibition
                                            Venue</a></li>

                                   <?php 
$sql = "SELECT file_path FROM pdf_files WHERE category = 'pressrelease'";
$result = $conn->query($sql) or die("SQL Error: " . $conn->error);

echo ($result->num_rows > 0) ? 
    implode('', array_map(fn($row) => "<li class='submenu-list-menu'>
        <a class='drop-link-menubar' href='http://localhost/vifair/{$row['file_path']}' target='_blank'>
            Press Release
        </a></li>", $result->fetch_all(MYSQLI_ASSOC))) 
    : "<li class='list-group-item text-danger'>No PDFs found in Press Release category.</li>";
?>
                                       <?php 
$sql = "SELECT file_path FROM pdf_files WHERE category = 'newsletter'";
$result = $conn->query($sql) or die("SQL Error: " . $conn->error);

echo ($result->num_rows > 0) ? 
    implode('', array_map(fn($row) => "<li class='submenu-list-menu'>
        <a class='drop-link-menubar' href='http://localhost/vifair/{$row['file_path']}' target='_blank'>
            Newsletter
        </a></li>", $result->fetch_all(MYSQLI_ASSOC))) 
    : "<li class='list-group-item text-danger'>No PDFs found in Newsletter category.</li>";
?>
                                    </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Registration</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="vendor_reg.php">Vendor Registration
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="registration_vendor.php">Registered
                                            Vendor</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Contact</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="contact-us.php">Contact Us</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="needTeam.php">Need Team Support</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="privacy&policy.php">Privacy & Policy</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="hotel.php">Stay and Hotel</a></li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="magazine.php">Magazine Latest Edition</a></li>
                    </ul>
                </div>
                <div class="header-form-btn-box">
                    <ul class="form-unlist-box">
                        <li class="form-list-btn"><a class="link-form-btn" href="#">I WANT TO VISIT</a>
                            <div class="visitor-megamenu-main-body">
                                <div class="visitor-megamenu-sub-box">
                                    <div class="visitor-primary-heading">VISIT REGISTRATION</div>
                                    <div class="row g-3">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="megamenu-content-details-box border-end">
                                                <div class="megamenu-logo-img-box">
                                                    <img class="megamenu-logo-img" src="assets/images/VIFair.png" alt="Chennai Location" loading="lazy">
                                                </div>
                                                <div class="visitor-primary-heading">CHENNAI</div>
                                                <div class="menubar-registration-btn-box mt-2">
                                                    <a class="menubar-registration-link" href="chennai_visit_reg.php">REGISTRATION</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="megamenu-content-details-box">
                                                <div class="megamenu-logo-img-box">
                                                    <img class="megamenu-logo-img" src="assets/images/VIFair.png" alt="Delhi Location" loading="lazy">
                                                </div>
                                                <div class="visitor-primary-heading">DELHI</div>
                                                <div class="menubar-registration-btn-box mt-2">
                                                    <a class="menubar-registration-link" href="delhi_visit_reg.php">REGISTRATION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="form-list-btn"><a class="link-form-btn" href="#">I WANT TO EXHIBIT</a>
                            <div class="visitor-megamenu-main-body">
                                <div class="visitor-megamenu-sub-box">
                                    <div class="visitor-primary-heading">EXHIBIT REGISTRATION</div>
                                    <div class="row g-3">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="megamenu-content-details-box border-end">
                                                <div class="megamenu-logo-img-box">
                                                    <img class="megamenu-logo-img" src="assets/images/VIFair.png" alt="Chennai Exhibit" loading="lazy">
                                                </div>
                                                <div class="visitor-primary-heading">CHENNAI</div>
                                                <div class="menubar-registration-btn-box mt-2">
                                                    <a class="menubar-registration-link" href="chennai_exhibit_reg.php">REGISTRATION</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="megamenu-content-details-box">
                                                <div class="megamenu-logo-img-box">
                                                    <img class="megamenu-logo-img" src="assets/images/VIFair.png" alt="Delhi Exhibit" loading="lazy">
                                                </div>
                                                <div class="visitor-primary-heading">DELHI</div>
                                                <div class="menubar-registration-btn-box mt-2">
                                                    <a class="menubar-registration-link" href="delhi_exhibit_reg.php">REGISTRATION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="menu-toggle" id="menuToggle" onclick="toggleMenu()">☰</button>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

</body>
</html>
<?php
// Close database connection
$conn->close();
// Flush output buffer
ob_end_flush();
?>