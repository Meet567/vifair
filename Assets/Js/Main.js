// *** Home- Index Page ***
// --- Header Toggle Button ---
function toggleMenu() {
  var nav = document.getElementById("navLinks");
  var toggleButton = document.getElementById("menuToggle");

  nav.classList.toggle("show");

  // Change button icon based on menu state
  if (nav.classList.contains("show")) {
    toggleButton.innerHTML = "X"; // × ✖ Close icon✖
  } else {
    toggleButton.innerHTML = "☰"; // Open icon
  }
}
// --- End Header Toggle Button ---


// --- OWL Carousel --- 
$(document).ready(function () {
  var owl1 = $("#carousel1");

  owl1.owlCarousel({
    stagePadding: 90,
    loop: true,
    margin: 10,
    nav: false, // Disable default nav buttons
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: {
        items: 1,
        stagePadding: false,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });
  
  $('#prev1').click(function () {
    owl1.trigger('prev.owl.carousel');
  });
  $('#next1').click(function () {
    owl1.trigger('next.owl.carousel');
  })
});
// --- End OWL Carousel ---


// --- Primary Btn ---
let buttons = document.querySelectorAll(".primary-btn");

buttons.forEach((button) => {
    let pink = button.querySelector(".primary-btn-color");

    button.addEventListener("mouseenter", () => {
        pink.style.width = "100%";
        pink.style.height = "100%";
        pink.style.left = "0";
        pink.style.borderRadius = "25px";
    });

    button.addEventListener("mouseleave", () => {
        pink.style.width = "33px";
        pink.style.height = "33px";
        pink.style.left = "0";
        pink.style.borderRadius = "20px";
    });
});
// --- End Primary Btn ---


// --- Data Fetch image Map Function  ---
  function initializeCarousel(data) {
    console.log("Initializing carousel with data:", data);

  // --- OWL Carousel Event Gallery Section ---
    // event-gallery-owl   @@@@@ Section 1 @@@@@
    $(".event-gallery-owl").each(function () {
        let carouselId = $(this).data("carousel");
        let images = data.carousels[carouselId];

        if (images) {
            console.log(`Adding images for Carousel ${carouselId}`);
            let $carousel1 = $(this);
            $carousel1.empty(); // Clear previous images to prevent duplication

            images.forEach(image => {
              $carousel1.append(` 
                  <div class="item event-gallery-box">
                    <a href="${image.src}" class="popup-link">
                      <img class="event-gallery-img" src="${image.src}" alt="${image.alt}">
                      <div class="event-gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus event-gallery-search"></i>
                      </div>
                    </a>
                </div>`);
            });

            // Initialize Owl Carousel for this specific container
          $carousel1.owlCarousel({      
                // stagePadding: 40,
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: true,
                smartSpeed: 3000,
                responsive: {
                    0: { items: 1, stagePadding: false },
                    600: { items: 4 },
                    1000: { items: 4 },
                },
            });
              // Initialize Magnific Popup for image popups
            $carousel1.find('.popup-link').magnificPopup({
                type: 'image',
                gallery: { enabled: true }
            });
        }
    });
    // --- End OWL Carousel Event Gallery Section ---
    

    // --- Remarks of Exhibitors --- @@@@@ Section 2 @@@@@
    $(".remarks-exhibitors").each(function () {
        let carouselId = $(this).data("carousel");
        let remarksimgs = data.carousels[carouselId];

        if (remarksimgs) {
            console.log(`Adding images for Carousel ${carouselId}`);
            let $carousel2 = $(this);
            $carousel2.empty();

            remarksimgs.forEach(remarksimage => {
              $carousel2.append(`
                  <div class="item remarks-main-box">
                   <div class="testimonial-details-box">
                      <div class="testimonial-background-color"></div>
                      <div class="testimonial-img-box">
                        <img class="testimonial-img" src="${remarksimage.src}" alt="${remarksimage.alt1}">
                      </div>
                      <div class="remarks-work-box">
                        <div class="remarks-name">${remarksimage.alt1}</div>
                        <div class="remarks-company">${remarksimage.alt2}</div>
                      </div>
                    </div> 
                    <p class="remarks-paragraph">${remarksimage.alt3}</p>
                  </div>`);
            });

            // Different settings for the second carousel
            $carousel2.owlCarousel({
                // stagePadding: 10,
                loop: true,
                margin: 10,
                nav: true, // Enable navigation buttons for the second carousel
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                responsive: {
                    0: { items: 1 },
                    600: { items: 1 },
                    1000: { items: 1 },
                },
            });
             $("#remarks-prev2").click(function () {
                $carousel2.trigger("prev.owl.carousel");
            });

            $("#remarks-next2").click(function () {
                $carousel2.trigger("next.owl.carousel");
            });
        }
    });
    // --- End Remarks of Exhibitors ---

     // --- Supported Company Logo --- @@@@@ Section 2 @@@@@
    $(".supported-company").each(function () {
        let carouselId = $(this).data("carousel");
        let supportedimgs = data.carousels[carouselId];

        if (supportedimgs) {
            console.log(`Adding images for Carousel ${carouselId}`);
            let $carousel3 = $(this);
            $carousel3.empty();

          for (let i = 0; i < supportedimgs.length; i += 2) {
                let supportedimage1 = supportedimgs[i];
            let supportedimage2 = supportedimgs[i + 1];
            
            // supportedimgs.forEach(supportedimage => {
              $carousel3.append(`
                <div class="item">
                  <div class="supported-img-box">
                    <img class="supported-company-logo" src="${supportedimage1.src}" alt="${supportedimage1.alt}">
                  </div>
                  ${supportedimage2 ? `
                  <div class="supported-img-box">
                    <img class="supported-company-logo" src="${supportedimage2.src}" alt="${supportedimage2.alt}">
                  </div> ` : ''}
                </div>`);
            }

            // Different settings for the second carousel
            $carousel3.owlCarousel({
                // stagePadding: 10,
                loop: true,
                margin: 10,
                nav: true, // Enable navigation buttons for the second carousel
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                responsive: {
                    0: { items: 3 },
                    600: { items: 4 },
                    1000: { items: 4 },
                },
            });
        }
    });
    // --- End Supported Company Logo ---
}
$(document).ready(function () {
    initializeCarousel(carouselData);
});
// --- End Data Fetch Image Map Function ---
// *** End Home- Index Page ***

// *** Exhibitor Profile ***
// --- FAQ Section ---
document.querySelector(".faq-accordion").innerHTML = faqData.map(faq => `
      <div class="faq-accordion-item">
        <div class="faq-accordion-item-header">${faq.question}</div>
        <div class="faq-accordion-item-body">
          <div class="faq-accordion-item-body-content">
            <div class="faq-main-content-box">
              <img class="faq-img" src="${faq.image}" alt="FAQ Image">
              <div class="faq-content">${faq.answer}</div>
            </div>
          </div>
        </div>
      </div>
    `).join("");

    document.querySelectorAll(".faq-accordion-item-header").forEach(header => {
      header.addEventListener("click", function () {
        document.querySelectorAll(".faq-accordion-item-header").forEach(h => {
          if (h !== this) h.classList.remove("active"), h.nextElementSibling.style.maxHeight = "0";
        });
        this.classList.toggle("active");
        this.nextElementSibling.style.maxHeight = this.classList.contains("active") ? this.nextElementSibling.scrollHeight + "px" : "0";
      });
    });
    // *** End Exhibitor Page ***
  
// about segment js  ends
function generateSegments(data, containerId) {
  const container = document.getElementById(containerId);
  container.innerHTML = data
    .map(
      (item) => `
       <div class="visitor-segmentation-segment" data-aos="zoom-in" data-aos-duration="1000">
  <h3 class="visitor-segmentation-count" data-count="${item.count}">0%</h3>
  <p class="visitor-segmentation-text">${item.name}</p>
</div>
        `
    )
    .join("");
}

generateSegments(businessProfileData, "businessProfile");
generateSegments(jobProfileData, "jobProfile");

document.addEventListener("DOMContentLoaded", function () {
  let counters = document.querySelectorAll(".visitor-segmentation-count");
  let options = { threshold: 0.4 };

  let observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        let target = entry.target;
        let count = parseInt(target.getAttribute("data-count"));
        animateCount(target, count);
        target.parentElement.classList.add("visible");
      }
    });
  }, options);

  counters.forEach((counter) => observer.observe(counter));

  function animateCount(element, targetValue) {
    let start = 0;
    let duration = 1500;
    let stepTime = Math.max(10, Math.floor(duration / targetValue));

    let timer = setInterval(() => {
      start += 1;
      element.textContent = start + "%";
      if (start >= targetValue) clearInterval(timer);
    }, stepTime);
  }
});
// product segament js start

// Get the product container
const productContainer = document.getElementById("product-container");

// Generate rows dynamically
let rowHtml = "";
for (let i = 0; i < products.length; i += 4) {
  rowHtml += `<div class="row justify-content-center">`; // Centering row
  rowHtml += products
    .slice(i, i + 4)
    .map(
      (product) => `
    <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center">
      <div class="product-box" data-aos="zoom-in" data-aos-duration="1000">
        <div class="product-img-box">
          <img src="${product.src}" alt="${product.title}" class="img-fluid" />
        </div>
        <div class="product-title">${product.title}</div>
      </div>
    </div>
  `
    )
    .join("");
  rowHtml += `</div>`;
}

productContainer.innerHTML = rowHtml;
// product segament img js end

// Initialize AOS
AOS.init();




