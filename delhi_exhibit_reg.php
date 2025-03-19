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
<body class="exibitor-body">
    <section class="form-section">
        <div class="form-container">
            <form action="admin/delhi_exhibit_data.php" method="POST">
                <h1 class="mb-4">Delhi Registration</h1>
                <span class="form-title">
                    We are interested in participating in the Vibrant India 2024
                    exhibition, which will be held in New Delhi from July 19-20-21,
                    2024. Below is information about our organisation. 
                </span>
                <div class="d-flex gap-3 mb-3">
                    <div class="exhibition-form-check">
                        <input class="exhibition-form-check-input inputForm-border" type="radio"
                            name="participation_type" value="domestic"  required />
                        <label class="exhibition-form-check-label radio-title" for="Domestic">Domestic</label>
                    </div>
                    <div class="exhibition-form-check">
                        <input class="exhibition-form-check-input inputForm-border" type="radio"
                            name="participation_type" value="international"  required />
                        <label class="exhibition-form-check-label radio-title"
                            for="International">International</label>
                    </div>  
                </div>

                <label for="Companyname" class="form-label form-title">Company Name</label>
                <input type="text" class="form-control inputForm-border mb-3" name="Companyname" 
                    placeholder="Enter Company Name" required />

                <label for="exampleFormControlInput1" class="form-label form-title">Approximate booth area
                    required</label>
                <input type="text" class="form-control inputForm-border mb-3" name="areaname" 
                    placeholder="sq.mtrs." required />
                         <div class="row">
                           <div class="col-12 col-lg-6 col-md-6 col-sm-12"> 
                           <h1 class="form-title">Please Tick : Type of booth required</h1>
                           <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="booth_type"
                        value="Built-up Booth"  required />
                    <label class="form-check-label radio-title" for="bothtype">
                        Built-up Booth (Min. 9 sq. mtrs.) (Ready Booth)
                    </label>
                           </div>
                           <div class="form-check mb-3">
                    <input class="form-check-input inputForm-border" type="radio" name="booth_type" value="Raw Space"
                         required />
                    <label class="form-check-label radio-title" for="rowspace">
                        Raw Space (Min. 18 sq. mtrs.)
                    </label>
                           </div>
                          </div>
                          <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                          <h1 class="form-title">Opening</h1>
                          <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                        value="Single Slide Open"  required />
                    <label class="form-check-label radio-title" for="Opening">Single Slide Open</label>
                          </div>
                          <div class="form-check">
                    <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                        value="Two Side Open"  required />
                    <label class="form-check-label radio-title" for="SlideOpening">Two Side Open (Min. 36 sq. mtrs)</label>
                          </div>
                          <div class="form-check mb-3">
                    <input class="form-check-input inputForm-border" type="radio" name="opening_type"
                        value="Three Side Open"  required />
                    <label class="form-check-label radio-title" for="TwoSlideOpening">Three Side Open (Min. 54 sq. mtrs)</label>
                          </div>
                         </div>
                        </div>

                <h3>Brand Details</h3>
               <div id="inputContainer">
            <div class="row d-flex justify-content-center input-group">
          <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
            <label for="brandname" class="form-label form-title">Brand Name</label>
            <input type="text" class="form-control inputForm-border" name="brandname[]" placeholder="Brand Name" required />
          </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
            <label for="Productdetail" class="form-label form-title">Product Detail</label>
            <input type="text" class="form-control inputForm-border" name="Productdetail[]" placeholder="Product Detail" required />
  
         </div>
         <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <button type="button" id="addMore" class="btn btn-primary">+</button>
            </div>
           </div>
   </div>
           
        
                <h2>Detail</h2>
                <div class="detail-gender mb-3 row justify-content-center">
                <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2 text-center">
                    <select class="form-select form-select-lg mb-3 inputForm-border" name="title" required>
                        <option value="">-Select-</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2">
                        <input type="text" class="form-control inputForm-border" name="firstname"
                            placeholder="First Name" required />
                        <label for="exampleFormControlInput1" class="form-label">First</label>
                    </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2 mb-2">
                        <input type="text" class="form-control inputForm-border"  name="lastname"
                            placeholder="Last Name" required />
                        <label for="exampleFormControlTextarea1" class="form-label">
                            Last</label>
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title">Mobile No.</label>
                        <input type="text" class="form-control inputForm-border" 
                            name="exhibitionnumber" placeholder="Mobile No" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title">Email</label>
                        <input type="email" class="form-control inputForm-border"  name="email"
                            placeholder="Email Id" required />
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title">Designation</label>
                        <input type="text" class="form-control inputForm-border"  name="Designation"
                            placeholder="Designation" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title">Address</label>
                        <input type="text" class="form-control inputForm-border"  name="Addresstype"
                            placeholder="Address" required />
                        <label for="exampleFormControlInput1" class="form-label">
                            Address Line 1</label>
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="city"
                            placeholder="City" required />
                        <label for="exampleFormControlInput1" class="form-label">
                            City</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="Region"
                            placeholder="Region" required />
                        <label for="exampleFormControlTextarea1" class="form-label">
                            State / Province / Region</label>
                    </div>
                </div>
                <div class="d-flex mb-3 gap-2">
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="postalcode"
                            placeholder="PostalCode " required />
                        <label for="exampleFormControlTextarea1" class="form-label">
                            Postal Code</label>
                    </div>
                    <div class="col-6">
                    <select class="form-select form-select-sm inputForm-border" name="country" required>
                        <option value="">-Select-</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="Japan">Japan</option>
                        <option value="Brazil">Brazil</option>
                    </select>

                        <label for="exampleFormControlTextarea1" class="form-label">
                            Country</label>
                    </div>
                </div>
                <h1 class="form-title">How did you hear about us?</h1>
                
              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="Whatsapp"
                  id="Whatsapp"
                />
                <label class="form-check-label" for="Whatsapp">Whatsapp</label>
              </div>

              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="SocialMedia"
                  id="SocialMedia"
                />
                <label class="form-check-label radio-title" for="SocialMedia"
                  >Social Media</label
                >
              </div>

              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="Emailers"
                  id="Emailers"
                />
                <label class="form-check-label radio-title" for="Emailers"
                  >Emailers</label
                >
              </div>

              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="Newspapers"
                  id="Newspapers"
                />
                <label class="form-check-label radio-title" for="Newspapers"
                  >Newspapers</label
                >
              </div>

              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="FriendsAndFamily"
                  id="FriendsAndFamily"
                />
                <label class="form-check-label radio-title" for="FriendsAndFamily"
                  >Friends & Family</label
                >
              </div>

              <div class="form-check mb-3">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="Other"
                  id="Other"
                />
                <label class="form-check-label radio-title" for="Other"
                  >Other</label
                >
              </div>


                <h5>Please accept our request and allocate space accordingly</h5>
                <h4>Important Note:</h4>
                <span class="form-title mt-3">
                    * These fields are compulsory to fill.
                </span>
                <p>† Please note that this is only an Exhibitor Request Form and not Exhibitor Contract Form. Our team will contact you immediately with further details once you fill in this request form. You become an Exhibitor only after your Exhibitor Contract Form, along with payment is accepted by us.</p>
                <p>If you find any difficulty in filling Exhibitor Request Form, for assistance or queries, please contact:</p>
             <div class="row">
                     <!-- Mumbai Contact -->
                     <div class="col-md-6 contact-box">
            <h5>Mumbai:</h5>
            <p><strong>Mr. Yash Menghani</strong></p>
            <p><strong>Tel. No:</strong> <a href="tel:+91-11-2571 411">+91-11-2571 411</a></p>
            <p><strong>Mob. No:</strong> <a href="Mob:+91 93 119 60399">+91 93 119 60399</a></p>
            <p><strong>Email:</strong> <a href="mailto:yash.menghani@hghindia.com" class="email-link">yash.menghani@hghindia.com</a></p>
                     </div>

                    <!-- Delhi Contact -->
                    <div class="col-md-6 contact-box">
            <h5>Delhi:</h5>
            <p><strong>Mr. Yash Menghani</strong></p>
            <p><strong>Tel. No:</strong> <a href="tel:+91-11-2571 411">+91-11-2571 411</a></p>
            <p><strong>Mob. No:</strong> <a href="Mob:+91 93 119 60399">+91 93 119 60399</a></p>
            <p><strong>Email:</strong> <a href="mailto:yash.menghani@hghindia.com" class="email-link">yash.menghani@hghindia.com</a></p>
                    </div>
               </div>     
                <div class="d-flex justify-content-center">
                    <button type="submit" class="visitor-btn" name="submit">Registration</button>
                </div>
            </form>
        </div>
    </section>

<script>
    let maxFields = 10; // Maximum allowed fields
    let fieldCount = 1; // Initial count

    document.getElementById('addMore').addEventListener('click', function () {
        if (fieldCount < maxFields) {
            let container = document.getElementById('inputContainer');
            let newInputGroup = document.createElement('div');
            newInputGroup.classList.add('row', 'd-flex', 'justify-content-center', 'input-group');
            newInputGroup.innerHTML = `
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <input type="text" class="form-control inputForm-border" name="brandname[]" placeholder="Brand Name" required />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <input type="text" class="form-control inputForm-border" name="Productdetail[]" placeholder="Product Detail" required />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                    <button type="button" class="btn btn-danger remove-btn" onclick="removeField(this)">-</button>
                </div>
            `;
            container.appendChild(newInputGroup);
            fieldCount++;
        } else {
            alert('You can only add up to 10 entries.');
        }
    });

    function removeField(button) {
        button.parentElement.parentElement.remove();
        fieldCount--;
    }
</script>

    <?php
            include "include/footer.php";
            ?>
    </body>

    </html> 