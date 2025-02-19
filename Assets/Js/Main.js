// Header Toggle Button

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

// OWL Carousel
$(document).ready(function () {
  var owl = $(".owl-carousel");

  owl.owlCarousel({
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

  // Custom Navigation Buttons
  $(".owl-pre-btn").click(function () {
    owl.trigger("prev.owl.carousel");
  });

  $(".owl-next-btn").click(function () {
    owl.trigger("next.owl.carousel");
  });
});
// Generate Segments for Profiles
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

  // Animate Counting Numbers
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

// Generate Product Segments
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
              <img src="${product.src}" alt="${product.title}" class="img-fluid" />
            </div>
            <div class="product-title">${product.title}</div>
          </div>
        </div>`
      )
      .join("");
    rowHtml += `</div>`;
  }

  productContainer.innerHTML = rowHtml;
});

// Off-canvas Gallery Section
function openSection(event, sectionId) {
  var sections = document.querySelectorAll(".section_tab");
  var tabs = document.querySelectorAll(".tab-link");

  sections.forEach((section) => section.classList.remove("active"));
  tabs.forEach((tab) => tab.classList.remove("active"));

  document.getElementById(sectionId)?.classList.add("active");
  event.currentTarget.classList.add("active");
}

// Populate Galleries
function populateGallery(data, galleryId) {
  const galleryList = document.getElementById(galleryId);
  if (!galleryList || !Array.isArray(data)) return;

  data.forEach((item) => {
    const div = document.createElement("div");
    div.classList.add(
      "mix",
      item.category,
      "col-xl-3",
      "col-md-4",
      "col-12",
      "col-sm-6",
      "pd"
    );

    div.innerHTML = `
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
    `;
    galleryList.appendChild(div);
  });
}

// Ensure Galleries Are Populated
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
});

// Initialize Mixitup for Gallery Filtering
document.addEventListener("DOMContentLoaded", function () {
  var containerEl = document.querySelector(".gallery-item");
  if (containerEl) {
    mixitup(containerEl, {
      animation: {
        effects: "fade translateZ(-100px)",
        effectsIn: "fade translateY(-100%)",
        easing: "cubic-bezier(0.645, 0.045, 0.355, 1)",
      },
    });
  }

  $("[data-fancybox]").fancybox({
    loop: true,
    hash: true,
    transitionEffect: "slide",
    clickContent: function (current, event) {
      return current.type === "image" ? "next" : false;
    },
  });

  // Initialize AOS
  AOS.init();
});
