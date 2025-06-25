<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
 <?php include_once './inc/nav.php';?>

      <section class="2xl:px-28 lg:px-10 px-5 2xl:pt-36 lg:pt-24 pt-10">
        <div class="flex md:flex-row flex-col justify-center xl:gap-28 md:gap-12">
            <!-- <div class="md:w-1/2 w-full flex justify-center md:justify-start">
              <div class="radar xl:w-[550px] xl:h-[550px] lg:w-[400px] lg:h-[400px] md:w-[360px] md:h-[360px] w-[300px] h-[300px] bg-black">

          
                <div class="sweep"></div>
            
                
                <div class="radar-circle" style="top: 0; left: 0; width: 100%; height: 100%;"></div>
                <div class="radar-circle" style="top: 12.5%; left: 12.5%; width: 75%; height: 75%;"></div>
                <div class="radar-circle" style="top: 25%; left: 25%; width: 50%; height: 50%;"></div>
                <div class="radar-circle" style="top: 37.5%; left: 37.5%; width: 25%; height: 25%;"></div>
            
                
                <div class="radar-line" style="top: 50%; left: 0; width: 100%; height: 1px;"></div> 
                <div class="radar-line" style="left: 50%; top: 0; width: 1px; height: 100%;"></div> 
            
              
                <div class="absolute top-4 left-1/2 text-white text-lg font-bold" style="transform: translate(-50%, -50%); z-index: 3;">N</div>
                <div class="absolute bottom-4 left-1/2 text-white text-lg font-bold" style="transform: translate(-50%, 50%); z-index: 3;">S</div>
                <div class="absolute top-1/2 left-4 text-white text-lg font-bold" style="transform: translate(-50%, -50%); z-index: 3;">W</div>
                <div class="absolute top-1/2 right-4 text-white text-lg font-bold" style="transform: translate(50%, -50%); z-index: 3;">E</div>
            
                <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-white rounded-full z-10" style="transform: translate(-50%, -50%);"></div>
              </div>
            </div> -->
            <div class="md:w-1/2 w-full pt-10 md:pt-0">
                <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white">Get in Touch</h1>
                <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-4 2xl:leading-[44px] lg:leading-8 leading-7 " >We're here to help you connect the dots and grow your business smarter.</p>

                <form action="./form/php" method="POST" class="xl:pt-20 pt-10 space-y-10">
                    <input type="text" id="name" name="name" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Your Name">
                    <input type="text" id="email" name="email" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="e-mail">  
                    <!-- Phone with flag + code -->
                      <input type="tel" id="ph" name="phone"class="w-full py-4 pl-40 pr-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Phone Number">
                    <input type="text" id="company" name="company" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Company Name (optional)">
                     <input type="text" id="subject" name="subject" class=" w-full py-4 px-6 rounded-full border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Subject">
                    <textarea name="message" id="message" rows="6" class=" w-full py-4 px-6 rounded-2xl border border-[#D3D3D3] text-[#D3D3D3] bg-transparent text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Your Message"></textarea>
                    <!-- Checkbox -->
<label class="inline-flex items-center">
  <input type="checkbox" id="robotCheck" class="form-checkbox checked:bg-transparent h-4 w-4 text-[#D3D3D3]">
  <span class="ml-5 text-white text-sm">I'm not a robot</span>
</label>

<!-- Captcha Animation Box -->
<div id="captchaBox" class="mt-5 hidden flex items-center gap-4">
  <!-- Spinner -->
  <div class="w-6 h-6 border-4 border-white border-t-transparent rounded-full animate-spin"></div>
  <p class="text-white text-sm">Verifying...</p>
</div>

<!-- Success Message -->
<p id="verifiedMessage" class="hidden text-green-400 mt-4">✔ You are verified!</p>

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
<input type="submit" name="submit" id="submit">
                  
                </form>
                <a href="#popup1">
                <button class="mt-10 text-white py-3 px-10 border hover:bg-white hover:text-[#304B68] border-white rounded-full xl:text-lg text-base font-medium">Send Message</button>
              </a>

                <!-- <div class="xl:pt-24 pt-12">
                <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white">Book a Call</h1>
                <p class="2xl:text-[22px] xl:text-lg text-base text-[#D3D3D3] pt-4 2xl:leading-[44px] lg:leading-8 leading-7 " >Let’s talk about your business goals — and how TreeConnect can help you achieve them</p>
            </div>

            <a href="https://wa.me/+41798008483?text=Hello!%20I%20need%20help"  target="_blank">
            <div class="flex justify-between items-center xl:pt-12 pt-8">
                <div class="flex items-center gap-4">
                    <img src="../build/assets/img/watsapp.png"  alt="">
                    <p class="2xl:text-[22px] lg:text-lg text-base font-light text-white" >Chat with us on WhatsApp</p>
                </div>
                <img src="../build/assets/img/nexterrow.png" alt="">
            </div>
          </a>

            <div class="flex justify-between items-center pt-8">
                <div class="flex items-center gap-4">
                    <img src="../build/assets/img/aichat.png"  alt="">
                    <p class="2xl:text-[22px] lg:text-lg text-base font-light text-white" >AI Chat Support</p>
                </div>
                <img src="../build/assets/img/nexterrow.png"  alt="">
            </div>
            <a href="https://calendly.com/treeconnect">
            <div class="flex justify-between items-center pt-8">
              
                <div class="flex items-center gap-4">
                    <img src="../build/assets/img/meeting.png"  alt="">
                    <p class="2xl:text-[22px] lg:text-lg text-base font-light text-white">Schedule a Meeting</p>
                </div>
                <img src="../build/assets/img/nexterrow.png"  alt="">
            </div>
          </a>
            <p class="2xl:text-[22px] lg:text-lg text-base font-light text-[#D3D3D3] xl:pt-14 pt-8">Ready to scale smarter? Book your strategy call now.</p> -->
            </div>
        </div>
      </section>

<?php include_once './inc/footer.php';?>


  <div id="popup1" class="overlay fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="popup bg-[#F5F5F5] relative rounded-lg  w-full">
      
      <!-- ❌ Close Button -->
      <button onclick="closePopup()" class="absolute top-0 right-2 text-white hover:text-[#304B68] text-5xl font-bold">&times;</button>
  
      <div class="flex justify-center bg-[#3F6893] rounded-t-xl py-4">
        <img src="../assets/img/thanks.png" class="w-28" alt="">
      </div>
      <div class="bg-[#304B68] rounded-b-xl py-10">
      <h1 class="2xl:text-3xl text-xl text-[#ffffff] font-semibold">
        Thank you!
      </h1>
      <p class="text-[#D3D3D3] xl:text-lg text-sm pt-2 px-4">
        We have received your request and assigned it to one of our experts,
who will contact you shortly to follow up.
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

<!-- pop up -->
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

<!-- Optional geoIpLookup -->
<script>
  const input = document.querySelector("#phone");
  window.intlTelInput(input, {
    separateDialCode: true,
    initialCountry: "auto",
    geoIpLookup: function (callback) {
      fetch('https://ipinfo.io/json?token=<your_token_here>')
        .then(res => res.json())
        .then(data => callback(data.country))
        .catch(() => callback('us'));
    },
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
  });
</script>


    <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
  
</body>
</html>