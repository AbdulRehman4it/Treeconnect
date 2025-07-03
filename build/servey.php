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
    <!-- <a href="./humansurvey.php">
    <button onclick="nextStep(1)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg">Suivant</button> 
    </a> -->
  </div>
  </div>


 <!-- Step 2 Modal -->
<div id="modalStep2" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Ressources Humaines</h1>

    <!-- Description -->
   
 <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      Ce pilier évalue comment votre entreprise recrute, intègre et suit ses collaborateurs, à travers des outils RH, un cadre structuré et une organisation fluide.  Une gestion RH claire permet d’éviter erreurs, instabilité ou surcoûts, et améliore directement la productivité.
    </p>
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Avez-vous mis en place un processus clair pour le recrutement et l’intégration des nouveaux collaborateurs ? (fiche de poste, entretiens, accueil)</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Menez-vous des entretiens réguliers pour faire le point sur les objectifs, les performances et le bien-être des membres de votre équipe ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Disposez-vous d’un outil ou d’un système permettant de gérer efficacement les contrats, les salaires, les absences et le temps de travail ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Les critères de rémunération, primes et avantages sont-ils définis de manière transparente et appliqués de façon cohérente ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	Avez-vous mis en place un document (manuel, charte ou guide) qui explique clairement les droits, obligations, procédures internes et valeurs de l’entreprise ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    <button onclick="nextStep(2)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>

  </div>
</div>

 <!-- Step 3 Modal -->
<div id="modalStep3" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Administration & Back-Office</h1>

    <!-- Description -->
  
      <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      Ce pilier évalue si votre entreprise est bien organisée en interne : procédures, documents, outils partagés, gestion quotidienne.  Une bonne organisation administrative fait gagner du temps, réduit les erreurs, et évite de dépendre d’une seule personne. Elle libère du temps pour ce qui compte vraiment : clients, projets, chiffre d’affaires.</p>

    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Avez-vous formalisé les principales procédures administratives de votre entreprise (création client, suivi des contrats, gestion fournisseurs, etc.) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#2d4e72]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Utilisez-vous des outils numériques pour automatiser certaines tâches répétitives (relances, envois de documents, archivage, etc.) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Avez-vous un système clair et centralisé pour organiser et retrouver facilement tous vos documents importants ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Disposez-vous d’un tableau de suivi ou d’un système permettant de visualiser en temps réel l’avancement de vos tâches administratives et échéances clés (contrats, assurances, factures, échéances fiscales) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	En cas d’absence ou de départ, une autre personne peut-elle reprendre facilement les tâches administratives sans blocage ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    <button onclick="nextStep(3)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>

  </div>
</div>

 <!-- Step 4 Modal -->
<div id="modalStep4" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Informatique & Cybersécurité</h1>

    <!-- Description -->
 <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
     Ce pilier évalue la qualité de votre environnement numérique : matériel, sécurité, outils collaboratifs, sauvegardes.  Un système bien structuré évite les pannes, fluidifie les échanges et renforce votre image. Il peut aussi devenir un levier d’innovation s’il est bien piloté.</p>
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Votre système informatique est-il structuré et à jour ? (maintenance, matériel, outils collaboratifs…)</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Votre système de sauvegarde est-il fiable, sécurisé, externalisé et adapté à votre volume de données actuel et futur ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Vos outils numériques (messagerie, stockage, gestion des tâches, partage de documents) sont-ils pensés pour faciliter la collaboration interne et les échanges avec vos clients ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Êtes-vous accompagné dans le choix et l’optimisation de vos outils digitaux (ERP, CRM, IA, automatisation, plateformes collaboratives) pour rester à la pointe et gagner en efficacité ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	Les bases de la cybersécurité (mots de passe, gestion des accès, confidentialité) sont-elles connues, mises en œuvre et auditées régulièrement dans votre entreprise ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    <button onclick="nextStep(4)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>

  </div>
</div>

 <!-- Step 5 Modal -->
<div id="modalStep5" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>
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
    <button onclick="nextStep(5)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>

  </div>
</div>

 <!-- Step 6 Modal -->
