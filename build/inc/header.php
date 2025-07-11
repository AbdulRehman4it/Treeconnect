<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TreeConnect-Accueil</title>
  <link rel="stylesheet" href="./assets/css/style.css">

  
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>

  <!-- <script src="//code.tidio.co/vxiqlrt5ipq4shg4h60brissqd8hj15z.js" async></script> -->

<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.css" />

<!-- intl-tel-input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/intlTelInput.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#ph");

    if (phoneInput) {
      const iti = window.intlTelInput(phoneInput, {
        initialCountry: "ch",
        onlyCountries: ["ch", "fr", "de", "it"],
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js"
      });

      const form = document.querySelector("form");
      if (form) {
        form.addEventListener("submit", function () {
          // Set full international number into input before submit
          phoneInput.value = iti.getNumber(); // e.g., +41 79 123 45 67
        });
      }
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!--Chart CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function getCompanyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $companyData = [
            'companyName' => ['Nom de l’entreprise', $_POST['companyName'] ?? ''],
            'industry' => ['Secteur d’activité principal', $_POST['industry'] ?? ''],
            'employees' => ['Nombre de collaborateurs actifs (effectif total)', $_POST['employees'] ?? ''],
            'founded' => ['Année de création', $_POST['founded'] ?? ''],
            'location' => ['Localisation', $_POST['location'] ?? ''],
            'contact' => ['Nom et fonction de la personne répondant à l’audit', $_POST['contact'] ?? ''],
            'challenge' => ['Quel est aujourd’hui votre principal défi organisationnel ?', $_POST['challenge'] ?? ''],
        ];

        // Store in session
        $_SESSION['companyData'] = $companyData;
    }
}
if (basename($_SERVER['PHP_SELF']) === 'humansurvey.php') {
    getCompanyInfo();
}
function getHrsurveyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && basename($_SERVER['PHP_SELF']) === 'Administrationsurvey.php') {
        $questions = ['aq1', 'aq2', 'aq3', 'aq4', 'aq5'];
        $scores = ['Oui' => 2, 'Partiellement' => 1, 'Non' => 0];

        $total = 0;
        $answers = [];

        foreach ($questions as $q) {
            $response = $_POST[$q] ?? 'Non répondu';
            $score = $scores[$response] ?? 0;
            $total += $score;
            $answers[$q] = [$response, $score];
        }

        $_SESSION['hr_heading'] = 'Ressources Humaines';
        $_SESSION['hr_score'] = $total;
        $_SESSION['hr_answers'] = $answers;
    }
}
if (basename($_SERVER['PHP_SELF']) === 'Administrationsurvey.php') {
    getHrsurveyInfo();
}

function getAdminSurveyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_form_submitted'])) {
        $questions = ['bq1', 'bq2', 'bq3', 'bq4', 'bq5'];
        $scores = ['Oui' => 2, 'Partiellement' => 1, 'Non' => 0];

        $total = 0;
        $answers = [];

        foreach ($questions as $q) {
            $response = $_POST[$q] ?? 'Non répondu';
            $score = $scores[$response] ?? 0;
            $total += $score;
            $answers[$q] = [$response, $score];
        }

        $_SESSION['admin_heading'] = 'Administration & Back-Office';
        $_SESSION['admin_score'] = $total;
        $_SESSION['admin_answers'] = $answers;
    }
}


if (basename($_SERVER['PHP_SELF']) === 'itsurvey.php') {
    getAdminSurveyInfo();
}


function getITSurveyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $questions = ['cq1', 'cq2', 'cq3', 'cq4', 'cq5'];
        $scores = ['Oui' => 2, 'Partiellement' => 1, 'Non' => 0];

        $total = 0;
        $answers = [];

        foreach ($questions as $q) {
            $response = $_POST[$q] ?? 'Non répondu';
            $score = $scores[$response] ?? 0;
            $total += $score;
            $answers[$q] = [$response, $score];
        }

        $_SESSION['it_heading'] = 'Informatique & Cybersécurité';
        $_SESSION['it_score'] = $total;
        $_SESSION['it_answers'] = $answers;
    }
}


if (basename($_SERVER['PHP_SELF']) === 'accountsurvey.php') {
    getITSurveyInfo();
}

function getAccountingSurveyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $questions = ['dq1', 'dq2', 'dq3', 'dq4', 'dq5'];
        $scores = ['Oui' => 2, 'Partiellement' => 1, 'Non' => 0];

        $total = 0;
        $answers = [];

        foreach ($questions as $q) {
            $response = $_POST[$q] ?? 'Non répondu';
            $score = $scores[$response] ?? 0;
            $total += $score;
            $answers[$q] = [$response, $score];
        }

        $_SESSION['accounting_heading'] = 'Gestion Financière & Comptabilité';
        $_SESSION['accounting_score'] = $total;
        $_SESSION['accounting_answers'] = $answers;
    }
}


if (basename($_SERVER['PHP_SELF']) === 'marketingsurvey.php') {
    getAccountingSurveyInfo();
}


function getMarketingSurveyInfo() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $questions = ['cq1', 'cq2', 'cq3', 'cq4', 'cq5'];
        $scores = ['Oui' => 2, 'Partiellement' => 1, 'Non' => 0];

        $total = 0;
        $answers = [];

        foreach ($questions as $q) {
            $response = $_POST[$q] ?? 'Non répondu';
            $score = $scores[$response] ?? 0;
            $total += $score;
            $answers[$q] = [$response, $score];
        }

        $_SESSION['marketing_heading'] = 'Marketing & Communication';
        $_SESSION['marketing_score'] = $total;
        $_SESSION['marketing_answers'] = $answers;
    }
}


if (basename($_SERVER['PHP_SELF']) === 'resultsurvey.php') {
    getMarketingSurveyInfo();
}
// Always process accounting form if POST data contains dq1
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dq1'])) {
    getAccountingSurveyInfo();
}

// Always process marketing form if POST data contains cq1
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cq1'])) {
    getMarketingSurveyInfo();
}
?>

</head>