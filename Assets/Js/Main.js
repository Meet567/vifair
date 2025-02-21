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
<<<<<<< HEAD
  
// --- End OWL Carousel ---


// --- Primary Btn ---
    let link = document.querySelector(".primary-btn");
    let pink = document.querySelector(".primary-btn-color");

    let hoverTL = gsap.timeline({ paused: true });

    hoverTL.to(pink, {
      width: "calc(100% + 1.3em)",
      ease: "elastic.out(0.25, 0.3)",
      duration: 0.4
    });

    hoverTL.to(pink, {
      width: "2em",
      left: "calc(100% - 1.45em)",
      ease: "elastic.out(0.4, 0.3)",
      duration: 0.6
    });

    link.addEventListener("mouseenter", () => {
      hoverTL.play();
    });

    link.addEventListener("mouseleave", () => {
      hoverTL.reverse();
    });
// --- End Primary Btn ---

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
          1000: { items: 4 }
        }
      });

      $(".popup-link").magnificPopup({
        type: "image",
        gallery: { enabled: true }
      });
    });
  // --- End OWL Carousel Event Gallery Section ---
  
  // --- Supported Comapy Section ---
  function showSection(sectionId) {
      // Hide all sections
      document.querySelectorAll('.right-part-show').forEach(section => {
        section.style.display = 'none';
      });

      // Show the selected section
      document.getElementById(sectionId).style.display = 'block';
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
            items: 3
          },
          600: {
            items: 4
          },
          1000: {
            items: 4
          }
        }
      });
    });
    
    // *** Active btn ***
     function showSection(sectionId) {
    // Hide all sections
    document.querySelectorAll('.right-part-show').forEach(section => {
      section.style.display = 'none';
    });
    // Show the selected section
    document.getElementById(sectionId).style.display = 'block';
    // Remove active class from all buttons
    document.querySelectorAll('.supported-section-show-btn').forEach(button => {
      button.classList.remove('active');
    });
    // Add active class to the clicked button
    let activeButton = document.querySelector(`button[onclick="showSection('${sectionId}')"]`);
    if (activeButton) {
      activeButton.classList.add('active');
    }
    // Save selected section in localStorage
    localStorage.setItem('activeSection', sectionId);
  }
  // On page load, check if there's a saved section in localStorage
  document.addEventListener("DOMContentLoaded", function () {
    let savedSection = localStorage.getItem('activeSection') || 'section1'; // Default to section1
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

            images.forEach(image => {
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
            $carousel1.find('.popup-link').magnificPopup({
                type: 'image',
                gallery: { enabled: true }
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

            images.forEach(image => {
                $carousel2.append(`<div class="item"><img src="${image.src}" alt="${image.alt}"></div>`);
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

=======
// Generate Segments for Profiles
>>>>>>> 7ebb6275b76b5dd34e9731b50b87198dc2612743
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

<<<<<<< HEAD
// Initialize AOS
AOS.init();




=======
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
>>>>>>> 7ebb6275b76b5dd34e9731b50b87198dc2612743
