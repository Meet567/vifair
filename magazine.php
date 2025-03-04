<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <?php
    include "include/header.php";
    ?>
</head>
<body>
  <main class="magazine-main">
      <section class="contact-us section-margin" id="contact">
        <div class="container mt-5 py-4 contact-us-box">
          <div class="row mt-3">
            <div class="col-lg-6 col-md-5 col-sm-6 col-12">
              <div class="contact-us-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14686.27742881122!2d72.676278!3d23.039579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e874618d3f65d%3A0x26d115751a846ede!2sVibrant%20India%20Event%20Solution!5e0!3m2!1sen!2sus!4v1740389867477!5m2!1sen!2sus"
                  height="350px"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-6 col-12">
              <h3 class="contact-us-form-title mt-2">Tell Me Your Message</h3>
              <form class="mt-4">
                <div class="row">
                  <div class="mb-3">
                    <input
                      type="name"
                      class="form-control"
                      id="exampleInputEmail1"
                      placeholder="First name"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      id="exampleInputEmail1"
                      placeholder="Last name"
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="subject"
                      class="form-control"
                      id="exampleInputEmail1"
                      placeholder="Email"
                    />
                  </div>
                  <div class="mb-3">
                    <textarea
                      class="form-control"
                      rows="3"
                      id="validationTextarea"
                      placeholder="Message"
                    ></textarea>
                  </div>
                  <div class="d-grid gap-2">
                    <a href="#" class="contact-us-submit">SEND MESSAGE</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
  </main>
    <?php
    include "include/footer.php";
    ?>
</body>
</html>