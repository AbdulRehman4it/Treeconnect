<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
  <?php include_once './inc/nav.php';?>

      <section class="2xl:px-28 lg:px-10 px-5 2xl:pt-36 lg:pt-24 pt-10">
        <div class="text-center">
          <div>
            <img src="./assets/img/backk.png" class="w-full" alt="">
          </div>
          <div class="pt-10 xl:px-28">
            <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white" >À l’origine de TreeConnect</h1>
            <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-5 2xl:leading-[44px] lg:leading-8 leading-7 ">TreeConnect est né d’un constat simple : les grandes entreprises disposent de ressources,
              d’experts et d’outils de pointe pour garder une longueur d’avance.
              Les petites structures, elles, sont souvent freinées par l’administratif, des systèmes complexes et
              un manque de moyens.
              Elles peinent à croître, prisonnières d’un cycle où elles essaient de suivre le rythme… sans jamais
              vraiment y parvenir.</p>
            
          </div>
        </div>

        <div class="xl:pt-24 pt-10 flex md:flex-row flex-col gap-5">
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl " >
                <img src="./assets/img/moment.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">Tout a commencé par une évidence</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">Sur le terrain, d’un secteur à l’autre, nous avons
                  vu la même réalité se répéter.
                  Dans les grandes entreprises, chaque fonction
                  est portée par un expert. Les outils sont
                  choisis, optimisés, intégrés avec méthode.
                  Dans les petites structures, ce sont souvent
                  une ou deux personnes qui portent tout : la
                  stratégie, l’administratif, les outils, la
                  communication. Elles courent après le temps,
                  s’éloignent de leur cœur de métier, et perdent
                  en clarté comme en efficacité.
                  C’est cette prise de conscience qui a donné
                  naissance à TreeConnect : une approche venue
                  du terrain, pensée pour renforcer les équipes,
                  et conçue pour croître sans complexité.</p>
            </div>
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl " >
                <img src="./assets/img/light.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">Un parcours entre deux mondes</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">Pendant quinze ans, notre fondateur a évolué
                  des deux côtés du miroir.
                  Il a accompagné des milliers de collaborateurs
                  dans le secteur public, puis piloté des projets
                  stratégiques au sein de groupes bancaires
                  internationaux, en pleine transformation. En
                  parallèle, il a créé et dirigé plusieurs PME.
                  Deux univers. Deux rythmes. Deux réalités.
                  C’est en naviguant entre ces mondes qu’il a
                  compris : ce ne sont pas les ambitions qui
                  manquent aux petites structures, mais les
                  outils et les experts capables de les faire
                  grandir. </p>
            </div>
            <div class="md:w-1/3 w-full bg-[#3F6893] 2xl:p-12 md:p-6 p-8 rounded-2xl ">
                <img src="./assets/img/method.png" alt="">
                <h1 class="text-white 2xl:text-3xl lg:text-xl text-lg pt-4">L’approche TreeConnect</h1>
                <p class="text-white 2xl:text-xl lg:text-base text-sm 2xl:leading-8 lg:leading-7 leading-6 pt-5">TreeConnect, c’est une équipe d’experts issus
                  des grandes structures, réunis pour servir les
                  petites. Chacun apporte sa maîtrise de son
                  domaine (RH, organisation, finance, IT,
                  communication ) mais surtout une capacité à
                  simplifier, à adapter, à rendre accessible ce qui
                  ne l’était pas.
                  Notre mission : offrir aux PME les outils, les
                  méthodes et les compétences qui font avancer
                  les grandes, sans complexité inutile, et avec un
                  seul objectif en tête : faire grandir les équipes
                  et libérer les dirigeants de la complexité pour
                  qu’ils se concentrent sur l’essentiel.</p>
            </div>
        </div>
        <div class="py-5 flex justify-center">
            <img src="./assets/img/storypicture.png" class="w-full" alt="">
        </div>

        <div class="text-center xl:p-20 md:p-10 p-5 bg-[#3F6893] rounded-3xl">
            <h1 class="2xl:text-[70px] lg:text-5xl text-4xl text-white font-semibold">Ce qui nous distingue</h1>
            <p class="2xl:text-[22px] xl:text-lg text-base text-white pt-5 2xl:leading-[44px] lg:leading-8 leading-7" >Notre mission est claire : offrir aux petites et moyennes entreprises les mêmes leviers que les
              grandes, sans la lourdeur des grands groupes.
              En travaillant au plus près des dirigeants, notre équipe développe une compréhension rapide et
              précise des enjeux terrain.
              Nous rendons l’organisation plus fluide, les outils plus simples et les décisions plus claires pour
              que nos clients puissent avancer plus vite, avec confiance, et se concentrer sur l’essentiel : leur
              croissance.</p>
        </div>
        </section>


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