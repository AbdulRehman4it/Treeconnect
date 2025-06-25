  <nav class="2xl:px-20 lg:px-10 px-5 2xl:pt-16 lg:pt-9 pt-5" > 
   


  <!-- Navbar Container -->
  <div class="flex justify-between items-center bg-[#3F6893] px-8 py-5 rounded-[40px]">
    
    <!-- Logo -->
    <div>
      <a href="./index.php">
        <img src="./assets/img/logo3.png" class="md:w-32 md:h-12 w-20 h-8" alt="Logo">
      </a>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden lg:block">
      <ul class="flex xl:space-x-14 space-x-10">
        <li><a href="./index.php" class="text-[#D3D3D3] xl:text-lg text-base hover:text-white active">Accueil</a></li>
        
        <!-- Dropdown -->
        <li class="relative group">
          <a href="./services.php">
          <button class="text-[#D3D3D3] xl:text-lg text-base hover:text-white flex items-center gap-1">
            Nos services
            <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        </a>
          <ul class="absolute left-0 pt-4 w-52 bg-[#3F6893] text-white rounded-lg shadow-lg hidden group-hover:block z-50">
            <li><a href="./services.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Création et lancement d’entreprise</a></li>
            <li><a href="./services2.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Ressources humaines</a></li>
            <li><a href="./services3.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Gestion administrative</a></li>
            <li><a href="./services4.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Informatique & Cybersécurité</a></li>
            <li><a href="./services5.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Comptabilité & finance</a></li>
            <li><a href="./services6.php" class="block px-4 py-2 hover:bg-[#35597C] text-base">Marketing & communication</a></li>
          </ul>
        </li>

        <li><a href="./story.php" class="text-[#D3D3D3] xl:text-lg text-base hover:text-white">Notre histoire</a></li>
        <li><a href="./contact.php" class="text-[#D3D3D3] xl:text-lg text-base hover:text-white ">Contactez-nous</a></li>
      </ul>
    </div>

    <!-- Language + Login -->
    <div class="items-center hidden lg:block space-x-5">
      <div class="relative inline-block text-left">
        <div class="relative inline-block text-left top-1">
          <button onclick="toggleDropdown()" class="flex items-center">
            <img id="currentFlag" src="./assets/img/france.png" class="w-6 h-6" alt="flag">
            <svg class="w-4 h-4 ml-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        
          <div id="dropdownMenu" class="hidden absolute mt-2 w-24  bg-[#3F6893] border border-[#3F6893] z-10">
            <ul class="py-1 text-sm text-gray-700 text-center">
              <li>
                <a href="./eng/index.php" onclick="event.preventDefault(); setFlag('./assets/img/united-kingdom.png', this.href)" class="block flex justify-center hover:text-white px-4 py-2 hover:bg-white">
                  <img src="./assets/img/united-kingdom.png" class="w-7" alt="England Flag">
                </a>
              </li>
              <li>
                <a href="#" onclick="event.preventDefault(); setFlag('./assets/img/france.png', this.href)" class="block flex justify-center hover:text-white px-4 py-2 hover:bg-white">
                  <img src="./assets/img/france.png" class="w-7" alt="France Flag">
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <script>
          function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
          }
        
          function setFlag(flagPath, redirectUrl) {
            document.getElementById("currentFlag").src = flagPath;
            document.getElementById("dropdownMenu").classList.add("hidden");
        
            // Delay page redirect so flag updates first
            setTimeout(function () {
              window.location.href = redirectUrl;
            }, 100);
          }
        </script>
        
        
      
      </div>
     <a href="./login.php">
      <button class="text-[#FFFFFF] xl:text-lg text-base py-2 px-10 border border-white rounded-full font-medium">Login</button>
      </a>
    </div>

    <!-- Mobile Toggle Buttons -->
    <div class="lg:hidden z-50">
      <!-- Hamburger -->
      <button id="menu-open" class="text-white focus:outline-none block">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <!-- Close -->
      <button id="menu-close" class="text-white focus:outline-none hidden">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="absolute left-0 right-0 hidden mt-5 bg-[#3F6893] h-[550px] rounded-3xl px-6 py-5 z-40 transition-all duration-300 ease-in-out">
    <ul class="flex flex-col space-y-4 text-center">
      <li><a href="./index.php" class="text-white text-base hover:text-white active">Accueil</a></li>

      <!-- Mobile Dropdown -->
      <li class="relative group">
        <button onclick="toggleMobileDropdown()" class="flex items-center justify-center w-full text-white text-base hover:text-white">
          Nos services
          <svg class="w-4 h-4 ml-2 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <ul id="mobileDropdown" class="hidden mt-2 space-y-2 absolute left-20 md:left-60 p-4 w-56 bg-[#3F6893] text-white rounded-lg shadow-lg group-hover:block z-50">
          <li><a href="./services.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Création et lancement d’entreprise</a></li>
          <li><a href="./services2.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Ressources humaines</a></li>
          <li><a href="./services3.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Gestion administrative</a></li>
          <li><a href="./services4.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Informatique & Cybersécurité</a></li>
          <li><a href="./services5.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Comptabilité & finance</a></li>
          <li><a href="./services6.php" class="block px-4 py-2 hover:bg-[#35597C] text-sm">Marketing & communication</a></li>
        </ul>
      </li>

      <li><a href="./story.php" class="text-white text-base hover:text-white">Notre histoire</a></li>
      <li><a href="./contact.php" class="text-white text-base hover:text-white ">Contactez-nous</a></li>
      <li><a href="./login.php"><button class="text-white">Login</button></a></li>
      <li class="flex justify-center space-x-4 mt-4">
        <a href="./eng/index.php" onclick="event.preventDefault(); setFlagMobile('./assets/img/united-kingdom.png', this.href)">
          <img src="./assets/img/united-kingdom.png" class="w-7 h-7" alt="UK Flag">
        </a>
        <a href="#" onclick="event.preventDefault(); setFlagMobile('./assets/img/france.png', this.href)">
          <img src="./assets/img/france.png" class="w-7 h-7" alt="France Flag">
        </a>
      </li>
      <script>
        function setFlagMobile(flagPath, redirectUrl) {
          // Optionally change current flag (if you want to reflect it in desktop as well)
          const flagImg = document.getElementById("currentFlag");
          if (flagImg) flagImg.src = flagPath;
      
          // Close mobile menu
          document.getElementById("mobile-menu").classList.add("hidden");
      
          // Redirect after slight delay
          setTimeout(function () {
            window.location.href = redirectUrl;
          }, 100);
        }
      </script>
    </ul>
  </div>
  
  
  </nav>

   <!-- Main Navbar Container -->
   
<!-- Toggle navbar Scripts -->
<script>
  function toggleTranslate() {
    const ele = document.getElementById('google_translate_element');
    ele.style.display = ele.style.display === 'none' ? 'block' : 'none';
  }

  function toggleMobileDropdown() {
    const menu = document.getElementById('mobileDropdown');
    menu.classList.toggle('hidden');
  }

  document.getElementById('menu-open').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.remove('hidden');
    document.getElementById('menu-open').classList.add('hidden');
    document.getElementById('menu-close').classList.remove('hidden');
  });

  document.getElementById('menu-close').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.add('hidden');
    document.getElementById('menu-open').classList.remove('hidden');
    document.getElementById('menu-close').classList.add('hidden');
  });
</script>