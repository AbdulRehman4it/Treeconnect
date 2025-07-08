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

// if (isset($_SESSION['admin_heading'], $_SESSION['admin_score'], $_SESSION['admin_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['admin_heading']) . "</h2><br>";

//     foreach ($_SESSION['admin_answers'] as $q => [$response, $score]) {
//         echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
//     }

//     echo "<br><strong>Total des points: " . $_SESSION['admin_score'] . " / 10</strong><br><br>";
// }
// if (isset($_SESSION['it_heading']) && isset($_SESSION['it_score']) && isset($_SESSION['it_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['it_heading']) . "</h2><br>";

//     foreach ($_SESSION['it_answers'] as $q => [$response, $score]) {
//         echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
//     }

//     echo "<br><strong>Total des points: " . $_SESSION['it_score'] . " / 10</strong><br><br>";
// }
// if (isset($_SESSION['accounting_heading']) && isset($_SESSION['accounting_score']) && isset($_SESSION['accounting_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['accounting_heading']) . "</h2><br>";

//     foreach ($_SESSION['accounting_answers'] as $q => [$response, $score]) {
//         echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
//     }

//     echo "<br><strong>Total des points: " . $_SESSION['accounting_score'] . " / 10</strong><br><br>";
// }
?>
<div class=" flex items-center justify-center xl:py-20 py-10">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-48 md:mx-20 rounded-2xl lg:px-16 px-4 py-20">

    <!-- Title -->
    <h1 class="2xl:text-7xl lg:text-5xl text-2xl font-semibold text-center mb-4 text-white">Marketing & Communication</h1>

    <!-- Description -->
    <p class="text-center 2xl:text-xl lg:text-base text-sm pt-4 text-white xl:mb-20 mb-10 2xl:leading-10 lg:leading-8 leading-6">
      This section assesses how your company communicates its value, defines its image, and reaches its target audience. It covers strategy, brand identity, tools, and content planning.Strong marketing increases visibility, credibility, and client acquisition. It requires consistent messaging, professional assets, and smart use of communication channels.</p>
 <form method="POST" action="./resultsurvey.php">
    <!-- Question 1 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">1. Have you defined a clear communication strategy with goals, target audiences, messages, and an editorial calendar?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq1" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">2. Is your visual identity (logo, website, materials) professional and consistent with your positioning?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq2" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 3 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">3. Do you use the right communication channels (social media, email, SEO, events, referrals) to reach your ideal clients?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq3" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 4 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">4. Do you measure the results of your marketing actions (traffic, leads, conversions, awareness)?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq4" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
      </div>
    </div>

    <!-- Question 5 -->
    <div class="bg-[#3F6893] p-6 rounded-2xl shadow-2xl xl:mb-12 mb-6">
      <h2 class="2xl:text-xl md:text-lg text-sm mb-6 text-white">5. Is your communication regular and planned, helping build long-term visibility and brand strength?</h2>
      <div class="flex gap-10 items-center text-white">
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Oui" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Yes</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Partiellement" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>Partially</span></label>
        <label class="flex items-center gap-2"><input type="radio" name="cq5" value="Non" class="md:w-5 md:h-5 w-4 h-4 accent-[#3F6893]"> <span>No</span></label>
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