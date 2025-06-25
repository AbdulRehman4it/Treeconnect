<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TreeConnect-Accueil</title>
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

  <script src="//code.tidio.co/vxiqlrt5ipq4shg4h60brissqd8hj15z.js" async></script>

<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.css" />

<!-- intl-tel-input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#ph");

    if (phoneInput) {
      const iti = window.intlTelInput(phoneInput, {
        initialCountry: "ch",
        onlyCountries: ["ch", "fr", "de", "it"],
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
      });

      const form = document.querySelector("form");
      if (form) {
        form.addEventListener("submit", function () {
          // Set full international number into input before submit
          phoneInput.value = iti.getNumber(); // e.g., +41 79 123 45 67
        });
      }
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!--Chart CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
</head>