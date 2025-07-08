<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


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

//     // Define actual question texts
//     $hrQuestionsText = [
//         'aq1' => "Avez-vous une politique RH claire ?",
//         'aq2' => "Disposez-vous d’un processus d’intégration ?",
//         'aq3' => "Effectuez-vous régulièrement des entretiens d’évaluation ?",
//         'aq4' => "Proposez-vous des formations internes ou externes ?",
//         'aq5' => "Avez-vous un système de gestion des performances ?"
//     ];

//     foreach ($_SESSION['hr_answers'] as $q => [$response, $score]) {
//         $questionText = $hrQuestionsText[$q] ?? strtoupper($q); // fallback if key missing
//         echo "<strong>Question:</strong> " . htmlspecialchars($questionText) . "<br>";
//         echo "<strong>Réponse:</strong> " . htmlspecialchars($response) . " (Score: $score)<br><br>";
//     }

//     echo "<strong>Total des points: " . $_SESSION['hr_score'] . " / 10</strong><br><br>";
// } else {
//     echo "<p>Aucune réponse enregistrée pour Ressources Humaines.</p>";
// }

// if (isset($_SESSION['admin_heading'], $_SESSION['admin_score'], $_SESSION['admin_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['admin_heading']) . "</h2><br>";

//     // Define actual question texts for administration
//     $adminQuestionsText = [
//         'bq1' => "Avez-vous une organisation administrative documentée ?",
//         'bq2' => "Utilisez-vous des outils numériques pour la gestion interne ?",
//         'bq3' => "Avez-vous une procédure de gestion documentaire ?",
//         'bq4' => "Disposez-vous d’un suivi des tâches administratives ?",
//         'bq5' => "Avez-vous un référentiel des obligations légales ?"
//     ];

//     foreach ($_SESSION['admin_answers'] as $q => [$response, $score]) {
//         $questionText = $adminQuestionsText[$q] ?? strtoupper($q); // fallback if key not found
//         echo "<strong>Question:</strong> " . htmlspecialchars($questionText) . "<br>";
//         echo "<strong>Réponse:</strong> " . htmlspecialchars($response) . " (Score: $score)<br><br>";
//     }

//     echo "<strong>Total des points: " . $_SESSION['admin_score'] . " / 10</strong><br><br>";
// }


// if (isset($_SESSION['it_heading'], $_SESSION['it_score'], $_SESSION['it_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['it_heading']) . "</h2><br>";

//     // Define actual IT question texts
//     $itQuestionsText = [
//         'cq1' => "Disposez-vous d’un système informatique structuré ?",
//         'cq2' => "Utilisez-vous des solutions cloud sécurisées ?",
//         'cq3' => "Avez-vous une politique de cybersécurité en place ?",
//         'cq4' => "Effectuez-vous des sauvegardes régulières ?",
//         'cq5' => "Disposez-vous d’un plan de continuité d’activité en cas de panne ?"
//     ];

//     foreach ($_SESSION['it_answers'] as $q => [$response, $score]) {
//         $questionText = $itQuestionsText[$q] ?? strtoupper($q); // fallback if missing
//         echo "<strong>Question:</strong> " . htmlspecialchars($questionText) . "<br>";
//         echo "<strong>Réponse:</strong> " . htmlspecialchars($response) . " (Score: $score)<br><br>";
//     }

//     echo "<strong>Total des points: " . $_SESSION['it_score'] . " / 10</strong><br><br>";
// }


// if (isset($_SESSION['accounting_heading']) && isset($_SESSION['accounting_score']) && isset($_SESSION['accounting_answers'])) {
//     echo "<h2>" . htmlspecialchars($_SESSION['accounting_heading']) . "</h2><br>";

//     // Define the actual question texts for accounting
//     $accountingQuestionsText = [
//         'dq1' => "Disposez-vous d’un budget annuel formalisé ?",
//         'dq2' => "Suivez-vous mensuellement vos indicateurs financiers ?",
//         'dq3' => "Avez-vous mis en place une comptabilité analytique ?",
//         'dq4' => "Disposez-vous de tableaux de bord de gestion ?",
//         'dq5' => "Travaillez-vous avec un expert-comptable ou un DAF ?"
//     ];

//     foreach ($_SESSION['accounting_answers'] as $q => [$response, $score]) {
//         $questionText = $accountingQuestionsText[$q] ?? strtoupper($q);
//         echo "<strong>Question:</strong> " . htmlspecialchars($questionText) . "<br>";
//         echo "<strong>Réponse:</strong> " . htmlspecialchars($response) . " (Score: $score)<br><br>";
//     }

