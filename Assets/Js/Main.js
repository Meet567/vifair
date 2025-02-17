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
$(document).ready(function(){
    var owl = $('.owl-carousel');
    
    owl.owlCarousel({
        stagePadding: 90,
        loop:true,
        margin:10,
        nav: false,  // Disable default nav buttons
        autoplay: true,
        autoplayTimeout: 6000,   // Sets autoplay interval (in ms)
        autoplayHoverPause: true,// Pauses autoplay on hover
        smartSpeed: 3000,
        responsive:{
            0:{
                items:1,
                stagePadding: false
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    // Custom Navigation Buttons
    $(".owl-pre-btn").click(function(){
        owl.trigger('prev.owl.carousel');
    });

    $(".owl-next-btn").click(function(){
        owl.trigger('next.owl.carousel');
    });
});
