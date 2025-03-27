<!DOCTYPE html>
<html lang="en">
<head>
   <title>Vibrant India Fair</title>
   <?php
      include 'include/header.php';
    ?>
</head>
<body>
  <div class="container">
      <h2 class="custom-event-head mt-4">Follow Exhibition Venue</h2>

      <!-- Event Buttons -->
      <div class="d-flex justify-content-end gap-3 mt-5 custom-event-buttons">
        <button onclick="showCustomEvent(1)" class="event-btn active">
          Yashobhoomi, Dwarka
        </button>
        <button onclick="showCustomEvent(2)" class="event-btn">
          Chennai Trade Center
        </button>
      </div>

      <!-- Event Content -->
      <div class="row event-box mt-4">
        <!-- Map Section -->
        <div class="col-12 col-lg-6 col-md-6">
          <div id="custom-event-1-map" class="custom-event-content active">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448580.0429324761!2d76.46935807343746!3d28.553795900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a509578bb01%3A0xc4f9b6f167e3d164!2sYashoBhoomi%20Dwarka!5e0!3m2!1sen!2sus!4v1742968097456!5m2!1sen!2sus"
              width="100%"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <div id="custom-event-2-map" class="custom-event-content">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497495.9630068859!2d80.22219000000001!3d13.055571!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu%2C%20India!5e0!3m2!1sen!2sus!4v1742970948246!5m2!1sen!2sus"
              width="100%"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>

        <!-- Event Description -->
        <div class="col-12 col-lg-6 col-md-6 mb-3">
          <div
            id="custom-event-1-details"
            class="custom-event-content-2 active"
          >
            <div class="event-schedule">
              <p class="custom-event-text">
                The July 2025 edition of <b>Vibrant India 2025</b> will be held
                in <b>Yashobhoomi Dwarka, Sector-25, New Delhi</b>. Visitors and
                exhibitor access is available through <b>Hall No 2</b>.
              </p>

              <p class="custom-event-text">
                <b>Show Dates:</b> July 5th to 7th, 2024 (Saturday, Sunday &
                Monday)
              </p>
              <p class="custom-event-text"><b>Show Timings:</b></p>

              <!-- Responsive Table -->
              <div class="custom-event-table">
                <table class="table table-bordered">
                  <thead class="custom-event-thead">
                    <tr class="custom-event-tr">
                      <th class="custom-event-th">Date (Day)</th>
                      <th class="custom-event-th">Visiting Time</th>
                    </tr>
                  </thead>
                  <tbody class="custom-event-tbody">
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">July 5, 2024 (Saturday)</td>
                      <td class="custom-event-td">10:00 am - 07:00 pm</td>
                    </tr>
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">July 6, 2024 (Sunday)</td>
                      <td class="custom-event-td">10:00 am - 07:00 pm</td>
                    </tr>
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">July 7, 2024 (Monday)</td>
                      <td class="custom-event-td">10:00 am - 05:00 pm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="custom-event-2-details" class="custom-event-content-2">
            <div class="event-schedule">
              <p class="custom-event-text">
                The July 2025 edition of <b>Vibrant India 2025</b> will be held
                in <b>Chennai Trade Center, Chennai, Tamil Nadu, India</b>.
                Visitors and exhibitor access is available through
                <b>Hall No 2</b>.
              </p>

              <p class="custom-event-text">
                <b>Show Dates:</b> Aug 1st to 3rd, 2025 (Friday, Saturday &
                Sunday)
              </p>
              <p class="custom-event-text"><b>Show Timings:</b></p>

              <!-- Responsive Table -->
              <div class="custom-event-table">
                <table class="table table-bordered">
                  <thead class="custom-event-thead">
                    <tr class="custom-event-tr">
                      <th class="custom-event-th">Date (Day)</th>
                      <th class="custom-event-th">Visiting Time</th>
                    </tr>
                  </thead>
                  <tbody class="custom-event-tbody">
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">Aug 1, 2025 (Friday)</td>
                      <td class="custom-event-td">10:00 am - 07:00 pm</td>
                    </tr>
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">Aug 2, 2025 (Saturday)</td>
                      <td class="custom-event-td">10:00 am - 07:00 pm</td>
                    </tr>
                    <tr class="custom-event-tr">
                      <td class="custom-event-td">Aug 3, 2025 (Sunday)</td>
                      <td class="custom-event-td">10:00 am - 05:00 pm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php
    include "include/footer.php";
    ?>
</body>
</html>