//     echo "<strong>Total des points: " . $_SESSION['accounting_score'] . " / 10</strong><br><br>";
// }


// if (
//     isset($_SESSION['marketing_heading']) &&
//     isset($_SESSION['marketing_score']) &&
//     isset($_SESSION['marketing_answers'])
// ) {
//     echo "<h2>" . htmlspecialchars($_SESSION['marketing_heading']) . "</h2><br>";

//     // Define the actual question texts for marketing
//     $marketingQuestionsText = [
//         'cq1' => "Avez-vous une stratégie marketing claire et définie ?",
//         'cq2' => "Disposez-vous d’un plan de communication annuel ?",
//         'cq3' => "Utilisez-vous les réseaux sociaux pour promouvoir vos services ?",
//         'cq4' => "Mesurez-vous la performance de vos actions marketing ?",
//         'cq5' => "Travaillez-vous avec une agence ou un expert en communication ?"
//     ];

//     foreach ($_SESSION['marketing_answers'] as $question => [$response, $score]) {
//         $questionText = $marketingQuestionsText[$question] ?? strtoupper($question); // fallback if not mapped
//         echo "<strong>Question:</strong> " . htmlspecialchars($questionText) . "<br>";
//         echo "<strong>Réponse:</strong> " . htmlspecialchars($response) . " (Score: $score)<br><br>";
//     }

//     echo "<strong>Total des points: " . $_SESSION['marketing_score'] . " / 10</strong><br><br>";
// } else {
//     echo "<p>Aucune donnée disponible. Veuillez remplir le formulaire d'abord.</p>";
// }

///old php view
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

// echo '<div style="font-family: Arial, sans-serif; padding: 30px; max-width: 900px; margin: auto;">';

// // Company Info
// $companyData = $_SESSION['companyData'] ?? [];

// if (!empty($companyData)) {
//     echo '<h2 style="margin-bottom: 10px; color: #003366;">🗂 Données du formulaire (Company Info)</h2>';
//     echo '<table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">';
//     foreach ($companyData as [$label, $value]) {
//         echo "<tr>
//                 <td style='border: 1px solid #ccc; padding: 10px; font-weight: bold; width: 40%; background-color: #f5faff;'>$label</td>
//                 <td style='border: 1px solid #ccc; padding: 10px;'>" . htmlspecialchars($value) . "</td>
//               </tr>";
//     }
//     echo '</table>';
// } else {
//     echo '<p>Aucune donnée soumise.</p>';
// }

// Function to display score table
// function displayScoreBlock($headingKey, $scoreKey, $answersKey) {
//     if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
//         echo "<h2 style='color: #003366; margin-bottom: 10px;'>" . htmlspecialchars($_SESSION[$headingKey]) . "</h2>";
//         echo '<table style="width: 100%; border-collapse: collapse; margin-bottom: 10px;">';
//         foreach ($_SESSION[$answersKey] as $q => [$response, $score]) {
//             echo "<tr>
//                     <td style='border: 1px solid #ccc; padding: 10px; background-color: #eef2f6;'>Réponse à " . strtoupper($q) . "</td>
//                     <td style='border: 1px solid #ccc; padding: 10px;'>" . htmlspecialchars($response) . "</td>
//                     <td style='border: 1px solid #ccc; padding: 10px;'>Score: $score</td>
//                   </tr>";
//         }
//         echo "</table>";
//         echo "<p style='font-weight: bold;'>Total des points: " . $_SESSION[$scoreKey] . " / 10</p>";
//     }
// }


// function displayInterpretation($scoreKey) {
//     if (isset($_SESSION[$scoreKey])) {
//         $score = $_SESSION[$scoreKey];
//         echo "<p style='margin: 10px 0; font-weight: bold;'>📝 Interprétation :</p><div style='border-left: 4px solid #3F6893; padding-left: 10px; margin-bottom: 30px;'>";

