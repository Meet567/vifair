<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$old_input = $_SESSION['old_input'] ?? [];
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['old_input'], $_SESSION['errors']);
?>
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
           <form action="admin/exhibit/chennai_exhibit_data.php" method="POST">
                <h1 class="mb-4 primary-heading">Chennai Registration</h1>
                <span class="secondary-title">
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

                <label for="Companyname" class="form-label form-title primary-title">Company Name :</label>
                <input type="text" class="form-control inputForm-border mb-3" name="Companyname" 
                    placeholder="Enter Company Name" required />

                <label for="exampleFormControlInput1" class="form-label form-title primary-title">Approximate booth area
                    required :</label>
                <input type="text" class="form-control inputForm-border mb-3" name="areaname" 
                    placeholder="sq.mtrs." required />
                         <div class="row">
                           <div class="col-12 col-lg-6 col-md-6 col-sm-12"> 
                           <h1 class="form-label form-title primary-title">Please Tick : Type of booth required :</h1>
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
                          <h1 class="form-label form-title primary-title">Opening :</h1>
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

            <h3 class="form-label form-title primary-title">Brand Details :</h3>
            <div id="inputContainer">
                <div class="row d-flex justify-content-center input-group">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="brandname" class="form-label form-title-sub primary-title">Brand Name</label>
                        <input type="text" class="form-control inputForm-border" name="brandname[]" placeholder="Brand Name" required />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                        <label for="Productdetail" class="form-label form-title-sub primary-title">Product Detail</label>
                        <input type="text" class="form-control inputForm-border" name="Productdetail[]" placeholder="Product Detail" required />
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                        <button type="button" id="addMore" class="btn btn-primary">+</button>
                    </div>
                 </div>
            </div>
           
        
                <h2 class="form-label form-title primary-title mb-3">Detail :</h2>
                <div class="detail-gender mb-3 row justify-content-center">
                <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2 ">
                    <label for="exampleFormControlInput1" class="form-title-sub primary-title">Gender</label>
                    <select class="form-select form-select-lg mb-3 inputForm-border" name="title" required>
                        <option value="">-Select-</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2">
                         <label for="exampleFormControlInput1" class="form-title-sub primary-title">First</label>
                        <input type="text" class="form-control inputForm-border" name="firstname" placeholder="First Name" required />
                    </div>
                    <div class="select-gender col-lg-4 col-md-4 col-sm-12 col-12 mb-2 mb-2"> 
                        <label for="exampleFormControlTextarea1" class="form-title-sub primary-title">
                            Last</label>
                        <input type="text" class="form-control inputForm-border"  name="lastname" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title-sub primary-title">Mobile No.</label>
                        <input type="text" class="form-control inputForm-border" 
                            name="exhibitionnumber" placeholder="Mobile No" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title-sub primary-title">Email</label>
                        <input type="email" class="form-control inputForm-border"  name="email"
                            placeholder="Email Id" required />
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title-sub primary-title">Designation</label>
                        <input type="text" class="form-control inputForm-border"  name="Designation"
                            placeholder="Designation" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title-sub primary-title">Address</label>
                        <input type="text" class="form-control inputForm-border"  name="Addresstype" placeholder="Address" required />
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label for="exampleFormControlInput1" class="form-title-sub primary-title">City</label>
                        <input type="text" class="form-control inputForm-border"  name="city" placeholder="City" required />
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlTextarea1" class="form-title-sub primary-title">State/Region</label>
                        <input type="text" class="form-control inputForm-border"  name="Region" placeholder="Region" required />
                    </div>
                </div>
                <div class="d-flex mb-3 gap-2">
                    <div class="col-6">
                        <label for="exampleFormControlTextarea1" class="form-title-sub primary-title">
                            PostalCode</label>
                        <input type="text" class="form-control inputForm-border"  name="postalcode"placeholder="PostalCode " required />
                    </div>
                    <div class="col-6">
                        <label for="exampleFormControlTextarea1" class="form-title-sub primary-title">
                            Country</label>
                   <select id="countryDropdown"  class="form-select form-select-sm inputForm-border" name="country" required>
                    </select>
                    </div>
                </div>
                <h1 class="form-label form-title primary-title">How did you hear about us?</h1>
                
              <div class="form-check">
                <input
                  class="form-check-input inputForm-border"
                  type="radio"
                  name="source"
                  value="Whatsapp"
                  id="Whatsapp"
                />
                <label class="form-check-label radio-title" for="Whatsapp">Whatsapp</label>
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


                  <h5 class="form-label form-title primary-title">Please accept our request and allocate space accordingly</h5>
                <h4 class="secondary-title">Important Note:</h4>
                <span class="section-text-title impo mt-3">
                    These fields are compulsory to fill.
                </span>
                <p class="section-text-title impo">Please note that this is only an Exhibitor Request Form and not Exhibitor Contract Form. Our team will contact you immediately with further details once you fill in this request form. You become an Exhibitor only after your Exhibitor Contract Form, along with payment is accepted by us.</p>
                <p class="section-text-title impo">If you find any difficulty in filling Exhibitor Request Form, for assistance or queries, please contact:</p>
                <div class="row">
                     <div class="col-md-6 contact-box">
            <h5 class="secondary-title">Ahmedabad</h5>
            <span class="section-text-title impo"><strong>Ms. Jyoti Bharadwaj</strong></span><br>
            <span class="section-text-title impo"><strong>Mob. No:</strong> <a href="Mob:+91 85116 84938">+91 85116 84938</a></span><br>
            <span class="section-text-title impo"><strong>Email:</strong> <a href="mailto:info@vibrantindiafair.com" class="email-link">info@vibrantindiafair.com</a></span>
                    </div>

                    <div class="col-md-6 mt-2 contact-box">
            <h5 class="secondary-title">Ahmedabad</h5>
            <span class="section-text-title impo"><strong>Mr. Naveen Chaturvedi</strong></span><br>
            <span class="section-text-title impo"><strong>Mob. No:</strong> <a href="Mob:+91 74339 30669">+91 74339 30669</a></span><br>
            <span class="section-text-title impo"><strong>Email:</strong> <a href="mailto:info@vibrantindiafair.com" class="email-link">info@vibrantindiafair.com</a></span>
                    </div>
               </div>   

                <div class="d-flex justify-content-center">
                    <button type="submit" class="exhibit-btn" name="submit">Registration</button>
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