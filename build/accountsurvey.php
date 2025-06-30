<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">


<div class=" flex items-center justify-center">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Comptabilité & Finance</h1>

    <!-- Description -->
    <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      Ce pilier évalue votre capacité à suivre vos finances, sécuriser votre trésorerie et prendre de bonnes décisions grâce à des indicateurs clairs.  Une bonne organisation financière permet d’éviter les surprises, d’optimiser vos flux et d’orienter vos choix stratégiques.</p>
   
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Disposez-vous d’un tableau de bord financier clair, mis à jour régulièrement, avec vos indicateurs clés (trésorerie, marges, charges, prévisions) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Avez-vous structuré vos processus de facturation, de paiement et de relance pour limiter les erreurs, les retards et les pertes ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Suivez-vous vos charges fixes et variables pour identifier des leviers d’optimisation ou des coûts inutiles ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Anticipez-vous les périodes sensibles (baisse d’activité, pic de charges, investissement) avec des outils de prévision adaptés ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	Utilisez-vous des outils digitaux pour simplifier la gestion financière (facturation, synchronisation bancaire, export comptable, automatisation) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
     <a href="./marketingsurvey.php">
    <button  class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>
</a>
  </div>
</div>
</body>