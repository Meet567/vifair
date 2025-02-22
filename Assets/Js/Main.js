// ✅ Header Toggle Button
function toggleMenu() {
  var nav = document.getElementById("navLinks");
  var toggleButton = document.getElementById("menuToggle");

  if (nav && toggleButton) {
    nav.classList.toggle("show");

    // Change button icon based on menu state
    toggleButton.innerHTML = nav.classList.contains("show") ? "✖" : "☰";
  }
}

// ✅ OWL Carousel
$(document).ready(function () {
  var owl = $(".owl-carousel");
  if (owl.length) {
    owl.owlCarousel({
      stagePadding: 90,
      loop: true,
      margin: 10,
      nav: false,
      autoplay: true,
      autoplayTimeout: 6000,
      autoplayHoverPause: true,
      smartSpeed: 3000,
      responsive: {
        0: { items: 1, stagePadding: false },
        600: { items: 2 },
        1000: { items: 2 },
      },
    });

    // ✅ Custom Navigation Buttons
    $(".owl-pre-btn").click(() => owl.trigger("prev.owl.carousel"));
    $(".owl-next-btn").click(() => owl.trigger("next.owl.carousel"));
  }
});

// ✅ Generate Visitor Segments
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

// ✅ Generate Product Segments
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

// ✅ Off-canvas Gallery Section
function openSection(event, sectionId) {
  document
    .querySelectorAll(".section_tab")
    .forEach((section) => section.classList.remove("active"));
  document
    .querySelectorAll(".tab-link")
    .forEach((tab) => tab.classList.remove("active"));

  document.getElementById(sectionId)?.classList.add("active");
  event.currentTarget.classList.add("active");
}

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

  // ✅ Fix MixItUp Filtering Issue
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

// ✅ Initialize Fancybox
$("[data-fancybox]").fancybox({
  loop: true,
  hash: true,
  transitionEffect: "slide",
  clickContent: (current) => (current.type === "image" ? "next" : false),
});

// ✅ Initialize AOS
AOS.init();
