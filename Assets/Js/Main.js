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