<div id="modalStep6" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Marketing & Communication</h1>

    <!-- Description -->
    <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      Ce pilier évalue comment votre entreprise se rend visible : stratégie, messages, canaux, image et cohérence globale.  Une bonne communication attire les bons clients, renforce votre marque et soutient la croissance.</p>
 
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Avez-vous défini une stratégie de communication claire, avec des objectifs, des cibles prioritaires, des messages clés et un calendrier d’action ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q1" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Votre identité visuelle (logo, site internet, supports) est-elle cohérente, professionnelle et alignée avec votre positionnement ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q2" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Utilisez-vous les bons canaux de communication (réseaux sociaux, e-mail, référencement, événements, bouche-à-oreille) pour toucher vos clients idéaux ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q3" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Mesurez-vous les résultats de vos actions marketing (trafic, leads, conversions, notoriété, retour sur investissement) ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q4" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	Communiquez-vous de manière régulière et planifiée, avec une approche qui nourrit votre visibilité et votre image dans le temps ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="q5" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    <button onclick="nextStep(6)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
      Suivant
    </button>

  </div>
</div>

 <!-- Step 7 Modal -->
<div id="modalStep7" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-[#3F6893] text-white w-full max-h-[90vh] overflow-y-auto xl:mx-40 lg:mx-14 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button>

    <!-- heading  -->
    <div>
       <h1 class="xl:text-4xl text-2xl font-semibold text-center mb-6">Organizational Maturity Radar - Tree Connect</h1>
    </div>

   <!-- chart -->
<div id="app" class="">
  <div class="chart-container">
    <canvas id="chart"></canvas>
  </div>
</div>

    <script>
  // Responsive labels setup
  const isMobile = window.innerWidth <= 768;

  // Original labels (without \n)
  const originalLabels = [
    'Human Resources',
    'Admin & Back-Office',
    'IT & Cybersecurity',
    'Accounting & Finance',
    'Marketing & Communication'
  ];

  // Data values
  const a = '20';
  const b = '10';
  const c = '30';
  const d = '15';

  const planetChartData = {
    type: 'radar',
    data: {
      labels: originalLabels,
      datasets: [
        {
          label: 'A',
          data: [a, b, 20, 20, d],
          backgroundColor: 'rgba(255, 255, 255, 0.7)',
          borderColor: 'rgba(255, 255, 255, 1)',
          borderWidth: 2,
          fill: true
        }
      ]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        r: {
          angleLines: {
            display: true,
            color: 'white'
          },
          grid: {
            circular: true,
            color: 'white',
            lineWidth: 1
          },
          pointLabels: {
            color: 'white',
            font: {
              size: 16
            },
            callback: function(label) {
              // Mobile → split by word
              if (isMobile) {
                return label.split(' ');
              }
              // Desktop → return as is
              return label;
            }
          },
          ticks: {
            display: false,
            beginAtZero: true
          }
        }
      }
    }
  };

  // Vue App
  new Vue({
    el: "#app",
    data() {
      return {
        planetChartData: planetChartData
      };
    },
    mounted() {
      this.createChart('chart', this.planetChartData);
    },
    methods: {
      createChart(chartId, chartData) {
        const ctx = document.getElementById(chartId);
        new Chart(ctx, {
          type: chartData.type,
          data: chartData.data,
          options: chartData.options
        });
      }
    }
  });

  // Set global font
  Chart.defaults.font.family = "Calibri";
