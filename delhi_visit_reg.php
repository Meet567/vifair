<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibrant India Fair</title>
    <?php
    include "include/header.php";
    ?>
</head>

<body>
    <section class="section-margin">
        <div class="container-fluid">
            <h1 class="primary-heading">
                Delhi <span class="visitor-txt-span">Visitor</span> Registration
            </h1>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                 <form action="admin/visitor/delhi_visit_data.php" method="post">
                
                <div class="visitor-div">
                    <label for="name" class="visitor-field-label">Name</label>
                    <input type="text" class="visitor-input-box" name="name" id="name" required />
                    <span><i class="fa-solid fa-user input-icon"></i></span>
                </div>

                <div class="visitor-div">
                    <label for="company" class="visitor-field-label">Company Name</label>
                    <input type="text" class="visitor-input-box" name="company" id="company" />
                    <span><i class="fa-solid fa-building input-icon"></i></span>
                </div>

                <div class="visitor-div">
                    <label for="designation" class="visitor-field-label">Designation</label>
                    <input type="text" class="visitor-input-box" name="designation" id="designation" />
                    <span><i class="fa-solid fa-user-tie input-icon"></i></span>
                </div>

                <div class="visitor-div">
                    <label for="phone" class="visitor-field-label">Phone</label>
                    <input type="text" class="visitor-input-box" name="phone" id="phone"
                           value="<?= isset($_SESSION['old_input']['phone']) ? $_SESSION['old_input']['phone'] : '' ?>" required />
                    <span><i class="fa-solid fa-phone input-icon"></i></span>
                    <?php if (!empty($_SESSION['errors']['phone'])): ?>
                        <p class="error"><?= $_SESSION['errors']['phone']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="visitor-div">
                    <label for="email" class="visitor-field-label">Email</label>
                    <input type="email" class="visitor-input-box" name="email" id="email"
                           value="<?= isset($_SESSION['old_input']['email']) ? $_SESSION['old_input']['email'] : '' ?>" required />
                    <span><i class="fa-solid fa-envelope input-icon"></i></span>
                    <?php if (!empty($_SESSION['errors']['email'])): ?>
                        <p class="error"><?= $_SESSION['errors']['email']; ?></p>
                    <?php endif; ?>
                </div>

                <div class="visitor-div">
                    <label for="city" class="visitor-field-label">City</label>
                    <input type="text" class="visitor-input-box" id="city" name="city" />
                    <span><i class="fa-solid fa-city input-icon"></i></span>
                </div>

                <button type="submit" class="visitor-btn">Registration</button>
            </form>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="right-part-message-box">
                            <div class="right-part-sub-box">
                                <div class="right-part-title">Say Hello!</div>
                                <p class="right-part-paragraph">Join us in shaping the future of COMPLETE HOUSEWARE EXHIBITION 2025 at our next exhibition and discover the possibilities that await.</p>
                            </div> 
                            <div class="right-main-img-box">
                                <div class="right-img-box">
                                    <img class="right-part-img" src="assets/images/Rectangle.webp" alt="">
                                    <div class="right-message-link-box">
                                        <div class="right-message-icon-box">
                                            <img class="right-message-icon" src="assets/images/icon/chat.png" alt="">
                                        </div>
                                        <div class="right-email-box">
                                            <div class="right-message-heading">VIBRANT INDIA FAIR</div>
                                           <a class="right-part-email-link" href="#">info@vibrantindiafair.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
            </div>
            </div>
        </div>
    </section>

    <script>
        window.onload = function() {
            var visitorId = new URLSearchParams(window.location.search).get("visitor_id");
            if (visitorId) {
                fetch("admin/visitor/delhi_generate_qr_email.php?visitor_id=" + visitorId)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === "success") {
                            console.log("QR Code & Email sent successfully!");
                        } else {
                            console.error("Error:", data.message);
                        }
                    })
                    .catch(error => console.error("Fetch error:", error));
            }
        };
    </script>

    <?php
    include "include/footer.php";

    // ✅ Clear session errors after displaying
    unset($_SESSION['errors'], $_SESSION['old_input']); 
    ?>

</body>
</html>
