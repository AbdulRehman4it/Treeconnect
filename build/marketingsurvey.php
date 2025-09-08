<?php include_once './inc/header.php';?>

<body class="bg-[#304B68] overflow-x-hidden">
<?php

?>
<div class=" flex items-center justify-center xl:py-20 py-10">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">

    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Marketing & Communication</h1>

    <!-- Description -->
    <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      Ce pilier évalue comment votre entreprise se rend visible : stratégie, messages, canaux, image et cohérence globale.  Une bonne communication attire les bons clients, renforce votre marque et soutient la croissance.</p>
 <form method="POST" action="./resultsurvey.php">
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">1.	Avez-vous défini une stratégie de communication claire, avec des objectifs, des cibles prioritaires, des messages clés et un calendrier d’action ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">2.	Votre identité visuelle (logo, site internet, supports) est-elle cohérente, professionnelle et alignée avec votre positionnement ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">3.	Utilisez-vous les bons canaux de communication (réseaux sociaux, e-mail, référencement, événements, bouche-à-oreille) pour toucher vos clients idéaux ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">4.	Mesurez-vous les résultats de vos actions marketing (trafic, leads, conversions, notoriété, retour sur investissement) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">5.	Communiquez-vous de manière régulière et planifiée, avec une approche qui nourrit votre visibilité et votre image dans le temps ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
      <button type="submit" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
    Suivant
  </button>
</form>
  </div>
</div>
</body>