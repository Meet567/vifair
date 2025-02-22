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
    },
  });

  $("#prev1").click(function () {
    owl1.trigger("prev.owl.carousel");
  });
  $("#next1").click(function () {
    owl1.trigger("next.owl.carousel");
  });
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

// *** Active btn ***
function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll(".right-part-show").forEach((section) => {
    section.style.display = "none";
  });
  // Show the selected section
  document.getElementById(sectionId).style.display = "block";
  // Remove active class from all buttons
  document.querySelectorAll(".supported-section-show-btn").forEach((button) => {
    button.classList.remove("active");
  });
  // Add active class to the clicked button
  let activeButton = document.querySelector(
    `button[onclick="showSection('${sectionId}')"]`
  );
  if (activeButton) {
    activeButton.classList.add("active");
  }
  // Save selected section in localStorage
  localStorage.setItem("activeSection", sectionId);
}
// On page load, check if there's a saved section in localStorage
document.addEventListener("DOMContentLoaded", function () {
  let savedSection = localStorage.getItem("activeSection") || "section1"; // Default to section1
  showSection(savedSection);
});
// --- End Supported Company Section ---

// --- Data Fetch image ---
function initializeCarousel(data) {
  console.log("Initializing carousel with data:", data);

  // Initialize the first carousel
  $(".carousel-container1").each(function () {
    let carouselId = $(this).data("carousel");
    let images = data.carousels[carouselId];

    if (images) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel1 = $(this);
      $carousel1.empty(); // Clear previous images to prevent duplication

      images.forEach((image) => {
        $carousel1.append(` <div class="item">
                        <a href="${image.src}" class="popup-link">
                            <img src="${image.src}" alt="${image.alt}">
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
      $carousel1.find(".popup-link").magnificPopup({
        type: "image",
        gallery: { enabled: true },
      });
    }
  });

  // Initialize the second carousel with different settings
  $(".carousel-container2").each(function () {
    let carouselId = $(this).data("carousel");
    let images = data.carousels[carouselId];

    if (images) {
      console.log(`Adding images for Carousel ${carouselId}`);
      let $carousel2 = $(this);
      $carousel2.empty();

      images.forEach((image) => {
        $carousel2.append(
          `<div class="item"><img src="${image.src}" alt="${image.alt}"></div>`
        );
      });

      // Different settings for the second carousel
      $carousel2.owlCarousel({
        stagePadding: 20,
        loop: true,
        margin: 20,
        nav: true, // Enable navigation buttons for the second carousel
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
          0: { items: 1 },
          600: { items: 3 },
          1000: { items: 3 },
        },
      });
    }
  });
}
// Run carousel setup when document is ready
$(document).ready(function () {
  initializeCarousel(carouselData);
});

// --- End Data Fetch Image ---

// Visitor Business proflie js and job proflie start js
document.addEventListener("DOMContentLoaded", function () {
  function generateSegments(data, containerId) {
    const container = document.getElementById(containerId);
    if (!container || !Array.isArray(data) || data.length === 0) return;

    container.innerHTML = data
      .map(
        (item) => `
        <div class="visitor-segmentation-segment" data-aos="zoom-in" data-aos-duration="1000">
          <h3 class="visitor-segmentation-count" data-count="${item.count}">0%</h3>
          <p class="visitor-segmentation-text">${item.name}</p>
        </div>`
      )
      .join("");
  }

  if (typeof businessProfileData !== "undefined") {
    generateSegments(businessProfileData, "businessProfile");
  }
  if (typeof jobProfileData !== "undefined") {
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
      <div class="mix ${item.category} col-xl-3 col-md-4 col-12 col-sm-6 pd">
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

// ✅ Initialize AOS
AOS.init();
