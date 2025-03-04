// *** Home- Index Page ***
// --- Header Toggle Button ---
function toggleMenu() {
  var nav = document.getElementById("navLinks");
  var toggleButton = document.getElementById("menuToggle");

  if (nav && toggleButton) {
    nav.classList.toggle("show");

    // Change button icon based on menu state
    toggleButton.innerHTML = nav.classList.contains("show") ? "✖" : "☰";
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

// --- OWL Carousel Event Gallery Section ---
$(document).ready(function () {
  var owl2 = $("#event-gallery");

  owl2.owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: { items: 1 },
      600: { items: 4 },
      1000: { items: 4 },
    },
  });

  $(".popup-link").magnificPopup({
    type: "image",
    gallery: { enabled: true },
  });
});
// --- End OWL Carousel Event Gallery Section ---

// --- Supported Comapy Section ---
function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll(".right-part-show").forEach((section) => {
    section.style.display = "none";
  });

  // Show the selected section
  document.getElementById(sectionId).style.display = "block";
}

$(document).ready(function () {
  var owl3 = $(".supported-owl");

  owl3.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 6000, // Sets autoplay interval (in ms)
    autoplayHoverPause: true, // Pauses autoplay on hover
    smartSpeed: 3000,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 4,
      },
    },
  });
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
  initializeCarousel(carouselData1);
});
// --- End Data Fetch Image Map Function ---
// *** End Home- Index Page ***

// *** Exhibitor Profile ***
// --- FAQ Section ---
document.addEventListener("DOMContentLoaded", () => {
  const faqContainer = document.querySelector(".faq-accordion");

  // ✅ Check if the .faq-accordion element exists before modifying innerHTML
  if (!faqContainer) {
    console.error("Error: .faq-accordion element not found.");
    return;
  }

  // ✅ Check if faqData exists and is an array
  if (!Array.isArray(faqData) || faqData.length === 0) {
    console.error("Error: faqData is not defined or is empty.");
    return;
  }

  // ✅ Populate FAQ dynamically
  faqContainer.innerHTML = faqData
    .map(
      (faq, index) => `
      <div class="faq-accordion-item">
        <div class="faq-accordion-item-header" data-index="${index}">${faq.question}</div>
        <div class="faq-accordion-item-body">
          <div class="faq-accordion-item-body-content">
            <div class="faq-main-content-box">
              <img class="faq-img" src="${faq.image}" alt="FAQ Image">
              <div class="faq-content">${faq.answer}</div>
            </div>
          </div>
        </div>
      </div>`
    )
    .join("");

  // ✅ Attach event listeners safely
  document.querySelectorAll(".faq-accordion-item-header").forEach((header) => {
    header.addEventListener("click", function () {
      document.querySelectorAll(".faq-accordion-item-header").forEach((h) => {
        if (h !== this) {
          h.classList.remove("active");
          h.nextElementSibling.style.maxHeight = "0";
        }
      });

      this.classList.toggle("active");
      this.nextElementSibling.style.maxHeight = this.classList.contains("active")
        ? this.nextElementSibling.scrollHeight + "px"
        : "0";
    });
  });
});
    // *** End Exhibitor Page ***
  
// about segment js  ends
document.addEventListener("DOMContentLoaded", function () {
  function generateSegments(data, containerId) {
    const container = document.getElementById(containerId);
    if (!container || !Array.isArray(data) || data.length === 0) return;

    // Append instead of overwriting to prevent data loss
    data.forEach(item => {
      const segment = document.createElement("div");
      segment.classList.add("visitor-segmentation-segment");
      segment.setAttribute("data-aos", "zoom-in");
      segment.setAttribute("data-aos-duration", "1000");

      segment.innerHTML = `
        <h3 class="visitor-segmentation-count" data-count="${item.count}">0%</h3>
        <p class="visitor-segmentation-text">${item.name}</p>
      `;

      container.appendChild(segment);
    });
  }

  // Ensure `businessProfileData` and `jobProfileData` exist before calling
  if (typeof businessProfileData !== "undefined" && document.getElementById("businessProfile")) {
    generateSegments(businessProfileData, "businessProfile");
  }
  if (typeof jobProfileData !== "undefined" && document.getElementById("jobProfile")) {
    generateSegments(jobProfileData, "jobProfile");
  }

  // ✅ Animate Counting Numbers
  let counters = document.querySelectorAll(".visitor-segmentation-count");
  let observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let target = entry.target;
          let count = parseInt(target.getAttribute("data-count"));
          animateCount(target, count);
          target.parentElement.classList.add("visible");
        }
      });
    },
    { threshold: 0.4 }
  );

  counters.forEach(counter => observer.observe(counter));

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

// Visitor Business proflie js and job proflie end js

