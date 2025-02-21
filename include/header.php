<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vibrant India Fair</title>
    <?php
    // Include common head section
    include_once "include/head_link.php";
    ?>
</head>

<body>
    <!-- Headr Section -->
    <header>
        <div class="main">
            <div class="navbar-main">
                <div class="header-logo">
                    <div class="logo-box">
                        <picture>
                            <a href="index.php">
                                <img src="assets/images/VIFair.png" alt="">
                            </a>
                        </picture>
                    </div>
                </div>
                <div class="header-menubar-box" id="navLinks">
                    <ul class="menubar-unlist-box">
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Home</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Vibrant India
                                            Magazine</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Vibrant India
                                            2025</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="about.php">About Us</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">About Vibrant
                                            India</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">About
                                            Organizer</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Post Show
                                            Report</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Show
                                            Highlights</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Exhibitors</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Why Exhibit</a>
                                    </li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor
                                            Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Brochure</a>
                                    </li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor
                                            Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Sponsorship
                                            Opportunity</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Participation
                                            Charges</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Floor Plan</a>
                                    </li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Directory
                                            Advertisement</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor
                                            inquiry</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Visitors</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Why Visit ?</a>
                                    </li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor
                                            Profile</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visiting
                                            Hours</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">General
                                            Facilities</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Gallery</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="gallery.php">Photo
                                            Gallery</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Video
                                            Gallery</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Information</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibition
                                            Venue</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Press
                                            Release</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">News Letter</a>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Registration</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Vender
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Visitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Exhibitor
                                            Registration</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Registered
                                            Vendor</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Contact</a>
                            <div class="dropdown-submenu">
                                <ul class="submenu-unlist">
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Contact Us</a>
                                    </li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Need Team
                                            Support</a></li>
                                    <li class="submenu-list-menu"><a class="drop-link-menubar" href="#">Privacy &
                                            Policy</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Stay and Hotel</a></li>
                        <li class="menubar-list-menu"><a class="link-menubar" href="#">Magazine Latest Edition</a></li>
                    </ul>
                </div>
                <div class="header-form-btn-box">
                    <ul class="form-unlist-box">
                        <li class="form-list-btn"><a class="link-form-btn" href="#">I WANT TO VISIT</a></li>
                        <li class="form-list-btn"><a class="link-form-btn" href="#">I WANT TO EXHIBIT</a></li>
                    </ul>
                </div>
                <button class="menu-toggle" id="menuToggle" onclick="toggleMenu()">☰</button>
            </div>
        </div>
    </header>
    <!-- End Header Section -->


</body>

</html>