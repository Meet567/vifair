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
        