// 16 segments js data fech start js
document.addEventListener("DOMContentLoaded", function () {
  const productContainer = document.getElementById("product-container");
  if (!productContainer || typeof products === "undefined") return;

  let rowHtml = "";
  for (let i = 0; i < products.length; i += 4) {
    rowHtml += `<div class="row justify-content-center">`;
    rowHtml += products
      .slice(i, i + 4)
      .map(
        (product) => `
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 d-flex justify-content-center">
          <div class="product-box" data-aos="zoom-in" data-aos-duration="1000">
            <div class="product-img-box">
              <img
                src="${product.src}"
                alt="${product.title}"
                class="img-fluid"
              />
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
});
// 16 segments js data fech end js

// Off-canvas Gallery Section tab start js
function openSection(event, sectionId) {
  document
    .querySelectorAll(".section_tab")
    .forEach((s) => (s.style.display = "none"));
  document
    .querySelectorAll(".tab-link")
    .forEach((t) => t.classList.remove("active"));

  document.getElementById(sectionId)?.classList.add("active");
  document.getElementById(sectionId).style.display = "block";
  event.currentTarget.classList.add("active");
}

// Show only the first section on page load
document.addEventListener("DOMContentLoaded", () => {
  document
    .querySelectorAll(".section_tab")
    .forEach((s, i) => (s.style.display = i ? "none" : "block"));
  document.querySelector(".tab-link")?.classList.add("active");
});
// Off-canvas Gallery Section tab end js

// ✅ Populate Galleries
function populateGallery(data, galleryId) {
  const galleryList = document.getElementById(galleryId);
  if (!galleryList || !data) return;

  galleryList.innerHTML = data
    .map(
      (item) => `
      <div class="mix ${item.category} col-xl-3 col-md-4 col-6 col-sm-6 pd">
        <img src="${item.img}" class="img-thumbnail-gallery"/>
        <div class="gallery-overlay">
          <div class="gallery-overlay-content">
            <a data-fancybox="item" title="click to zoom-in" href="${item.link}">
              <div class="gallery-magnify-icon">
                <span><i class="fa-solid fa-magnifying-glass-plus magnify-icon"></i></span>
              </div>
            </a>
          </div>
        </div>
      </div>`
    )
    .join("");
}

// ✅ Populate multiple galleries dynamically
document.addEventListener("DOMContentLoaded", function () {
  if (typeof delhi23 !== "undefined")
    populateGallery(delhi23, "galleryList-delhi23");
  if (typeof mumbai23 !== "undefined")
    populateGallery(mumbai23, "galleryList-mumbai23");
  if (typeof delhi22 !== "undefined")
    populateGallery(delhi22, "galleryList-delhi22");
  if (typeof delhi19 !== "undefined")
    populateGallery(delhi19, "galleryList-delhi19");
  if (typeof delhi18 !== "undefined")
    populateGallery(delhi18, "galleryList-delhi18");

  // MixItUp Filtering
  const mixers = {};
  document.querySelectorAll(".gallery-item").forEach((containerEl) => {
    const galleryId = containerEl.getAttribute("id");
    if (galleryId) {
      mixers[galleryId] = mixitup(containerEl, {
        animation: {
          effects: "fade scale(0.5)",
          easing: "ease-in-out",
        },
      });
    }
  });

  document.querySelectorAll(".gallery-menu nav").forEach((menu) => {
    const galleryId = menu.getAttribute("data-gallery");
    const mixer = mixers[galleryId];

    if (mixer) {
      menu.querySelectorAll(".gallery-tab-control").forEach((button) => {
        button.addEventListener("click", function () {
          mixer.filter(this.getAttribute("data-filter"));
        });
      });
    }
  });
});

// dropdown js
document.addEventListener("DOMContentLoaded", function () {
  // Select all dropdown items
  document.querySelectorAll(".gallery-dropdown-btn").forEach((item) => {
    item.addEventListener("click", function () {
      // Get the button
      let dropdownButton = document.querySelector(".gallery-dropdown-show-btn");
      // Change button text to clicked item's text
      dropdownButton.textContent = this.textContent;
    });
  });
});

//drop ddown fliter
document.addEventListener("DOMContentLoaded", function () {
  const dropdown = document.querySelector(".gallery-dropdown");

  dropdown.addEventListener("change", function () {
    const filterValue = this.value;
    const mixer = mixitup(".gallery-item"); // Make sure MixItUp is initialized
    mixer.filter(filterValue);
  });
});

// Initialize Fancybox
$("[data-fancybox]").fancybox({
  loop: true,
  hash: true,
  transitionEffect: "slide",
  clickContent: (current) => (current.type === "image" ? "next" : false),
});

// video js start
document.addEventListener("DOMContentLoaded", () => {
  // Wait until the element is available
  const waitForElement = (selector, callback, interval = 100) => {
    const checkElement = setInterval(() => {
      const element = document.getElementById(selector);
      if (element) {
        clearInterval(checkElement);
        callback(element);
      }
    }, interval);
  };

  // Ensure "videos" is defined and an array
  if (typeof videos === "undefined" || !Array.isArray(videos)) {
    console.error("Error: videos is not defined or not an array.");
    return;
  }

  // Load the video container only when it's available
  waitForElement("video-container", (container) => {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("videoFrame");
    const closeButton = document.querySelector(".close-btn");

    videos.forEach((video) => {
      const videoCard = document.createElement("div");
      videoCard.classList.add("video-card");

      videoCard.innerHTML = `
        <img src="https://img.youtube.com/vi/${video.id}/0.jpg" alt="Thumbnail">
        <div class="video-title">${video.title}</div>
      `;

      videoCard.addEventListener("click", () => openModal(video.id));
      container.appendChild(videoCard);
    });

    window.openModal = function (videoId) {
      if (modal && iframe) {
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        modal.style.display = "flex";
      } else {
        console.error("Error: Modal or iframe not found.");
      }
    };

    window.closeModal = function () {
      if (modal && iframe) {
        iframe.removeAttribute("src"); // Prevents unnecessary reloads
        modal.style.display = "none";
      }
    };

    if (closeButton) {
      closeButton.addEventListener("click", closeModal);
    } else {
      console.error("Error: Close button not found.");
    }

    window.onclick = function (event) {
      if (event.target === modal) {
        closeModal();
      }
    };
  });
});


//video js end
// ✅ Initialize AOS
AOS.init();
