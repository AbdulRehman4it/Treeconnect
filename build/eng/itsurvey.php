<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }


// $companyData = $_SESSION['companyData'] ?? [];

// if (!empty($companyData)) {
//     echo '<h2>Données du formulaire (Company Info):</h2>';
//     echo '<ul style="font-family: sans-serif; line-height: 1.6;">';
//     foreach ($companyData as $key => [$label, $value]) {
//         echo "<li><strong>$label:</strong> " . htmlspecialchars($value) . "</li>";
//     }
//     echo '</ul>';
// } else {
//     echo '<p>Aucune donnée soumise.</p>';
// }

// if (isset($_SESSION['hr_heading'], $_SESSION['hr_score'], $_SESSION['hr_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['hr_heading']) . "</h2><br>";

//     foreach ($_SESSION['hr_answers'] as $q => [$response, $score]) {
//         echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
//     }

//     echo "<br><strong>Total des points: " . $_SESSION['hr_score'] . " / 10</strong><br><br>";
// } else {
//     echo "<p>Aucune réponse enregistrée pour Ressources Humaines.</p>";
// }
// // ✅ Display Administration & Back-Office Results
// if (isset($_SESSION['admin_heading'], $_SESSION['admin_score'], $_SESSION['admin_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['admin_heading']) . "</h2><br>";

//     foreach ($_SESSION['admin_answers'] as $q => [$response, $score]) {
//         echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
//     }

//     echo "<br><strong>Total des points: " . $_SESSION['admin_score'] . " / 10</strong><br><br>";
// }
?>

<div class=" flex items-center justify-center">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Informatique & Cybersécurité</h1>

    <!-- Description -->
 <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
     Ce pilier évalue la qualité de votre environnement numérique : matériel, sécurité, outils collaboratifs, sauvegardes.  Un système bien structuré évite les pannes, fluidifie les échanges et renforce votre image. Il peut aussi devenir un levier d’innovation s’il est bien piloté.</p>
    
     <form method="POST" action="./accountsurvey.php">
     <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">1.	Votre système informatique est-il structuré et à jour ? (maintenance, matériel, outils collaboratifs…)</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">2.	Votre système de sauvegarde est-il fiable, sécurisé, externalisé et adapté à votre volume de données actuel et futur ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">3.	Vos outils numériques (messagerie, stockage, gestion des tâches, partage de documents) sont-ils pensés pour faciliter la collaboration interne et les échanges avec vos clients ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">4.	Êtes-vous accompagné dans le choix et l’optimisation de vos outils digitaux (ERP, CRM, IA, automatisation, plateformes collaboratives) pour rester à la pointe et gagner en efficacité ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl text-lg mb-6 text-white">5.	Les bases de la cybersécurité (mots de passe, gestion des accès, confidentialité) sont-elles connues, mises en œuvre et auditées régulièrement dans votre entreprise ?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Oui</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partiellement</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Non</span></label>
      </div>
    </div>

     <button type="submit" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
    Suivant
  </button>
</form>
  </div>
</div>
</body>