<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">

  <?php include_once './inc/nav.php';?>

    <section class="pt-20">
        <div>

            <div class="lg:px-20 px-5 pb-10  lg:pt-0 flex lg:flex-row flex-col items-center md:gap-20 gap-10 ">
                <div class="lg:w-1/2 w-full">
                    <h1 class="text-white md:text-5xl text-4xl">Portail TreeConnect</h1>
                    <!-- <h2 class="font-medium text-white text-lg lg:pt-10 pt-5">Zero Judgment. Full Support.</h2> -->
                    <p class="text-white text-base pt-4 leading-7">Bienvenue sur la plateforme TreeConnect. Cet espace vous donne accès à l’ensemble des outils, logiciels et données essentiels à votre activité, réunis en un seul endroit, pensé pour vous.</p>
                </div>

                <div class="lg:w-1/2 w-full bg-[#3F6893] xl:p-10 p-5 rounded-3xl">
                    <h1 class="text-white md:text-4xl text-3xl text-center">Connexion à TreeConnect</h1>
                    <h2 class="text-white text-lg pt-12 text-center">Votre espace sécurisé pour vos outils, systèmes et informations clés.
</h2>


                    <div class="pt-8">
                        <input type="text" id="" name="" class=" w-full py-2 px-3 rounded-xl border border-[#D3D3D3] text-white bg-[#304B68] text-lg focus:border-[#D3D3D3] focus:outline-none" placeholder="Email">
                     <div x-data="{ show: false }" class="relative w-full  mt-4">
  
  <input :type="show ? 'text' : 'password'"
         id="password"
         class=" w-full py-2 px-3 rounded-xl border border-[#D3D3D3] text-white bg-[#304B68] text-lg focus:border-[#D3D3D3] focus:outline-none"
         placeholder="Mot de passe">

  <!-- Toggle icon button -->
  <button type="button"
          @click="show = !show"
          class="absolute inset-y-0 right-3 flex items-center text-white">
    
    <!-- Eye Icon (visible password) -->
    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
    </svg>

    <!-- Eye Slash Icon (hidden password) -->
    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
         viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a10.05 10.05 0 012.143-3.307m3.36-2.38A9.974 9.974 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-4.043 5.097M15 12a3 3 0 00-3-3m0 0a3 3 0 013 3m-3 0a3 3 0 003 3m-6-3a3 3 0 013-3m9 9L3 3" />
    </svg>
  </button>
</div>
                    </div>

                    <div class="text-end pt-2">
                        <a href="" class="hover:underline text-white">Mot de passe oublié?</a>
                    </div>

                    <div class="text-center pt-10">
                         <button class="bg-[#304B68] hover:bg-white text-white hover:text-[#304B68] text-base font-medium rounded-full px-6 py-2">Connexion</button>
                    </div>

                </div>

                
            </div>
        </div>
    </section>

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
</body>
</html>