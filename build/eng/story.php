<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
  <?php include_once './inc/nav.php';?>
      <section class="2xl:px-28 lg:px-10 px-5 2xl:pt-36 lg:pt-24 pt-10">
        <div class="text-center">
          <div>
            <img src="../assets/img/backk.png" class="w-full" alt="">
          </div>
          <div class="pt-10 xl:px-28">
            <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white" >What Drives Us</h1>
            <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-5 2xl:leading-[44px] lg:leading-8 leading-7 ">TreeConnect started with one simple realization: Big companies have the resources, the teams of experts, and the cutting-edge tools to stay ahead. On the other hand, small businesses are often bogged down by administrative work, complex systems, and lack of resources. They struggle to grow, stuck in a cycle of trying to keep up but always falling short.</p>
          
          </div>
        </div>

        <div class="xl:pt-24 pt-10 flex md:flex-row flex-col gap-5">
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl " >
                <img src="../assets/img/moment.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">A Breakthrough Moment</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">In leading diverse projects across multiple industries, we experienced firsthand what makes a business thrive and what holds it back.
                  The tools that help big companies win don’t have to be complicated. If simplified, they can become the secret weapon for small businesses too.
                  This insight became the foundation of TreeConnect: born from real-world experience, designed to empower teams, and built to scale without the complexity.</p>
            </div>
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl " >
                <img src="../assets/img/light.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">How We Got Here</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">Our founder spent 15 years in both worlds—working inside multinational companies and partnering with SMEs. He saw the strengths of big corporations and the struggles of small businesses.</p>
            </div>
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl ">
                <img src="../assets/img/method.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">Our Method</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">We bring together a dedicated team of expert specialists, each focused on a crucial area of business. These experts  learn and innovate, drawing on best practices from large corporations.</p>
            </div>
        </div>
        <div class="py-5 flex justify-center">
            <img src="../assets/img/storypicture.png" class="w-full" alt="">
        </div>

        <div class="text-center xl:p-20 md:p-10 p-5 bg-[#3F6893] rounded-3xl">
            <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white font-semibold">What Sets Us Apart</h1>
            <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-5 2xl:leading-[44px] lg:leading-8 leading-7 " >At TreeConnect, our mission is simple  to level the playing field for small and medium-sized businesses. By working closely with many SMEs, our expert team gains rapid insights and experience similar to big corporate teams, but without the slow pace and bureaucracy. We simplify what’s complicated, helping businesses perform better, move faster, and stay focused on what matters most  their growth and success.</p>
        </div>
        </section>
`

<!-- footer  -->
<?php include_once './inc/footer.php';?>



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

    <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="anonymous"></script>
  
</body>
</html>