//         switch ($score) {
//             case 0:
//                 echo "Score 0 : Aucune démarche RH en place.";
//                 break;
//             case 1:
//                 echo "Score 1 : Très faible structuration RH.";
//                 break;
//             case 2:
//                 echo "Score 2 : Début de structuration RH.";
//                 break;
//             case 3:
//                 echo "Score 3 : Faibles pratiques RH, à renforcer.";
//                 break;
//             case 4:
//                 echo "Score 4 : Pratiques RH minimales, amélioration nécessaire.";
//                 break;
//             case 5:
//                 echo "Score 5 : Moyenne organisation RH, des lacunes à combler.";
//                 break;
//             case 6:
//                 echo "Score 6 : RH relativement structurées, potentiel d’optimisation.";
//                 break;
//             case 7:
//                 echo "Score 7 : Bon niveau RH, quelques points à améliorer.";
//                 break;
//             case 8:
//                 echo "Score 8 : Très bonne structuration RH.";
//                 break;
//             case 9:
//                 echo "Score 9 : RH quasi optimales.";
//                 break;
//             case 10:
//                 echo "Score 10 : Excellente gestion RH !";
//                 break;
//             default:
//                 echo "Score non reconnu.";
//                 break;
//         }

//         echo "</div>";
//     }
// }

// // Display sections
// displayScoreBlock('hr_heading', 'hr_score', 'hr_answers');
// displayInterpretation('hr_score');

// displayScoreBlock('admin_heading', 'admin_score', 'admin_answers');
// displayInterpretation('admin_score');

// displayScoreBlock('it_heading', 'it_score', 'it_answers');
// displayInterpretation('it_score');

// displayScoreBlock('accounting_heading', 'accounting_score', 'accounting_answers');
// displayInterpretation('accounting_score');

// displayScoreBlock('marketing_heading', 'marketing_score', 'marketing_answers');
// displayInterpretation('marketing_score');

// echo '</div>';
?>
<!-- <div style="font-family: 'Segoe UI', sans-serif; background-color: #f9f9fc; color: #333; padding: 30px; margin-top: 40px;">


  <?php //if (!empty($_SESSION['companyData'])): ?>
    <h2 style="color: #003366; border-bottom: 2px solid #d1dbe8; padding-bottom: 5px;">🗂 Données du formulaire (Company Info)</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
      <?php //foreach ($_SESSION['companyData'] as [$label, $value]): ?>
        <tr>
          <td style="border: 1px solid #dbe4f1; padding: 10px; font-weight: bold; background-color: #eef3fa; width: 40%;"><?//= htmlspecialchars($label) ?></td>
          <td style="border: 1px solid #dbe4f1; padding: 10px;"><?//= //htmlspecialchars($value) ?></td>
        </tr>//
      <?php// endforeach; ?>
    </table>
  <?php// else: ?>
    <p style="font-style: italic; color: #888;">Aucune donnée soumise.</p>
  <?php// endif; //?>

  <?php
  
  // function renderBlockInline($headingKey, $scoreKey, $answersKey, $questionsMap, $icon) {
  //     if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
  //         echo "<h2 style='color:#003366; border-bottom: 2px solid #d1dbe8; padding-bottom:5px;'>$icon " . htmlspecialchars($_SESSION[$headingKey]) . "</h2>";
  //         echo "<table style='width:100%; border-collapse:collapse; margin-bottom:10px;'>";
  //         echo "<tr>
  //                 <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Question</th>
  //                 <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Réponse</th>
  //                 <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Score</th>
  //               </tr>";
  //         foreach ($_SESSION[$answersKey] as $q => [$response, $score]) {
  //             $question = $questionsMap[$q] ?? strtoupper($q);
  //             echo "<tr>
  //                     <td style='border:1px solid #ccc; padding:10px;'>" . htmlspecialchars($question) . "</td>
  //                     <td style='border:1px solid #ccc; padding:10px;'>" . htmlspecialchars($response) . "</td>
  //                     <td style='border:1px solid #ccc; padding:10px;'>$score</td>
  //                   </tr>";
  //         }
  //         echo "</table>";
  //         echo "<div style='font-weight:bold; margin-bottom:10px;'>Total des points : " . $_SESSION[$scoreKey] . " / 10</div>";
         
  //     }
  // }

  
  
  // $questionsHR = [
  //     'aq1' => "Avez-vous une politique RH claire ?",
  //     'aq2' => "Disposez-vous d’un processus d’intégration ?",
  //     'aq3' => "Effectuez-vous régulièrement des entretiens d’évaluation ?",
  //     'aq4' => "Proposez-vous des formations internes ou externes ?",
  //     'aq5' => "Avez-vous un système de gestion des performances ?"
  // ];
  // $questionsAdmin = [
  //     'bq1' => "Avez-vous une organisation administrative documentée ?",
  //     'bq2' => "Utilisez-vous des outils numériques pour la gestion interne ?",
  //     'bq3' => "Avez-vous une procédure de gestion documentaire ?",
  //     'bq4' => "Disposez-vous d’un suivi des tâches administratives ?",
  //     'bq5' => "Avez-vous un référentiel des obligations légales ?"
  // ];
  // $questionsIT = [
  //     'cq1' => "Disposez-vous d’un système informatique structuré ?",
  //     'cq2' => "Utilisez-vous des solutions cloud sécurisées ?",
  //     'cq3' => "Avez-vous une politique de cybersécurité en place ?",
  //     'cq4' => "Effectuez-vous des sauvegardes régulières ?",
  //     'cq5' => "Disposez-vous d’un plan de continuité d’activité en cas de panne ?"
  // ];
  // $questionsAccounting = [
  //     'dq1' => "Disposez-vous d’un budget annuel formalisé ?",
  //     'dq2' => "Suivez-vous mensuellement vos indicateurs financiers ?",
  //     'dq3' => "Avez-vous mis en place une comptabilité analytique ?",
  //     'dq4' => "Disposez-vous de tableaux de bord de gestion ?",
  //     'dq5' => "Travaillez-vous avec un expert-comptable ou un DAF ?"
  // ];
  // $questionsMarketing = [
  //     'cq1' => "Avez-vous une stratégie marketing claire et définie ?",
  //     'cq2' => "Disposez-vous d’un plan de communication annuel ?",
  //     'cq3' => "Utilisez-vous les réseaux sociaux pour promouvoir vos services ?",
  //     'cq4' => "Mesurez-vous la performance de vos actions marketing ?",
  //     'cq5' => "Travaillez-vous avec une agence ou un expert en communication ?"
  // ];

  
  // renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '👥');
  // renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '📁');
  // renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '💻');
  // renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '📊');
  // renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '📣');
  ?>
