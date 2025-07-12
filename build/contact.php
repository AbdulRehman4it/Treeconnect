<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php include_once './inc/nav.php';?>
  
  

      <section class="2xl:px-28 lg:px-10 px-5 2xl:pt-36 lg:pt-24 pt-10">
        <div class="flex md:flex-row flex-col justify-center xl:gap-28 md:gap-12">
            <div class="md:w-1/2 w-full pt-10 md:pt-0">
                <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white">Contactez-nous</h1>
                <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-4 2xl:leading-[44px] lg:leading-8 leading-7 " >Discutons de vos idées, de vos enjeux, et voyons comment TreeConnect peut vous aider à passer à
                  l’étape suivante.</p>

                <form action="./form.php" method="POST" class="xl:pt-20 pt-10 space-y-10">
                    <input type="text" id="name" name="name" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Votre nom">
  <input type="text" id="email" name="email" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Votre adresse e-mail">
                     <!-- Phone with flag + code -->
                     <input type="tel" id="ph" name="phone"class="w-full py-4 pl-40 pr-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Numéro de téléphone">
                    <input type="text" id="company" name="company" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Nom de l’entreprise (optionnel)">
                      <input type="text" id="subject" name="subject" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Objet du message">
                      
                    <textarea name="message" id="message" rows="6" class=" w-full py-4 px-6 rounded-2xl border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Votre message"></textarea>
                    <!-- <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox checked:bg-transparent h-4 w-4 text-[#D3D3D3]" checked>
                        <span class="ml-5 text-white text-sm">Je ne suis pas un robot</span>
                      </label> -->

                      <!-- Checkbox -->
<!-- <label class="inline-flex items-center">
  <input type="checkbox" id="robotCheck" class="form-checkbox checked:bg-transparent h-4 w-4 text-[#D3D3D3]">
  <span class="ml-5 text-white text-sm">Je ne suis pas un robot</span>
</label> -->

<!-- Captcha Animation Box -->
<!-- <div id="captchaBox" class="mt-5 hidden flex items-center gap-4"> -->
  <!-- Spinner -->
  <!-- <div class="w-6 h-6 border-4 border-white border-t-transparent rounded-full animate-spin"></div>
  <p class="text-white text-sm">Verifying...</p>
</div> -->

<!-- Success Message -->
<!-- <p id="verifiedMessage" class="hidden text-green-400 mt-4">✔ Ouf! Vous êtes bien humain</p>
<br> -->
<!-- Script -->
<script>

  const checkbox = document.getElementById("robotCheck");
  const captchaBox = document.getElementById("captchaBox");
  const verifiedMsg = document.getElementById("verifiedMessage");

  checkbox.addEventListener("change", function () {
    if (this.checked) {
      captchaBox.classList.remove("hidden");
      verifiedMsg.classList.add("hidden");

      // Simulate captcha loading
      setTimeout(() => {
        captchaBox.classList.add("hidden");
        verifiedMsg.classList.remove("hidden");
      }, 3000); // 3 seconds
    } else {
      captchaBox.classList.add("hidden");
      verifiedMsg.classList.add("hidden");
    }
  });
</script>
<div class="g-recaptcha" data-sitekey="6Lfa9X8rAAAAAEuyzvow9LOJ3qF29MbZCCTqFNaW"></div>
<!-- <div class="mt-4" style="transform: scale(0.95); transform-origin: 0;">
  <div class="g-recaptcha" data-sitekey="6Lfh2X8rAAAAAL-VrgrUkkY77YZXrYcPyMyLleVz"></div>
</div> -->
 <input type="submit" name="submit" id="submit" class="mt-10 text-white py-3 px-10 border border-white hover:bg-white hover:text-[#304B68] rounded-full xl:text-lg text-base font-medium">
                  
                </form>
                <!-- <a href="#popup1">
                <button class="mt-10 text-white py-3 px-10 border border-white hover:bg-white hover:text-[#304B68] rounded-full xl:text-lg text-base font-medium">Soumettre </button>
              </a> -->
            </div>
        </div>
      </section>


    <?php include_once './inc/footer.php';?>







  <div id="popup1" class="overlay fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="popup bg-[#F5F5F5] relative rounded-lg  w-full">
      
      <!-- ❌ Close Button -->
      <button onclick="closePopup()" class="absolute right-2 text-white hover:text-[#304B68] text-5xl font-bold">&times;</button>
  
      <div class="flex justify-center bg-[#3F6893] rounded-t-xl py-4">
        <img src="./assets/img/thanks.png" class="w-28" alt="">
      </div>
      <div class="bg-[#304B68] rounded-b-xl py-10">
      <h1 class="2xl:text-3xl text-xl text-[#ffffff] font-semibold px-4">
        Merci pour votre message.
      </h1>
      <p class="text-[#D3D3D3] xl:text-lg text-sm pt-2 px-4">
        Nous avons bien reçu votre demande et l’avons transmise à l’un de nos
experts, qui vous contactera prochainement pour faire le point.
      </p>
    </div>
    </div>
  </div>




  
  <!-- drop down  -->
  <script>
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
  </script>
<script>

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
</script>


  <script>
    function closePopup() {
      document.getElementById("popup1").style.display = "none";
    }
  </script>
  
 <!-- smooth animation  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
 <script src="https://unpkg.com/@studio-freight/lenis@latest"></script>
 <script>
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
 </script>


<!-- intl-tel-input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>



    <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
  
    <script>
      AOS.init();
    </script>
    <script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lfh2X8rAAAAAL-VrgrUkkY77YZXrYcPyMyLleVz', {action: 'submit'}).then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
    });
});
</script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>