<!DOCTYPE html>
<html lang="en">
<head>
 <title> Vibrant India Fair </title>
    <?php
    include "include/header.php";
    ?>
</head>
<body>
  <div class="vendor-form-container">
        <h3 class="text-center">Vendor Registration</h3>
        <form action="admin/vendorData/vendor_data.php" method="POST">
          <!-- Name Field -->
          <label class="vendor-form-label">Name</label>
          <div class="row">
            <div class="col">
              <input
                type="text"
                class="vendor-form-control"
                name="first_name"
                placeholder="First"
                required
              />
            </div>
            <div class="col">
              <input
                type="text"
                class="vendor-form-control"
                name="last_name"
                placeholder="Last"
                required
              />
            </div>
          </div>

          <!-- Company Name -->
          <div class="vendor-form-group">
            <label class="vendor-form-label">Company Name</label>
            <input
              type="text"
              class="vendor-form-control"
              name="company_name"
              placeholder="Enter Company Name"
            />
          </div>

          <!-- Email Field -->
          <div class="vendor-form-group">
            <label class="vendor-form-label">Email</label>
            <input
              type="email"
              class="vendor-form-control"
              name="email"
              placeholder="Enter Email"
              required
            />
          </div>

          <!-- Phone Field -->
          <div class="vendor-form-group">
            <label class="vendor-form-label">Phone</label>
            <input
              type="text"
              class="vendor-form-control"
              name="phone"
              placeholder="Enter Phone Number"
            />
          </div>

          <!-- Comment or Message -->
          <div class="vendor-form-group">
            <label class="vendor-form-label">Comment or Message</label>
            <textarea
              class="vendor-form-control"
              name="message"
              placeholder="Type a message"
              rows="2"
            ></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="vendor-btn-submit">Submit</button>
        </form>
      </div>
   <?php
    include "include/footer.php";
    ?>
</body>
</html>