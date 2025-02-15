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

// about segment js
function generateSegments(data, containerId) {
  const container = document.getElementById(containerId);
  container.innerHTML = data
    .map(
      (item) => `
        <div class="visitor-segmentation-segment">
          <h3 class="visitor-segmentation-count" data-count="${item.count}">0%</h3>
          <p class"visitor-segmentation-text">${item.name}</p>
        </div>`
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