</div> -->


<div  class=" flex items-center justify-center xl:py-20 py-10">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-40 lg:mx-14 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <!-- <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button> -->

    <!-- heading  -->
    <div>
       <h1 class="xl:text-4xl text-2xl font-semibold text-center mb-6">Organizational Maturity Radar - Tree Connect</h1>
    </div>
<?php

$scores = [
  (int)($_SESSION['hr_score'] ?? 0),
  (int)($_SESSION['admin_score'] ?? 0),
  (int)($_SESSION['it_score'] ?? 0),
  (int)($_SESSION['accounting_score'] ?? 0),
  (int)($_SESSION['marketing_score'] ?? 0),
];
?>
   <!-- chart -->
<!-- chart -->
<div id="app" class="">
  <div class="chart-container">
    <canvas id="chart"></canvas>
  </div>
</div>

<script>
  const chartScores = <?= json_encode($scores) ?>;
  console.log("Chart Scores:", chartScores); // Should log: [10, 5, 5, 5, 5] or similar

  const planetChartData = {
    type: 'radar',
    data: {
      labels: [
        'Human Resources',
        'Admin & Back-Office',
        'IT & Cybersecurity',
        'Accounting & Finance',
        'Marketing & Communication'
      ],
      datasets: [
        {
          label: 'A',
          data: chartScores,
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
          min: 0,
          max: 10,
          beginAtZero: true,
          ticks: {
            stepSize: 1,
            display: false
          },
          angleLines: {
            color: 'white'
          },
          grid: {
            circular: true,
            color: 'white'
          },
          pointLabels: {
            color: 'white',
            font: {
              size: function(context) {
                return window.innerWidth <= 768 ? 12 : 16;
              }
            },
            callback: function(label) {
              return window.innerWidth <= 768 ? label.split(' ') : label;
            }
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
        planetChartData: planetChartData,
        chart: null
      };
    },
    mounted() {
      this.createChart('chart', this.planetChartData);
      window.addEventListener('resize', this.redrawChart);
    },
    methods: {
      createChart(chartId, chartData) {
        const ctx = document.getElementById(chartId);
        this.chart = new Chart(ctx, {
          type: chartData.type,
          data: chartData.data,
          options: chartData.options
        });
      },
      redrawChart() {
        if (this.chart) {
          this.chart.destroy();
          this.createChart('chart', this.planetChartData);
        }
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
      
        <?php
        if (isset($_SESSION['hr_score'])) {
    echo "<tr>";
    switch ($_SESSION['hr_score']) {
        case 0:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 1:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
              echo "<td class='border border-white lg:px-8 px-4 py-2'>HR processes are not yet formalized. This pillar represents a good opportunity for structuring.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can help you lay the groundwork for a simple, tailored HR foundation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Clarifies roles, ensures compliance, and builds the foundation for a stable team.</td>";
            break;
        case 2:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>One or two HR elements are present on a case-by-case basis, but overall the approach remains informal or fragmented.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We can work with you to identify and prioritize key HR areas and select tools adapted to small teams.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Increases peace of mind on legal obligations and supports future team growth.</td>";
            break;
        case 3:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Some HR components exist (e.g., contracts or reviews), but there is no overall logic behind them yet.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect supports you in aligning your existing practices into a coherent, replicable HR process.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Supports smooth HR management, even during transitions or rapid growth.</td>";
            break;
        case 4:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Structuring efforts have begun, but key aspects such as onboarding or performance reviews lack consistency.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist you in formalizing easy-to-use, reproducible HR processes (job descriptions, feedback templates, onboarding flows).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Enhances team cohesion and promotes daily engagement.</td>";
            break;
        case 5:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The HR foundation is in place with several working elements. Some areas can be optimized.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect offers lightweight, automated HR tools to help you centralize and save time.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Streamlines HR operations and minimizes administrative errors.</td>";
            break;
        case 6:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your HR approach is generally implemented. Harmonization and partial digitalization could enhance efficiency.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We guide you in transitioning to integrated tools for tracking time off, evaluations, and contracts.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves transparency and professionalizes internal processes.</td>";
            break;
        case 7:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>HR practices are clearly defined and visible. A few rituals can still be systematized.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps you structure regular feedback and define transparent compensation guidelines.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Encourages employee retention and accountability.</td>";
            break;
        case 8:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>HR management is well under control and aligned with your needs. Minor improvements can enhance agility.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We offer strategic HR management tools (talent tracking, workforce forecasting, etc.).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Boosts foresight and supports long-term development.</td>";
            break;
        case 9:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>You have a solid, well-integrated HR system. Only minor adjustments are needed to reach excellence.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect complements your existing setup with employer branding or culture development support.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Strengthens your HR positioning and employer appeal.</td>";
            break;
        case 10:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Human Resources</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your HR system is structured, smooth, and exemplary. It provides a strong foundation for stability and growth.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can support your strategic HR reflection through benchmarks and advanced tools.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Positions you to attract, engage, and grow the right talent.</td>";
            break;
        default:
            echo "<td colspan='3' class='border border-white lg:px-8 px-4 py-2'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";

   
}
?>

    <?php
if (isset($_SESSION['admin_score'])) {
    echo "<tr>";
    switch ($_SESSION['admin_score']) {
        case 0:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux outils administratifs sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités de structuration avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administrative processes are not yet formalized. This is an area that can be gradually structured.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can help you map out key functions and establish the foundation for simple procedures.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Establishes a clear foundation and avoids critical oversights.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Some documents or tasks are tracked occasionally, but without a clear or shared method.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We can offer templates tailored to your business to gradually structure your administrative flows.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Helps structure daily operations to save time and distribute responsibilities more effectively.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Certain processes exist, but they are handled in isolation, often by a single person.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect supports you in formalizing practices and ensuring task continuity even during staff absences.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Strengthens organizational resilience and reduces key-person dependencies.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Basic organization is present but still relies more on habits than written procedures.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist in translating your routines into simple procedures, with basic digital tooling.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Stabilizes administrative activity and eases the onboarding of new team members.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Structuring efforts have begun, but their application remains inconsistent.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect provides accessible tools to reinforce your practices and make them more consistent.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves consistency in tracking and ensures better traceability of information.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Several procedures are in place and followed, with some digital tools supporting them.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We support the integration of simple tools to visualize, track, and automate certain tasks.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Saves time and reduces repetitive or manual tasks.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administrative organization is well defined but could benefit from better centralization or automation.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps centralize your information and create shared, up-to-date references.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Facilitates information sharing and minimizes internal friction.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Procedures are documented, tools are in place, and information is well shared.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist in consolidating your digital tools and streamlining validation and archiving processes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Streamlines collaboration and provides visibility over administrative progress.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration is smooth, proactive, and not overly dependent on a single individual.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps you maintain this level of efficiency through team changes or growth.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Frees up the team to focus on higher value tasks.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administrative organization is complete, clear, and secure. It directly supports overall performance.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We enhance your current system and can suggest additions to automate low-value tasks.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Supports operational continuity and efficient business management.</td>";
            break;
        default:
            echo "<td colspan='4' class='border border-white lg:px-8 px-4 py-2'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>

       
<?php
if (isset($_SESSION['it_score'])) {
    echo "<tr>";
    switch ($_SESSION['it_score']) {
        case 0:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux outils informatiques sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les usages de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Digital tools are used occasionally, without real structure or security measures.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can help you assess your IT setup and digital tools.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Lays a clear and reliable foundation for everyday digital usage.</td>";
            break;
        case 2:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>A basic IT environment exists but is poorly maintained or inconsistent.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist in building a coherent and scalable digital environment.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Supports a more structured and secure work environment.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Digital practices are in place, but their reliability and coherence need improvement.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect offers simple solutions to secure, centralize, and evolve your digital system.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Reduces errors, information loss, and IT-related interruptions.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The IT infrastructure is functional but relies on habits or unintegrated tools.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We help implement collaborative tools and shared usage policies.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves team efficiency and operational continuity.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Digital tools and security practices are present, but their usage is inconsistent.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can support you in selecting and deploying tools suited to your operations.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Limits cybersecurity risks and facilitates internal operations.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The IT environment is generally stable with some early consolidation and documentation.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We strengthen your cybersecurity practices and internal technical documentation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Enhances system stability and team proficiency with digital tools.</td>";
            break;
        case 7:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The IT setup is well structured and meets most daily needs.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect provides robust solutions to maintain a smooth and secure IT system.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves overall productivity and organizational security.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Digital tools are coherent, secure, and suited to internal and client uses.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We optimize your digital infrastructure to ensure scalability and resilience.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Enables growth and evolution without technical disruption.</td>";
            break;
        case 9:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your IT environment is secure and efficient, with regular monitoring practices.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps implement regular audits and advanced security policies.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Protects company data and reputation over the long term.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>IT & Cybersecurity</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your IT system is reliable, forward-thinking, and supports both efficiency and innovation.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We position your IT system as a driver of performance, reputation, and sustainable innovation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Turns your digital system into a strategic advantage for the future.</td>";
            break;
        default:
            echo "<td colspan='4' class='border border-white lg:px-8 px-4 py-2'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>

  <?php
if (isset($_SESSION['accounting_score'])) {
    echo "<tr>";
    switch ($_SESSION['accounting_score']) {
        case 0:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Financial monitoring is very limited or non-existent. It represents a key area for strategic development.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can support you in setting up initial financial indicators tailored to your business.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Establishes a solid foundation to secure cash flow and anticipate deadlines.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Financial data is tracked occasionally, without a regular framework or defined indicators.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We help structure your financial flows (invoicing, payments, reminders) and identify relevant KPIs.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Makes financial flows clearer and reduces late or missed payments.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Basic financial management exists but relies on manual tools or informal routines.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect offers simple and automated tools to ensure reliable tracking of cash flow and margins.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Ensures reliable financial data and improves decision-making.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Financial documents are available, but their use and interpretation remain partial.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist in building accessible financial dashboards that support decision-making.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Provides a concrete and structured view of available financial resources.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Key indicators are tracked but not always updated or used for decision-making.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can enhance your tracking practices with templates adapted to your industry.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Encourages regular and useful reading of economic performance.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Financial tracking is regular and based on simple dashboards or tools.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We support the partial automation of financial processes using interconnected tools.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Saves time in the day-to-day financial management.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Cash flow and data are well organized and used to support decisions.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps connect your financial data to operational decision-making.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves projection capabilities and control over costs and revenue.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your financial management is structured, with a clear and updated overview of company finances.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We facilitate the setup of forecasting and analysis tools to support your growth.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Helps anticipate critical periods or investment needs.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>You proactively manage margins, cash flow, and investments with anticipation of financial challenges.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect offers strategic support to manage margins, investments, and financial risks.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Strengthens financial resilience and overall business strategy.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Accounting & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your financial steering is precise, strategic, and integrated into overall business governance.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We help enhance your current financial steering system and contribute to its strategic evolution.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Turns financial management into a driver for control, optimization, and growth.</td>";
            break;
        default:
            echo "<td colspan='3' class='border border-white lg:px-8 px-4 py-2'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>

<?php
if (isset($_SESSION['marketing_score'])) {
    echo "<tr>";
    switch ($_SESSION['marketing_score']) {
         case 0:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Pose les bases d’une communication utile et accessible.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>No structured communication strategy is currently in place.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect can help you lay the foundation of a visibility strategy tailored to your business.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Establishes the foundation for coherent and accessible visibility.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Some actions are taken occasionally, without a clear direction.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We work with you to identify the right channels and key messages to structure.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Clarifies positioning and offer to target audiences.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Some channels or materials are used, but without consistency or defined strategy.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect supports you in building a coherent identity and a basic communication routine.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Increases consistency in online and offline presence.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Basic elements are in place (logo, website, social media), but they are underutilized.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We help enhance your existing assets and align them with a strategic approach.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Structures the brand image and improves company readability.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>A strategy exists in the background, but it is not formalized or consistently followed.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect offers clear formalization of your marketing strategy and target audiences.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Helps focus communication efforts and measure returns.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Communication is partially planned, with coherence still in development.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We assist with implementing an editorial calendar and basic performance indicators.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Saves time and builds communication routines.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The brand identity is clear and channels are used in an organized way.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect strengthens your content strategy and channel activation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Improves message reach and brand consistency.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>The communication strategy is clear and aligned with your goals and positioning.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We refine your positioning and optimize your materials to increase impact.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Enhances the company’s credibility and appeal.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Actions are consistent, tracked, and adjusted based on measured results.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect helps you manage your visibility with dashboards aligned to your objectives.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Aligns communication with commercial and HR priorities.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Your communication is professional, structured, and actively contributes to business growth.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>We turn your communication into a regular, measurable driver of performance and brand awareness.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Turns communication into a growth and differentiation engine.</td>";
            break;
        default:
            echo "<td colspan='4' class='border border-white lg:px-8 px-4 py-2'>Score non reconnu.</td>";
            break;
    }
    echo "</tr>";
}
?>

      
      </tbody>
    </table>
  </div>
</div>

    <!-- Submit Button -->
    <!-- <button d="sendButton" onclick="nextStep(7)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mt-10">
      Mail me
    </button> -->
<button id="sendButton" onclick="nextStep(7)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mt-10" >Send</button>

  </div>
</div>


</body>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function nextStep(step) {
  if (step === 7) {
    Swal.fire({
      title: 'Enter your email address',
      input: 'email',
      inputLabel: 'We will send the results to this address',
      inputPlaceholder: 'example@email.com',
      inputAttributes: {
        autocapitalize: 'off',
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonText: 'Send',
      cancelButtonText: 'Cancel',
      confirmButtonColor: '#003366'
    }).then((result) => {
      if (result.isConfirmed && result.value) {
        const userEmail = result.value;

        // Disable the send button
        const sendBtn = document.querySelector('#sendButton');
        if (sendBtn) {
          sendBtn.disabled = true;
          sendBtn.textContent = "Sending...";
        }

        fetch('sendmail.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: `user_email=${encodeURIComponent(userEmail)}`
        })
        .then(res => res.text())
        .then(raw => {
          try {
            const data = JSON.parse(raw);

            if (data.status === 'success' || data.success === true) {
              Swal.fire({
  icon: 'success',
  title: 'Email sent!',
  text: 'Results sent successfully.',
  confirmButtonColor: '#003366'
}).then(() => {
  // Redirect after OK is clicked
  window.location.href = 'servey.php'; // Change to your desired page
});
            } else {
              throw new Error(data.message || 'Server error');
            }
          } catch (e) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: e.message,
              confirmButtonColor: '#d33'
            }).then(() => {
  // Redirect after OK is clicked
  window.location.href = 'servey.php'; // Change to your desired page
});

            // Re-enable the button on error
            if (sendBtn) {
              sendBtn.disabled = false;
              sendBtn.textContent = "Send";
            }
          }
        })
        .catch(() => {
          Swal.fire({
            icon: 'error',
            title: 'Network failure',
            text: 'Unable to contact the server.',
            confirmButtonColor: '#d33'
          });

          // Re-enable the button on failure
          if (sendBtn) {
            sendBtn.disabled = false;
            sendBtn.textContent = "Send";
          }
        });
      }
    });
  }
}
</script>
