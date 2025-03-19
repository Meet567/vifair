<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chennai Registration - Vibrant India 2024</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <style>
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }

      .container {
        background: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: auto;
      }

      h2 {
        color: #007bff;
        margin-bottom: 20px;
      }

      h4 {
        margin-top: 20px;
        color: #343a40;
      }

      label {
        font-weight: bold;
        color: #495057;
      }

      .form-control,
      .form-select {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
      }

      input[type="radio"] {
        margin-right: 5px;
      }

      .btn-primary {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        transition: 0.3s;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      p,
      ul {
        color: #6c757d;
      }

      ul {
        padding-left: 20px;
      }
    </style>
  </head>
  <body>
    <form action="register.php" method="POST">
      <h4>Personal Details</h4>
      <div class="mb-3">
        <label>Name *</label>
        <input
          type="text"
          name="name"
          class="form-control"
          placeholder="Enter Your Name"
          required
        />
      </div>
      <div class="mb-3">
        <label>Company Name *</label>
        <input
          type="text"
          name="company_name"
          class="form-control"
          placeholder="Enter Company Name"
          required
        />
      </div>
      <div class="mb-3">
        <label>Approximate booth area required *</label>
        <input
          type="text"
          name="booth_area"
          class="form-control"
          placeholder="sq.mtrs."
          required
        />
      </div>
      <h4>Booth Type</h4>
      <div class="mb-3">
        <label>Type of booth required *</label><br />
        <input type="radio" name="booth" value="Built-up Booth" /> Built-up
        Booth (Min. 9 sq. mtrs.) (Ready Booth)<br />
        <input type="radio" name="booth" value="Raw Space" /> Raw Space (Min. 18
        sq. mtrs.)
      </div>
      <h4>Brand Details</h4>
      <div class="mb-3">
        <label>Brand Name *</label>
        <input
          type="text"
          name="brand_name"
          class="form-control"
          placeholder="Enter Brand Name"
          required
        />
      </div>
      <h4>Contact Details</h4>
      <div class="mb-3">
        <label>First Name *</label>
        <input
          type="text"
          name="first_name"
          class="form-control"
          placeholder="Enter First Name"
          required
        />
      </div>
      <div class="mb-3">
        <label>Last Name *</label>
        <input
          type="text"
          name="last_name"
          class="form-control"
          placeholder="Enter Last Name"
          required
        />
      </div>
      <div class="mb-3">
        <label>Mobile No. *</label>
        <input
          type="text"
          name="mobile"
          class="form-control"
          placeholder="Enter Mobile Number"
          required
        />
      </div>
      <div class="mb-3">
        <label>Email *</label>
        <input
          type="email"
          name="email"
          class="form-control"
          placeholder="Enter Email Id"
          required
        />
      </div>
      <div class="mb-3">
        <label>Designation *</label>
        <input
          type="text"
          name="designation"
          class="form-control"
          placeholder="Enter Designation"
          required
        />
      </div>
      <div class="mb-3">
        <label>Address *</label>
        <input
          type="text"
          name="address"
          class="form-control"
          placeholder="Enter Address"
          required
        />
      </div>
      <div class="mb-3">
        <label>City *</label>
        <input
          type="text"
          name="city"
          class="form-control"
          placeholder="Enter City"
          required
        />
      </div>
      <div class="mb-3">
        <label>State *</label>
        <input
          type="text"
          name="state"
          class="form-control"
          placeholder="Enter State"
          required
        />
      </div>
      <div class="mb-3">
        <label>Postal Code *</label>
        <input
          type="text"
          name="postal_code"
          class="form-control"
          placeholder="Enter Postal Code"
          required
        />
      </div>
      <div class="mb-3">
        <label>Country *</label>
        <input
          type="text"
          name="country"
          class="form-control"
          placeholder="Enter Country"
          required
        />
      </div>
      <h4>How did you hear about us?</h4>
      <div class="mb-3">
        <select name="how_did_you_hear" class="form-control">
          <option value="Whatsapp">Whatsapp</option>
          <option value="Social Media">Social Media</option>
          <option value="Emailers">Emailers</option>
          <option value="Newspapers">Newspapers</option>
          <option value="Friends & Family">Friends & Family</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </body>
</html>
