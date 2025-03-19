<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exhibitor Registration </title>
    <?php
    include "include/header.php";
    ?>
</head>
<body class="exibitor-body">
    <section class="form-section">
        <div class="container form-container">
            <form action="admin/exhibitreg_data.php" method="POST">
                <h1 class="mb-4">Chennai Registration</h1>
                <span class="form-title">
                    We are interested in participating in the Vibrant India 2024
                    exhibition, which will be held in New Delhi from July 19-20-21,
                    2024. Below is information about our organisation. *
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

                <label for="Companyname" class="form-label form-title">Company Name *</label>
                <input type="text" class="form-control inputForm-border mb-3" name="Companyname" 
                    placeholder="Enter Company Name" required />

                <label for="exampleFormControlInput1" class="form-label form-title">Approximate booth area
                    required *</label>
                <input type="text" class="form-control inputForm-border mb-3" name="areaname" 
                    placeholder="sq.mtrs." required />

                <h1 class="form-title">Please Tick : Type of booth required *</h1>

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

                <h1 class="form-title">Opening *</h1>
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


                <h3>Brand Details</h3>
                <div class="d-flex justify-content-center gap-2">
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label form-title">Brand Name *</label>
                        <input type="text" class="form-control inputForm-border"  name="brandname"
                            placeholder="Enter Brand Name" required />
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label form-title">Product Detail *</label>
                        <input type="text" class="form-control inputForm-border" id="Productdetail"  name="Productdetail"
                             placeholder="Enter Product Detail" required />
                    </div>
                </div>
                <h2>Detail</h2>
                <div class="detail-gender mb-3 d-flex gap-2">
                <div class="select-gender col-4">
                    <select class="form-select form-select-lg mb-3 inputForm-border" name="title" required>
                        <option value="">-Select-</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                </div>
                    <div class="select-gender col-4">
                        <input type="text" class="form-control inputForm-border" name="firstname"
                            placeholder="Enter First Name" required />
                        <label for="exampleFormControlInput1" class="form-label">First</label>
                    </div>
                    <div class="select-gender col-4">
                        <input type="text" class="form-control inputForm-border"  name="lastname"
                            placeholder="Enter Last Name" required />
                        <label for="exampleFormControlTextarea1" class="form-label">
                            Last</label>
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title">Mobile No. *</label>
                        <input type="text" class="form-control inputForm-border" 
                            name="exhibitionnumber" placeholder="Enter Mobile Number" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title">Email *</label>
                        <input type="email" class="form-control inputForm-border"  name="email"
                            placeholder="Enter Email Id" required />
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <label class="form-title">Designation *</label>
                        <input type="text" class="form-control inputForm-border"  name="Designation"
                            placeholder="Enter Designation" required />
                    </div>
                    <div class="col-6">
                        <label class="form-title">Address *</label>
                        <input type="text" class="form-control inputForm-border"  name="Addresstype"
                            placeholder="Enter Address" required />
                        <label for="exampleFormControlInput1" class="form-label">
                            Address Line 1</label>
                    </div>
                </div>
                <div class="d-flex gap-2 mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="city"
                            placeholder="Enter City" required />
                        <label for="exampleFormControlInput1" class="form-label">
                            City</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="Region"
                            placeholder="Enter Region" required />
                        <label for="exampleFormControlTextarea1" class="form-label">
                            State / Province / Region</label>
                    </div>
                </div>
                <div class="d-flex mb-3 gap-2">
                    <div class="col-6">
                        <input type="text" class="form-control inputForm-border"  name="postalcode"
                            placeholder="Enter PostalCode " required />
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
                <h1 class="form-title">How did you hear about us? *</h1>
                
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


                <h3>Prime Location Charges:</h3>
                <span class="form-title mt-3">
                    10% extra for Corner Booth | 12% extra for 3 Side Open Booth | 15%
                    extra for Island Booth
                </span>
                <h3>Payment Schedule::</h3>
                <span class="form-title mt-3">
                    *30% On Confirmation | *30% before two months | *Remaining 40%
                    before 15 days
                </span>
                <h3>PAYMENT DETAILS:</h3>
                <span class="form-title mt-3">
                    *By Cheque in favor of: VIBRANT INDIA EVENT SOLUTION
                </span>
                <h1 class="form-title mt-4">*By RTGS/NEFT:</h1>
                <table class="exhibition-table mb-3">
                    <tr class="exhibition-table-tr">
                        <th class="exhibition-table-th">Account Name</th>
                        <th class="exhibition-table-th">Vibrant India Event Solution</th>
                    </tr>
                    <tr class="exhibition-table-tr">
                        <td class="exhibition-table-td">Bank Name</td>
                        <td class="exhibition-table-td">Axis Bank Ltd.</td>
                    </tr>
                    <tr class="exhibition-table-tr">
                        <td class="exhibition-table-td">Current A/c No</td>
                        <td class="exhibition-table-td">915020024169920</td>
                    </tr>
                    <tr class="exhibition-table-tr">
                        <td class="exhibition-table-td">IFSC Code</td>
                        <td class="exhibition-table-td">
                            UTIB0002651 (all 0’s are zero)
                        </td>
                    </tr>
                    <tr class="exhibition-table-tr">
                        <td class="exhibition-table-td">SWIFT Code</td>
                        <td class="exhibition-table-td">AXISINBB080</td>
                    </tr>
                    <tr class="exhibition-table-tr">
                        <td class="exhibition-table-td">Branch</td>
                        <td class="exhibition-table-td">
                            Odhav, Ahmedabad, Gujarat-382415
                        </td>
                    </tr>
                </table>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="visitor-btn" name="submit">Registration</button>
                </div>
            </form>
        </div>
    </section>

    <?php
            include "include/footer.php";
            ?>
    </body>

    </html> 