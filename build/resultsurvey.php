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


  <?php if (!empty($_SESSION['companyData'])): ?>
    <h2 style="color: #003366; border-bottom: 2px solid #d1dbe8; padding-bottom: 5px;">🗂 Données du formulaire (Company Info)</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
      <?php foreach ($_SESSION['companyData'] as [$label, $value]): ?>
        <tr>
          <td style="border: 1px solid #dbe4f1; padding: 10px; font-weight: bold; background-color: #eef3fa; width: 40%;"><?= htmlspecialchars($label) ?></td>
          <td style="border: 1px solid #dbe4f1; padding: 10px;"><?= htmlspecialchars($value) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else: ?>
    <p style="font-style: italic; color: #888;">Aucune donnée soumise.</p>
  <?php endif; ?>

  <?php
  
  function renderBlockInline($headingKey, $scoreKey, $answersKey, $questionsMap, $icon) {
      if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
          echo "<h2 style='color:#003366; border-bottom: 2px solid #d1dbe8; padding-bottom:5px;'>$icon " . htmlspecialchars($_SESSION[$headingKey]) . "</h2>";
          echo "<table style='width:100%; border-collapse:collapse; margin-bottom:10px;'>";
          echo "<tr>
                  <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Question</th>
                  <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Réponse</th>
                  <th style='border:1px solid #ccc; background-color:#e8eff7; padding:10px;'>Score</th>
                </tr>";
          foreach ($_SESSION[$answersKey] as $q => [$response, $score]) {
              $question = $questionsMap[$q] ?? strtoupper($q);
              echo "<tr>
                      <td style='border:1px solid #ccc; padding:10px;'>" . htmlspecialchars($question) . "</td>
                      <td style='border:1px solid #ccc; padding:10px;'>" . htmlspecialchars($response) . "</td>
                      <td style='border:1px solid #ccc; padding:10px;'>$score</td>
                    </tr>";
          }
          echo "</table>";
          echo "<div style='font-weight:bold; margin-bottom:10px;'>Total des points : " . $_SESSION[$scoreKey] . " / 10</div>";
         
      }
  }

  
  
  $questionsHR = [
      'aq1' => "Avez-vous une politique RH claire ?",
      'aq2' => "Disposez-vous d’un processus d’intégration ?",
      'aq3' => "Effectuez-vous régulièrement des entretiens d’évaluation ?",
      'aq4' => "Proposez-vous des formations internes ou externes ?",
      'aq5' => "Avez-vous un système de gestion des performances ?"
  ];
  $questionsAdmin = [
      'bq1' => "Avez-vous une organisation administrative documentée ?",
      'bq2' => "Utilisez-vous des outils numériques pour la gestion interne ?",
      'bq3' => "Avez-vous une procédure de gestion documentaire ?",
      'bq4' => "Disposez-vous d’un suivi des tâches administratives ?",
      'bq5' => "Avez-vous un référentiel des obligations légales ?"
  ];
  $questionsIT = [
      'cq1' => "Disposez-vous d’un système informatique structuré ?",
      'cq2' => "Utilisez-vous des solutions cloud sécurisées ?",
      'cq3' => "Avez-vous une politique de cybersécurité en place ?",
      'cq4' => "Effectuez-vous des sauvegardes régulières ?",
      'cq5' => "Disposez-vous d’un plan de continuité d’activité en cas de panne ?"
  ];
  $questionsAccounting = [
      'dq1' => "Disposez-vous d’un budget annuel formalisé ?",
      'dq2' => "Suivez-vous mensuellement vos indicateurs financiers ?",
      'dq3' => "Avez-vous mis en place une comptabilité analytique ?",
      'dq4' => "Disposez-vous de tableaux de bord de gestion ?",
      'dq5' => "Travaillez-vous avec un expert-comptable ou un DAF ?"
  ];
  $questionsMarketing = [
      'cq1' => "Avez-vous une stratégie marketing claire et définie ?",
      'cq2' => "Disposez-vous d’un plan de communication annuel ?",
      'cq3' => "Utilisez-vous les réseaux sociaux pour promouvoir vos services ?",
      'cq4' => "Mesurez-vous la performance de vos actions marketing ?",
      'cq5' => "Travaillez-vous avec une agence ou un expert en communication ?"
  ];

  
  renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '👥');
  renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '📁');
  renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '💻');
  renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '📊');
  renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '📣');
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
       <h1 class="xl:text-4xl text-2xl font-semibold text-center mb-6">Radar de maturité organisationnelle - TreeConnect<h1>
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
        'Ressources Humaines',
        'Administration & Back-Office',
        'Informatique & Cybersécurité',
        'Comptabilité & Finance',
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
          <th class="border-t-0 border-white px-10 py-10">Domaine évalué</th>
          <th class="border-l border-white px-10 py-2">Analyse du niveau de maturité</th>
          <th class="border-l border-white px-10 py-2">Accompagnement possible par TreeConnect</th>
          <th class="border-l border-white px-10 py-2">Impact pour votre organisation</th>
        </tr>
      </thead>
      <tbody class="bg-[#3F6893] text-white">
      
        <?php
        if (isset($_SESSION['hr_score'])) {
    echo "<tr>";
    switch ($_SESSION['hr_score']) {
        case 0:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 1:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
              echo "<td class='border border-white lg:px-8 px-4 py-2'>Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable.</td>";
            break;
        case 2:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux aspects RH sont présents de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités RH à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 3:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des éléments RH existent (par exemple, contrats ou entretiens), mais sans logique globale.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect vous accompagne pour articuler vos pratiques RH autour d’un processus cohérent et duplicable.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise une gestion fluide, même en cas de turnover ou de croissance.</td>";
            break;
        case 4:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des démarches structurantes sont engagées, mais certains points clés comme l’intégration ou le suivi manquent de régularité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à formaliser des processus simples et reproductibles (fiche de poste, suivi collaborateur, trame d’entretien).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Améliore la cohésion d’équipe et soutient l’engagement au quotidien.</td>";
            break;
        case 5:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les fondations RH sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous proposer des outils RH légers et automatisés pour centraliser et gagner du temps.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Rend la gestion RH plus fluide et limite les erreurs administratives.</td>";
            break;
        case 6:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre approche RH est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous accompagnons la transition vers des outils intégrés pour le suivi, les absences ou les entretiens.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la transparence et professionnalise la gestion interne.</td>";
            break;
        case 7:
          echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les pratiques RH sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à structurer les feedbacks réguliers ou à définir des grilles de rémunération plus lisibles.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise la fidélisation et la responsabilisation des équipes.</td>";
            break;
        case 8:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>La gestion RH est maîtrisée et adaptée à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous proposons des outils de pilotage RH plus stratégiques (anticipation des besoins, suivi des talents).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Accroît la capacité de projection et soutient le développement à long terme.</td>";
            break;
        case 9:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Vous disposez d’un système RH solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut compléter votre démarche avec des conseils sur la marque employeur ou la culture d’entreprise.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Valorise votre attractivité et soutient votre positionnement RH.</td>";
            break;
        case 10:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Ressources Humaines</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre gestion RH est structurée, fluide et exemplaire. C’est un socle fort pour la stabilité et la croissance.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut nourrir votre réflexion stratégique RH à travers des benchmarks ou des outils avancés.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Vous êtes en position d’attirer, engager et faire évoluer les bons profils.</td>";
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
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux outils administratifs sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités de structuration avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des éléments existent (par exemple, devis ou factures), mais sans logique globale ou centralisée.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect vous accompagne pour articuler vos pratiques de gestion autour d’un processus cohérent et duplicable.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise une gestion fluide, même en cas de turnover ou de croissance.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des démarches structurantes sont engagées, mais certains points clés comme la gestion documentaire ou le suivi manquent de régularité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à formaliser des processus simples et reproductibles (tableau de bord, procédures internes, modèles).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Améliore la cohésion d’équipe et soutient l’efficacité au quotidien.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les bases du back-office sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous proposer des outils simples et automatisés pour centraliser et gagner du temps.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Rend la gestion plus fluide et limite les erreurs administratives.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre back-office est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous accompagnons la transition vers des outils intégrés pour la gestion des documents, du temps ou des contrats.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la transparence et professionnalise la gestion interne.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les pratiques de gestion sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à structurer les outils de suivi régulier ou à définir un plan d’amélioration continue.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise la responsabilisation et fluidifie la gestion collective.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre back-office est structuré et adapté à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous proposons des outils de pilotage plus stratégiques (anticipation, évaluation des charges, indicateurs).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Accroît la capacité d’anticipation et soutient le développement.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Vous disposez d’un système de gestion solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut compléter votre démarche avec des conseils sur l’optimisation ou la culture de gestion.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Valorise la maturité de votre gestion et améliore votre positionnement.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre gestion est structurée, fluide et efficace. C’est un socle fort pour la stabilité et la croissance.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut nourrir votre réflexion stratégique à travers des benchmarks ou des outils avancés.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Vous êtes en position d’anticiper, ajuster et faire évoluer votre organisation.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Administration & Back-Office</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre back-office est exemplaire. Il incarne une référence pour votre secteur ou vos partenaires.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons vous accompagner sur des outils d’excellence ou de transmission de vos bonnes pratiques.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce votre attractivité et crédibilise vos ambitions externes.</td>";
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
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux outils informatiques sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les usages de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un ou deux outils informatiques sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons identifier ensemble les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Gagne en sérénité sur les usages de base et prépare l’arrivée de nouveaux collaborateurs.</td>";
            break;
        case 2:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des outils ou logiciels sont en place, mais sans logique globale ni plan de sécurisation.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect vous accompagne pour organiser vos pratiques numériques et identifier les principaux risques à couvrir.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise une gestion fluide, même en cas de turnover ou de croissance.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des pratiques numériques sont engagées, mais certains points clés comme les accès ou les sauvegardes manquent de régularité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à formaliser des pratiques simples et reproductibles (niveaux d’accès, règles internes, mots de passe).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Améliore la cohésion d’équipe et limite les interruptions de service.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>L’environnement informatique est bien présent, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous proposer des outils simples et automatisés pour centraliser les données et fluidifier les usages.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Rend la gestion informatique plus fluide et limite les erreurs ou les pertes de données.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre environnement numérique est globalement en place. Une harmonisation ou des rappels peuvent renforcer la sécurité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous accompagnons la formalisation de bonnes pratiques (chartes internes, rappels, référent numérique).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la transparence et réduit les risques au quotidien.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les usages numériques sont bien posés, avec une organisation visible. Quelques pratiques peuvent encore être systématisées.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à structurer les alertes, les sauvegardes ou les procédures d’urgence.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise la résilience et la sécurisation des données.</td>";
            break;
        case 7:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre environnement numérique est structuré et adapté à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous proposons des outils de pilotage plus stratégiques (anticipation, supervision, plan de reprise).</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Accroît la capacité d’anticipation et limite les impacts d’un incident.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Vous disposez d’un environnement numérique solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut compléter votre démarche avec des conseils sur les enjeux de cybersécurité ou de conformité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Valorise votre professionnalisme et rassure vos partenaires.</td>";
            break;
        case 9:
           echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre gestion numérique est fluide et efficace. C’est un socle fort pour la stabilité et la croissance.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut nourrir votre réflexion stratégique à travers des benchmarks ou des outils avancés.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Vous êtes en position d’anticiper, ajuster et sécuriser vos évolutions numériques.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Informatique & Cybersécurité</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre environnement numérique est exemplaire. Il incarne une référence pour votre secteur ou vos partenaires.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons vous accompagner sur des outils d’excellence ou de sensibilisation à la cybersécurité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce votre image et sécurise votre impact externe.</td>";
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
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 1:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Quelques éléments de suivi sont présents (factures, tableaux), mais sans lisibilité sur la santé financière globale.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à clarifier la structure financière et à poser les bases d’un pilotage simple.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise une gestion plus anticipée et une meilleure communication interne.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Une comptabilité existe (souvent déléguée), mais sans lien avec le pilotage quotidien.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut construire avec vous un tableau de bord adapté aux spécificités de votre activité.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Aide à mieux piloter l’activité et à prendre des décisions éclairées.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des outils de suivi sont présents, mais sans analyse ou mise à jour régulière.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous accompagnons pour automatiser le suivi (trésorerie, charges) et interpréter les données clés.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la réactivité et la visibilité financière.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les bases financières sont posées. Quelques arbitrages restent complexes ou flous.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à objectiver vos choix via des projections simples et lisibles.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Facilite les arbitrages budgétaires et les demandes de financement.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>La gestion financière est plutôt fluide, mais peu partagée ou modélisée.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à structurer les données (graphiques, ratios) pour mieux les diffuser auprès des parties prenantes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce l’adhésion de l’équipe et la posture vis-à-vis des partenaires.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Un pilotage structuré existe, avec plusieurs documents d’analyse ou de projection.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut fiabiliser les outils (formats, formules) ou soutenir un changement d’échelle.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Sécurise l’activité et prépare une éventuelle levée de fonds.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le pilotage est clair et régulier. Des axes de simplification ou de modélisation existent.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à renforcer l’autonomie sur les outils, ou à gagner du temps via l’automatisation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Libère du temps stratégique et améliore la qualité de gestion.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre pilotage est structuré, lisible et utile à la décision. Quelques ajustements de présentation sont possibles.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut relire vos outils pour en renforcer la lisibilité ou l’alignement avec vos objectifs.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Appuie la stratégie et valorise la rigueur interne.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Comptabilité & Finance</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre gestion financière est fluide, autonome et partagée. Elle contribue pleinement à la stratégie globale.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous proposons un benchmark ou un outil de valorisation de votre approche.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Donne de la hauteur et valorise la vision entrepreneuriale.</td>";
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
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Pose les bases d’une communication utile et accessible.</td>";
            break;
        case 2:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Quelques supports sont présents mais l’image est disparate ou peu alignée au projet.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect vous aide à définir un socle commun de messages et d’éléments visuels, en lien avec vos parties prenantes.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise une meilleure compréhension du projet et l’adhésion.</td>";
            break;
        case 3:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des messages sont structurés, mais l’image ou les canaux ne sont pas encore bien définis.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous accompagnons la formalisation d’une charte de communication et d’une stratégie de diffusion adaptée.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la cohérence et la portée des actions.</td>";
            break;
        case 4:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Des supports cohérents existent, mais la stratégie de diffusion ou les canaux restent limités.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous proposer des outils et un appui ponctuel pour élargir ou optimiser la stratégie en place.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Améliore la visibilité et la capacité d’influence.</td>";
            break;
        case 5:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre communication est claire, avec une identité stable et reconnue.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous vous aidons à structurer une ligne éditoriale et à capitaliser les bonnes pratiques dans un kit ou une documentation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Facilite la transmission et l’appropriation en interne comme en externe.</td>";
            break;
        case 6:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Les actions de communication sont organisées et suivies. Quelques contenus peuvent être optimisés.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons enrichir vos outils avec des canevas, des modèles, ou un accompagnement rédactionnel.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Favorise le gain de temps et la pertinence des messages.</td>";
            break;
        case 7:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre stratégie est en place et bien déployée. L’équipe gagne en autonomie.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut enrichir la démarche avec des conseils sur les formats ou l’articulation entre les supports.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Renforce la lisibilité, le dynamisme et l’impact.</td>";
            break;
        case 8:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>La stratégie de communication est structurée, dynamique, avec des messages bien portés.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons appuyer des temps forts spécifiques (lancement, campagne, événement), ou aider à transmettre les méthodes à l’équipe.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Accroît la portée et l’autonomie de vos actions.</td>";
            break;
        case 9:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre communication est impactante et bien relayée. Elle s’inscrit dans une logique de développement.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>TreeConnect peut vous aider à valoriser les retombées et à amplifier la dynamique.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Fait rayonner votre projet auprès de vos cibles et partenaires.</td>";
            break;
        case 10:
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Marketing & Communication</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Votre communication est inspirante et constitue une référence dans votre domaine.</td>";
            echo "<td class='border border-white lg:px-8 px-4 py-2'>Nous pouvons contribuer à capitaliser vos pratiques ou à structurer des temps de sensibilisation.</td>";
            echo "<td class='border-r-0 border border-white lg:px-8 px-4 py-2'>Donne de la visibilité à votre excellence et inspire vos pairs.</td>";
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
<button id="sendButton" onclick="nextStep(7)" class="bg-white w-full px-4 py-2 rounded-2xl text-[#304B68] font-bold text-lg mt-10" >Envoyer</button>

  </div>
</div>


</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function nextStep(step) {
  if (step === 7) {
    Swal.fire({
      title: 'Entrez votre adresse e-mail',
      input: 'email',
      inputLabel: 'Nous vous enverrons les résultats à cette adresse',
      inputPlaceholder: 'example@email.com',
      inputAttributes: {
        autocapitalize: 'off',
        autocorrect: 'off'
      },
      showCancelButton: true,
      confirmButtonText: 'Envoyer',
      cancelButtonText: 'Annuler',
      confirmButtonColor: '#003366'
    }).then((result) => {
      if (result.isConfirmed && result.value) {
        const userEmail = result.value;

        // Disable the send button
        const sendBtn = document.querySelector('#sendButton');
        if (sendBtn) {
          sendBtn.disabled = true;
          sendBtn.textContent = "Envoi...";
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
  title: 'Email envoyé!',
  text: 'Résultats envoyés avec succès.',
  confirmButtonColor: '#003366'
}).then(() => {
  // Redirect after OK is clicked
  window.location.href = 'servey.php'; // Change to your desired page
});
            } else {
              throw new Error(data.message || 'Erreur côté serveur');
            }
          } catch (e) {
            Swal.fire({
              icon: 'error',
              title: 'Erreur',
              text: e.message,
              confirmButtonColor: '#d33'
            }).then(() => {
  // Redirect after OK is clicked
  window.location.href = 'servey.php'; // Change to your desired page
});


            // Re-enable the button on error
            if (sendBtn) {
              sendBtn.disabled = false;
              sendBtn.textContent = "Envoyer";
            }
          }
        })
        .catch(() => {
          Swal.fire({
            icon: 'error',
            title: 'Échec du réseau',
            text: 'Impossible de contacter le serveur.',
            confirmButtonColor: '#d33'
          });

          // Re-enable the button on failure
          if (sendBtn) {
            sendBtn.disabled = false;
            sendBtn.textContent = "Envoyer";
          }
        });
      }
    });
  }
}
</script>
