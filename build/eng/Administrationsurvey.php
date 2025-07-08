<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php
// Add if not already in header
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
?>



<div class=" flex items-center justify-center xl:py-20 py-10">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">
 
    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Administration & Back-Office</h1>

    <!-- Description -->
  
      <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      This section evaluates how your company handles administrative processes, documentation, tools, and internal coordination. A well-structured back office avoids bottlenecks and frees up time for core activities.
hen administration is unclear or scattered, delays, errors, and stress increase. Clear processes, on the other hand, support team autonomy, client satisfaction, and business continuity.</p>

      <form method="POST" action="./itsurvey.php">
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">1. Have you documented your key internal processes (e.g. client setup, contract follow-up, supplier management)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="bq1"  value="Oui"class="md:w-5 md:h-5 w-4 h-4 accent-[#2d4e72]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq1" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq1"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>
<input type="hidden" name="admin_form_submitted" value="1">
    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">2. Do you use digital tools to automate recurring tasks (reminders, document sending, archiving)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="bq2" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq2" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq2"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">3. Do you have a centralized and secure system for organizing and retrieving your essential documents?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="bq3" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq3" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq3"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">4. Have you identified and addressed internal friction points (validation delays, miscommunication, follow-ups)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="bq4" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq4" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq4"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">5. Do you use a dashboard or system to monitor administrative tasks and key deadlines (contracts, taxes, renewals, etc.)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="bq5" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq5" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="bq5"  value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Submit Button -->
    
    <button type="submit" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mb-4">
    Next
  </button>
</form>
  </div>
</div>
</body>