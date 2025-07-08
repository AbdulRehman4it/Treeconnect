<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
    <?php include_once './inc/nav.php';?>
    <!-- Heading  -->
  <div class="text-center 2xl:pt-24 lg:pt-16 pt-10">
        <h1 class="2xl:text-[90px] lg:text-6xl text-4xl text-white">Audit de maturité</h1>
    </div>


<section class="2xl:px-28 lg:px-10 px-5 2xl:pt-14 lg:pt-10 pt-6">
  <div class="bg-[#3F6893] xl:p-12 p-6 rounded-2xl">
        <div>
            <h1 class="2xl:text-[40px] lg:text-3xl text-2xl text-white">Pourquoi cet audit ?</h1>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-6 2xl:leading-[44px] lg:leading-7 leading-6">Chez TreeConnect, nous croyons qu'une entreprise performante repose autant sur ses outils que sur sa structuration interne. Cet audit a pour but de vous aider à faire un point clair, honnête et pragmatique sur l'organisation de votre entreprise à travers 5 domaines essentiels :</p>

            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
        •	Ressources Humaines
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Administration & Back-Office
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
      •	Informatique & Cybersécurité
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Comptabilité & Finance
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	Marketing & Communication
            </p>

            <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Cet audit est mis à disposition gratuitement pour vous permettre :</h2>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-4 2xl:pt-5">
       •	de prendre du recul sur votre organisation,
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	d'identifier rapidement vos leviers de progression,
            </p>
            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       •	et d'en tirer des enseignements immédiatement exploitables.
            </p>

            <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-8">Vous pouvez le remplir en toute autonomie, sans inscription ni contact obligatoire.</p>

            <h1 class="2xl:text-[40px] lg:text-3xl text-2xl text-white pt-10">Comment ça fonctionne ?</h1>
           

            <div>
                <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Pour chaque question, vous indiquerez si vous avez déjà mis en place l'élément évoqué, s'il est en cours ou inexistant.
  <br> 
                Voici les trois réponses possibles à chaque question :
                </h2>

                <div class="bg-[#3F6893] p-7 mt-8 shadow-xl lg:w-2/3 w-full rounded-2xl">
                    <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	Oui :</span>  l'élément est en place, opérationnel, stable
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	Partiellement :</span>  il est en cours, ou partiellement déployé
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-[#D3D3D3] pt-2 2xl:pt-5">
         <span class="text-white">•	Non :</span>  il n'est pas encore en place
            </p>
                </div>
            </div>

            <div>
                <h2 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-10">Le questionnaire couvre 5 domaines clés, chacun noté sur 10 points. Les scores sont calculés ainsi :</h2>

                <div class="bg-[#3F6893] p-7 mt-8 shadow-xl lg:w-2/3 w-full rounded-2xl">
                    <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• Oui = </span>  2 points
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• Partiellement = </span> 1 points
            </p>

             <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
         <span class="text-[#D3D3D3]">• Non = </span>  0 points
            </p>
                </div>
            </div>

            <div>
                <h1 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Note:</h1>
                 <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       Vos réponses génèrent automatiquement un diagramme radar qui synthétise vos niveaux de maturité et l'analyse est visible immédiatement à l'écran.
            </p>
            </div>

            <!-- <div>
                <h1 class="2xl:text-3xl lg:text-xl text-lg text-white lg;pt-12 pt-8">Final Line:</h1>
                 <p class="2xl:text-[26px] lg:text-base text-sm text-white pt-2 2xl:pt-5">
       This audit is a clear and constructive starting point to identify strengths and development opportunities.
            </p>
            </div> -->
        </div>

        <div class="text-center xl:pt-20 pt-10">
             
      <button  onclick="openPopup()" class="text-[#FFFFFF] xl:text-lg text-base py-2 px-10 border border-white rounded-full font-medium hover:bg-white hover:text-[#304B68]">Commencer</button>
     
        </div>
  </div>
</section>


<!-- footer  -->
<?php include_once './inc/footer.php';?>
<!-- Popup Overlay -->
<div id="popup" class="fixed inset-0 bg-black/40 backdrop-blur-sm z-50 flex items-center justify-center hidden">
  <!-- Scrollable Form Container -->

  <!-- Step 1 Modal -->
  <div id="modalStep1" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">  
      <div class="relative bg-[#3F6893] text-white w-full  max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl xl:p-20 p-8 shadow-lg">
    <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>

    <!-- Form Content -->
    <h2 class="2xl:text-6xl lg:text-4xl text-3xl font-semibold text-center ">Informations générales</h2>
    <p class="text-sm text-center pt-5 text-white">Merci de prendre quelques instants pour nous fournir des informations contextuelles. Cela permet de mieux comprendre la situation de votre entreprise et d’ajuster la lecture des résultats.</p>

    <form id="companyForm" method="POST" action="./humansurvey.php" class="space-y-4 pb-6 xl:pt-20 pt-10">
        <div class="pb-2">
        <label for="" class="text-sm xl:text-base font-Nonrmal">Nom de l’entreprise</label>
      <input type="text" id="companyName" name="companyName" placeholder="Exemple : Cabinet SLV Sàrl" class="w-full border border-white p-3 mt-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] outline-Nonne focus:outline-Nonne" />
      </div>

      <div class="pb-2">
<label for="" class="text-sm xl:text-base font-Nonrmal">Secteur d’activité principal</label>
      <select id="industry" name="industry" class="w-full border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-Nonne focus:outline-Nonne">
        <option value="" >Commerce ou distribution</option>
        <option>Services (ressources humaines, conseil, juridique, etc.)</option>
        <option>Santé ou bien-être</option>
        <option>Technologies de l’information ou activités numériques</option>
        <option>Construction ou immobilier</option>
        <option>Hôtellerie ou restauration</option>
        <option>Industrie ou production</option>
        <option>Éducation ou formation</option>
        <option>Administration publique ou organisation à but non lucratif</option>
        <option>Autre</option>
      </select>
      </div>

      <div class="pb-2">
      <label for="" class="text-sm xl:text-base font-Nonrmal">Nombre de collaborateurs actifs (effectif total)</label>
      <select id="employees" name="employees" class="w-full  border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-Nonne focus:outline-Nonne">
        <option value="">Liste déroulante</option>
        <option>o	1 à 5</option>
        <option>o	6 à 10</option>
        <option>o	11 à 20</option>
        <option>o	21 à 50</option>
        <option>o	Plus de 50</option>
      </select>
      </div>

      <div class="pb-2">

      <label for="founded" class="text-sm xl:text-base font-Nonrmal">Année de création</label>
<select id="founded" name="founded" class="w-full border border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3] mt-3 outline-none focus:outline-none">
  <option value="">Champ numérique (entre 1980 et 2025)</option>
  <?php
    for ($year = 1980; $year <= 2025; $year++) {
      echo "<option value=\"$year\">$year</option>";
    }
  ?>
</select>
      </div>

      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Localisation</label>
      <input type="text" id="location" name="location" placeholder="Exemple : Genève" class="w-full  border border-white p-3 rounded-2xl  mt-3 outline-Nonne focus:outline-Nonne text-white bg-transparent placeholder-[#D3D3D3] placeholder-italic" />
      </div>
      
      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Nom et fonction de la personne répondant à l’audit</label>
      <input type="text" id="contact" name="contact" placeholder="Exemple : Julie Martin – Directrice générale" class="w-full  border border-white p-3 mt-3 outline-Nonne focus:outline-Nonne rounded-2xl text-white bg-transparent placeholder-[#D3D3D3]" />
       </div>

      <div class="pb-2">
       <label for="" class="text-sm xl:text-base font-Nonrmal">Quel est aujourd’hui votre principal défi organisationnel ?</label>
      <input type="text" id="challenge" name="challenge" placeholder="Exemples : Fidélisation des collaborateurs, structuration des processus, visibilité en ligne, gestion de la croissance" class="w-full  border mt-3 outline-Nonne focus:outline-Nonne border-white p-3 rounded-2xl text-white bg-transparent placeholder-[#D3D3D3]" />
      </div>
 <div class="pb-2">
      
      <input type="submit" id="submit" value="Suivant" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg" />
      </div>
      
    </form>
  </div>
  </div>

<!-- JavaScript -->
<script>
  function openPopup() {
    document.getElementById('popup').classList.remove('hidden');
    document.body.classList.add('overflow-hidden'); // Disable background scroll
  }

  function closePopup() {
    document.getElementById('popup').classList.add('hidden');
    document.body.classList.remove('overflow-hidden'); // Re-enable background scroll
  }

  // document.getElementById('companyForm').addEventListener('submit', function (e) {
  //   e.preventDefault();

  //   const companyName = document.getElementById('companyName').value;
  //   const industry = document.getElementById('industry').value;
  //   const employees = document.getElementById('employees').value;
  //   const founded = document.getElementById('founded').value;
  //   const location = document.getElementById('location').value;
  //   const contact = document.getElementById('contact').value;

  //   if (!companyName || !industry || !employees || !founded || !location || !contact) {
  //     alert("Please fill in all required fields.");
  //     return;
  //   }

  //   alert("Form submitted successfully!");
  //   closePopup();
  //   document.getElementById('companyForm').reset();
  // });
</script>

  <script src="https://kit.fontawesome.com/a2ada4947c.js" crossorigin="aNonnymous"></script>

</body>
</html>