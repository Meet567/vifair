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
<body class="visitor_main">
<div class="visitor-form">
      <h1 class="visitor-txt">
        Visitor <span class="visitor-txt-span">Registration</span>
      </h1>
      <form action="admin/visitor_data.php" method="post">
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
          <input
            type="text"
            class="visitor-input-box"
            name="phone"
            id="phone"
            required
          />
          <span><i class="fa-solid fa-phone input-icon"></i></span>
        </div>
        <div class="visitor-div">
          <label for="email" class="visitor-field-label">Email</label>
          <input
            type="email"
            class="visitor-input-box"
            name="email"
            id="email"
            required
          />
          <span><i class="fa-solid fa-envelope input-icon"></i></span>
        </div>
        <div class="visitor-div">
          <label for="city" class="visitor-field-label">City</label>
          <input type="text" class="visitor-input-box" id="city" name="city" />
          <span><i class="fa-solid fa-city input-icon"></i></span>
        </div>
        <button type="submit" class="visitor-btn">Registration</button>
      </form>
    </div>
<?php
            include "include/footer.php";
            ?>
    </body>

    </html>