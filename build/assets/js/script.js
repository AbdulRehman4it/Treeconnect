

// drop down 
 function toggleMobileLangDropdown() {
    const dropdown = document.getElementById("mobileLangDropdown");
    dropdown.classList.toggle("hidden");
  }

  // Optional: Close if clicked outside
  document.addEventListener("click", function(event) {
    const dropdown = document.getElementById("mobileLangDropdown");
    const button = event.target.closest("button");
    if (!dropdown.contains(event.target) && !button) {
      dropdown.classList.add("hidden");
    }
  });


//   language translater 
  
  function toggleDropdown() {
    document.getElementById("dropdownMenu").classList.toggle("hidden");
  }

  function setLanguage(lang) {
    document.getElementById("currentLang").textContent = lang;

    const elements = document.querySelectorAll("[data-i18n]");
    elements.forEach(el => {
      const key = el.getAttribute("data-i18n");
      el.innerHTML = translations[lang][key];
    });

    toggleDropdown();
  }

// <!-- JavaScript for next pre Slider Functionality     -->
   const slider = document.getElementById('slider');
  const prev = document.getElementById('prevSlide');
  const next = document.getElementById('nextSlide');

  let currentIndex = 0;
  const totalSlides = slider.children.length;

  function updateSliderPosition() {
    const offset = -currentIndex * 100;
    slider.style.transform = `translateX(${offset}%)`;

    // Button states
    prev.disabled = currentIndex <= 0;
    next.disabled = currentIndex >= totalSlides - 1;

    prev.classList.toggle('opacity-50', prev.disabled);
    next.classList.toggle('opacity-50', next.disabled);
  }

  next.addEventListener('click', () => {
    if (currentIndex < totalSlides - 1) {
      currentIndex++;
      updateSliderPosition();
    }
  });

  prev.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSliderPosition();
    }
  });

  updateSliderPosition(); // Initial call

// slider oval 
   jQuery(document).ready(function($) {
      "use strict";
  
      var owl = $('#customers-testimonials');
  
      owl.owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1770: {
            items: 3
          }
        }
      });
  
      // 👇 Custom Next and Prev Button Actions
      $('.next-btn').click(function() {
        owl.trigger('next.owl.carousel');
      });
  
      $('.prev-btn').click(function() {
        owl.trigger('prev.owl.carousel');
      });
    });


    // smooth scrooller 

    const lenis = new Lenis({
    duration: 1.2, // Adjust smoothness
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Easing function
    smooth: true,
    smoothTouch: false
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);


telephone 
  document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.querySelector("#ph");

  if (phoneInput) {
    window.intlTelInput(phoneInput, {
      initialCountry: "fr",
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
    });
  }
});