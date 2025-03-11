<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vibrant India Fair </title>
    <?php
    include "include/header.php";
    ?>
</head>
<body >
  <section class="visitor_main section-margin">
    <div class="visitor-form">
      <h1 class="visitor-txt">
        Visitor <span class="visitor-txt-span">Registration</span>
      </h1>
      <form action="admin/visitor/chennai_visit_data.php" method="post">
        <div class="visitor-div">
          <label for="name" class="visitor-field-label">Name</label>
          <input
            type="text"
            class="visitor-input-box"
            name="name"
            id="name"
            required
          />
          <span><i class="fa-solid fa-user input-icon"></i></span>
        </div>
        <div class="visitor-div">
          <label for="company" class="visitor-field-label">Company Name</label>
          <input
            type="text"
            class="visitor-input-box"
            name="company"
            id="company"
          />
          <span><i class="fa-solid fa-building input-icon"></i></span>
        </div>
        <div class="visitor-div">
          <label for="designation" class="visitor-field-label"
            >Designation</label
          >
          <input
            type="text"
            class="visitor-input-box"
            name="designation"
            id="designation"
          />
          <span><i class="fa-solid fa-location-dot input-icon"></i></span>
        </div>
        <div class="visitor-div">
                <label for="phone" class="visitor-field-label">Phone</label>
                <input type="text" class="visitor-input-box" name="phone" id="phone"
                       value="<?= $_SESSION['old_input']['phone'] ?? '' ?>" required />
                <span><i class="fa-solid fa-phone input-icon"></i></span>
                <?php if (!empty($_SESSION['errors']['phone'])): ?>
                    <p class="error"><?= $_SESSION['errors']['phone']; ?></p>
                <?php endif; ?>
            </div>
         <div class="visitor-div">
                <label for="email" class="visitor-field-label">Email</label>
                <input type="email" class="visitor-input-box" name="email" id="email"
                       value="<?= $_SESSION['old_input']['email'] ?? '' ?>" required />
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
</div></section>
<script>
  window.onload = function() {
    var visitorId = new URLSearchParams(window.location.search).get("visitor_id");
    if (visitorId) {
      fetch("admin/visitor/chennai_generate_qr_email.php?visitor_id=" + visitorId)
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
            ?>

<?php 
// Clear session errors after displaying
unset($_SESSION['errors'], $_SESSION['old_input']); 
?>
    </body>
</html>