</script>

    <!-- Table  -->
    <div class="overflow-x-auto">
  <div class="rounded-2xl overflow-auto border-[1px] border-white">
    <table class="table-auto w-full text-left 2xl:text-lg text-sm">
      <thead class="text-white">
        <tr>
          <th class="border-t-0 border-white px-10 py-10">Domain</th>
          <th class="border-l border-white px-10 py-2">Structural Maturity Overview</th>
          <th class="border-l border-white px-10 py-2">How TreeConnect can support</th>
          <th class="border-l border-white px-10 py-2">Business Value</th>
        </tr>
      </thead>
      <tbody class="bg-[#3F6893] text-white">
        <tr>
          <td class="border-t border-white px-6 py-16 font-semibold">Human Resources</td>
          <td class="border border-white lg:px-8 px-4 py-2">Your HR approach is generally implemented. Harmonization and partial digitalization could enhance efficiency.</td>
          <td class="border border-white lg:px-8 px-4 py-2">We guide you in transitioning to integrated tools for tracking time off, evaluations, and contracts.</td>
          <td class="border-r-0 border border-white lg:px-8 px-4 py-2">Improves transparency and professionalizes internal processes.</td>
        </tr>
        <tr>
          <td class="border-t border-white px-6 py-16 font-semibold">Administration & Back-Office</td>
          <td class="border border-white lg:px-8 px-4 py-2">Basic organization is present but still relies more on habits than written procedures.</td>
          <td class="border border-white lg:px-8 px-4 py-2">We assist in translating your routines into simple procedures, with basic digital tooling.</td>
          <td class="border-b border-white lg:px-8 px-4 py-2">Stabilizes administrative activity and eases the onboarding of new team members.</td>
        </tr>
        <tr>
          <td class="border-t border-white px-6 py-16 font-semibold">IT & Cybersecurity</td>
          <td class="border border-white lg:px-8 px-4 py-2">A basic IT environment exists but is poorly maintained or inconsistent.</td>
          <td class="border border-white lg:px-8 px-4 py-2">We assist in building a coherent and scalable digital environment.</td>
          <td class="border-b border-white lg:px-8 px-4 py-2">Supports a more structured and secure work environment.</td>
        </tr>
        <tr>
          <td class="border-t border-white px-6 py-16 font-semibold">Accounting & Finance</td>
          <td class="border border-white lg:px-8 px-4 py-2">Financial documents are available, but their use and interpretation remain partial.</td>
          <td class="border border-white lg:px-8 px-4 py-2">We assist in building accessible financial dashboards that support decision-making.</td>
          <td class="border-b border-white lg:px-8 px-4 py-2">Provides a concrete and structured view of available financial resources.</td>
        </tr>
        <tr>
          <td class="border-t border-white px-6 py-16 font-semibold">Marketing & Communication</td>
          <td class="border-b-0 border border-white lg:px-8 px-4 py-2">Non structured communication strategy is currently in place.</td>
          <td class="border-b-0 border border-white lg:px-8 px-4 py-2">TreeConnect can help you lay the foundation of a visibility strategy tailored to your business.</td>
          <td class="border-0 border-white lg:px-8 px-4 py-2">Establishes the foundation for coherent and accessible visibility.</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    <!-- Submit Button -->
    <button onclick="nextStep(7)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mt-10">
      Download
    </button>

  </div>
</div>

  <!-- Step 8 Modal -->
  <div id="modalStep8" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-[#3F6893] p-6 rounded-2xl w-96 text-center">
      <h2 class="text-xl font-semibold mb-4 text-white">Download successfully!</h2>
      <button onclick="closeAllModals()" class="bg-[#3F6893] text-white font-semibold border border-white px-8 py-2 rounded-3xl hover:bg-white hover:text-[#304B68]">Close</button>
    </div>
  </div>

  <script>
    function nextStep(currentStep) {
      document.getElementById(`modalStep${currentStep}`).classList.add("hidden");
      const next = currentStep + 1;
      const nextModal = document.getElementById(`modalStep${next}`);
      if (nextModal) {
        nextModal.classList.remove("hidden");
      }
    }

    function closeAllModals() {
      document.querySelectorAll('[id^="modalStep"]').forEach(modal => modal.classList.add("hidden"));
    }
  </script>

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


<script>
  const responses = {};

  function collectModalData(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;

    const inputs = modal.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
      const label = input.closest('label')?.innerText || input.name;
      if (input.type === 'checkbox') {
        if (!responses[label]) responses[label] = [];
        if (input.checked) responses[label].push(input.value);
      } else if (input.type === 'radio') {
        if (input.checked) {
          responses[label] = input.value;
        }
      } else {
        responses[label] = input.value;
      }
    });
  }

  function goToNextModal(currentId, nextId) {
    collectModalData(currentId);
    document.getElementById(currentId).classList.add('hidden');
    document.getElementById(nextId).classList.remove('hidden');
  }

  function submitSurvey(finalModalId) {
  collectModalData(finalModalId);

  fetch('send-survey-results.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(responses)
  })
  .then(res => res.json())
  .then(result => {
    if (result.success) {
      alert("✅ Survey submitted! Your answers have been sent to your email.");
    } else {
      alert("❌ Failed to send the survey. " + (result.error || ""));
    }
  })
  .catch(err => {
    alert("⚠️ There was an error contacting the server.");
    console.error(err);
  });
}


</script>

</body>
</html>