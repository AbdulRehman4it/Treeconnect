<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (
    isset($_SESSION['marketing_heading']) &&
    isset($_SESSION['marketing_score']) &&
    isset($_SESSION['marketing_answers'])
) {
    $scriptURL = "https://script.google.com/macros/s/AKfycbx4S_WJlOsoeTcevFflebWQafwilg4mEg9tkGB5784_2DUPlvEnGawlcgLgUPx_6gq5/exec";

     $questionsHR = [ 'aq1' => "Onboarding et Recrutement", 'aq2' => "Objectifs et Performance ", 'aq3' => "SIRH et Paie", 'aq4' => "Politique de Rémunération", 'aq5' => "Charte et référentiel RH" ];
    $questionsAdmin = [ 'bq1' => "Modélisation des procédures", 'bq2' => "Automatisation des tâches ", 'bq3' => "Organisation documentaire centralisée", 'bq4' => "Suivi des échéances ", 'bq5' => "Continuité administrative" ];
    $questionsIT = [ 'cq1' => " Infrastructure informatique ", 'cq2' => "Sauvegarde des données ", 'cq3' => "Outils collaboratifs ", 'cq4' => "Accompagnement et veille technologique ", 'cq5' => " Cybersécurité " ];
    $questionsAccounting = [ 'dq1' => "Tableau de bord financier", 'dq2' => "Processus de facturation", 'dq3' => "Suivi des charges", 'dq4' => "Prévisions financières", 'dq5' => "Outils financiers digitaux" ];
    $questionsMarketing = [ 'cq1' => "Stratégie de communication ", 'cq2' => "Identité visuelle", 'cq3' => "Canaux de communication", 'cq4' => "Suivi des résultats ", 'cq5' => " Planification des actions" ];

    // Render each pillar section

    // Collect all session + question map data
    $data = [
        "companyData"   => $_SESSION['companyData'] ?? [],
        "hr_heading"    => $_SESSION['hr_heading'] ?? '',
        "hr_score"      => $_SESSION['hr_score'] ?? '',
        "hr_answers"    => $_SESSION['hr_answers'] ?? [],
        "admin_heading" => $_SESSION['admin_heading'] ?? '',
        "admin_score"   => $_SESSION['admin_score'] ?? '',
        "admin_answers" => $_SESSION['admin_answers'] ?? [],
        "it_heading"    => $_SESSION['it_heading'] ?? '',
        "it_score"      => $_SESSION['it_score'] ?? '',
        "it_answers"    => $_SESSION['it_answers'] ?? [],
        "accounting_heading" => $_SESSION['accounting_heading'] ?? '',
        "accounting_score"   => $_SESSION['accounting_score'] ?? '',
        "accounting_answers" => $_SESSION['accounting_answers'] ?? [],
        "marketing_heading"  => $_SESSION['marketing_heading'] ?? '',
        "marketing_score"    => $_SESSION['marketing_score'] ?? '',
        "marketing_answers"  => $_SESSION['marketing_answers'] ?? [],

        // ✅ Attach question maps too
        "questionsHR"        => $questionsHR,
        "questionsAdmin"     => $questionsAdmin,
        "questionsIT"        => $questionsIT,
        "questionsAccounting"=> $questionsAccounting,
        "questionsMarketing" => $questionsMarketing
    ];

    // Send JSON to Google Sheets
    $ch = curl_init($scriptURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($ch);
    curl_close($ch);

    
}
?>

<div  class=" flex items-center justify-center xl:py-20 py-10">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-40 lg:mx-14 rounded-2xl lg:px-16 px-4 py-20">


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
  


<!-- Mobile-only card layout -->
<?php if (isset($_SESSION['hr_score'])): ?>
  <div class="md:hidden block space-y-4 text-white">
    <?php
    $score = $_SESSION['hr_score'];
    $title = "Ressources Humaines";

    $entries = [
      0 => [
        "Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.",
        "TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.",
        "Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable."
      ],
      1 => [
        "Les démarches RH ne sont pas encore formalisées à ce jour. Ce pilier représente une belle opportunité de structuration.",
        "TreeConnect peut vous aider à poser les premières briques d’un socle RH simple et adapté à votre structure.",
        "Clarifie les rôles, sécurise la conformité, et pose les bases pour une équipe stable."
      ],
      2 => [
        "Un ou deux aspects RH sont présents de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
        "Nous pouvons identifier ensemble les priorités RH à structurer rapidement, avec des outils adaptés aux petites équipes.",
        "Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs."
      ],
      3 => [
        "Des éléments RH existent (par exemple, contrats ou entretiens), mais sans logique globale.",
        "TreeConnect vous accompagne pour articuler vos pratiques RH autour d’un processus cohérent et duplicable.",
        "Favorise une gestion fluide, même en cas de turnover ou de croissance."
      ],
      4 => [
        "Des démarches structurantes sont engagées, mais certains points clés comme l’intégration ou le suivi manquent de régularité.",
        "Nous vous aidons à formaliser des processus simples et reproductibles (fiche de poste, suivi collaborateur, trame d’entretien).",
        "Améliore la cohésion d’équipe et soutient l’engagement au quotidien."
      ],
      5 => [
        "Les fondations RH sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.",
        "TreeConnect peut vous proposer des outils RH légers et automatisés pour centraliser et gagner du temps.",
        "Rend la gestion RH plus fluide et limite les erreurs administratives."
      ],
      6 => [
        "Votre approche RH est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.",
        "Nous accompagnons la transition vers des outils intégrés pour le suivi, les absences ou les entretiens.",
        "Renforce la transparence et professionnalise la gestion interne."
      ],
      7 => [
        "Les pratiques RH sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.",
        "TreeConnect peut vous aider à structurer les feedbacks réguliers ou à définir des grilles de rémunération plus lisibles.",
        "Favorise la fidélisation et la responsabilisation des équipes."
      ],
      8 => [
        "La gestion RH est maîtrisée et adaptée à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.",
        "Nous vous proposons des outils de pilotage RH plus stratégiques (anticipation des besoins, suivi des talents).",
        "Accroît la capacité de projection et soutient le développement à long terme."
      ],
      9 => [
        "Vous disposez d’un système RH solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.",
        "TreeConnect peut compléter votre démarche avec des conseils sur la marque employeur ou la culture d’entreprise.",
        "Valorise votre attractivité et soutient votre positionnement RH."
      ],
      10 => [
        "Votre gestion RH est structurée, fluide et exemplaire. C’est un socle fort pour la stabilité et la croissance.",
        "TreeConnect peut nourrir votre réflexion stratégique RH à travers des benchmarks ou des outils avancés.",
        "Vous êtes en position d’attirer, engager et faire évoluer les bons profils."
      ]
    ];

    if (array_key_exists($score, $entries)):
      $content = $entries[$score];
    ?>
    <div class="bg-[#3F6893] border border-white rounded-xl p-6 space-y-4">
      <h3 class="text-xl font-semibold text-white"><?= $title ?></h3>
      <p><strong>Analyse :</strong> <?= $content[0] ?></p>
      <p><strong>Accompagnement :</strong> <?= $content[1] ?></p>
      <p><strong>Impact :</strong> <?= $content[2] ?></p>
    </div>
    <?php else: ?>
    <div class="bg-red-500 text-white p-4 rounded">Score non reconnu.</div>
    <?php endif; ?>
  </div>
<?php endif; ?>

<br>

<?php if (isset($_SESSION['admin_score'])): ?>
  <div class="md:hidden block space-y-4 text-white">
    <?php
    $score = $_SESSION['admin_score'];
    $title = "Administration & Back-Office";

    $entries = [
      0 => [
        "Un ou deux outils administratifs sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
        "Nous pouvons identifier ensemble les priorités de structuration avec des outils adaptés aux petites équipes.",
        "Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs."
      ],
      1 => [
        "Un ou deux outils administratifs sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
        "Nous pouvons identifier ensemble les priorités de structuration avec des outils adaptés aux petites équipes.",
        "Gagne en sérénité sur les obligations de base et prépare l’arrivée de nouveaux collaborateurs."
      ],
      2 => [
        "Des éléments existent (par exemple, devis ou factures), mais sans logique globale ou centralisée.",
        "TreeConnect vous accompagne pour articuler vos pratiques de gestion autour d’un processus cohérent et duplicable.",
        "Favorise une gestion fluide, même en cas de turnover ou de croissance."
      ],
      3 => [
        "Des démarches structurantes sont engagées, mais certains points clés comme la gestion documentaire ou le suivi manquent de régularité.",
        "Nous vous aidons à formaliser des processus simples et reproductibles (tableau de bord, procédures internes, modèles).",
        "Améliore la cohésion d’équipe et soutient l’efficacité au quotidien."
      ],
      4 => [
        "Les bases du back-office sont bien présentes, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.",
        "TreeConnect peut vous proposer des outils simples et automatisés pour centraliser et gagner du temps.",
        "Rend la gestion plus fluide et limite les erreurs administratives."
      ],
      5 => [
        "Votre back-office est globalement en place. Une harmonisation et une digitalisation partielle pourraient en renforcer l’efficacité.",
        "Nous accompagnons la transition vers des outils intégrés pour la gestion des documents, du temps ou des contrats.",
        "Renforce la transparence et professionnalise la gestion interne."
      ],
      6 => [
        "Les pratiques de gestion sont bien posées, avec une organisation visible. Quelques rituels peuvent encore être systématisés.",
        "TreeConnect peut vous aider à structurer les outils de suivi régulier ou à définir un plan d’amélioration continue.",
        "Favorise la responsabilisation et fluidifie la gestion collective."
      ],
      7 => [
        "Votre back-office est structuré et adapté à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.",
        "Nous vous proposons des outils de pilotage plus stratégiques (anticipation, évaluation des charges, indicateurs).",
        "Accroît la capacité d’anticipation et soutient le développement."
      ],
      8 => [
        "Vous disposez d’un système de gestion solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.",
        "TreeConnect peut compléter votre démarche avec des conseils sur l’optimisation ou la culture de gestion.",
        "Valorise la maturité de votre gestion et améliore votre positionnement."
      ],
      9 => [
        "Votre gestion est structurée, fluide et efficace. C’est un socle fort pour la stabilité et la croissance.",
        "TreeConnect peut nourrir votre réflexion stratégique à travers des benchmarks ou des outils avancés.",
        "Vous êtes en position d’anticiper, ajuster et faire évoluer votre organisation."
      ],
      10 => [
        "Votre back-office est exemplaire. Il incarne une référence pour votre secteur ou vos partenaires.",
        "Nous pouvons vous accompagner sur des outils d’excellence ou de transmission de vos bonnes pratiques.",
        "Renforce votre attractivité et crédibilise vos ambitions externes."
      ]
    ];

    if (array_key_exists($score, $entries)):
      $content = $entries[$score];
    ?>
    <div class="bg-[#3F6893] border border-white rounded-xl p-6 space-y-4">
      <h3 class="text-xl font-semibold text-white"><?= $title ?></h3>
      <p><strong>Analyse :</strong> <?= $content[0] ?></p>
      <p><strong>Accompagnement :</strong> <?= $content[1] ?></p>
      <p><strong>Impact :</strong> <?= $content[2] ?></p>
    </div>
    <?php else: ?>
    <div class="bg-red-500 text-white p-4 rounded">Score non reconnu.</div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<br>
<?php if (isset($_SESSION['it_score'])): ?>
  <div class="md:hidden block space-y-4 text-white">
    <?php
    $score = $_SESSION['it_score'];
    $title = "Informatique & Cybersécurité";

    $entries = [
      0 => [
        "Un ou deux outils informatiques sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
        "Nous pouvons identifier ensemble les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.",
        "Gagne en sérénité sur les usages de base et prépare l’arrivée de nouveaux collaborateurs."
      ],
      1 => [
        "Un ou deux outils informatiques sont utilisés de façon ponctuelle, mais l’ensemble reste informel ou dispersé.",
        "Nous pouvons identifier ensemble les priorités numériques à structurer rapidement, avec des outils adaptés aux petites équipes.",
        "Gagne en sérénité sur les usages de base et prépare l’arrivée de nouveaux collaborateurs."
      ],
      2 => [
        "Des outils ou logiciels sont en place, mais sans logique globale ni plan de sécurisation.",
        "TreeConnect vous accompagne pour organiser vos pratiques numériques et identifier les principaux risques à couvrir.",
        "Favorise une gestion fluide, même en cas de turnover ou de croissance."
      ],
      3 => [
        "Des pratiques numériques sont engagées, mais certains points clés comme les accès ou les sauvegardes manquent de régularité.",
        "Nous vous aidons à formaliser des pratiques simples et reproductibles (niveaux d’accès, règles internes, mots de passe).",
        "Améliore la cohésion d’équipe et limite les interruptions de service."
      ],
      4 => [
        "L’environnement informatique est bien présent, avec plusieurs éléments fonctionnels. Quelques optimisations sont envisageables.",
        "TreeConnect peut vous proposer des outils simples et automatisés pour centraliser les données et fluidifier les usages.",
        "Rend la gestion informatique plus fluide et limite les erreurs ou les pertes de données."
      ],
      5 => [
        "Votre environnement numérique est globalement en place. Une harmonisation ou des rappels peuvent renforcer la sécurité.",
        "Nous accompagnons la formalisation de bonnes pratiques (chartes internes, rappels, référent numérique).",
        "Renforce la transparence et réduit les risques au quotidien."
      ],
      6 => [
        "Les usages numériques sont bien posés, avec une organisation visible. Quelques pratiques peuvent encore être systématisées.",
        "TreeConnect peut vous aider à structurer les alertes, les sauvegardes ou les procédures d’urgence.",
        "Favorise la résilience et la sécurisation des données."
      ],
      7 => [
        "Votre environnement numérique est structuré et adapté à vos besoins. Des points d’amélioration mineurs peuvent renforcer l’agilité.",
        "Nous vous proposons des outils de pilotage plus stratégiques (anticipation, supervision, plan de reprise).",
        "Accroît la capacité d’anticipation et limite les impacts d’un incident."
      ],
      8 => [
        "Vous disposez d’un environnement numérique solide, clair et bien intégré. Il reste peu d’ajustements pour aller vers l’excellence.",
        "TreeConnect peut compléter votre démarche avec des conseils sur les enjeux de cybersécurité ou de conformité.",
        "Valorise votre professionnalisme et rassure vos partenaires."
      ],
      9 => [
        "Votre gestion numérique est fluide et efficace. C’est un socle fort pour la stabilité et la croissance.",
        "TreeConnect peut nourrir votre réflexion stratégique à travers des benchmarks ou des outils avancés.",
        "Vous êtes en position d’anticiper, ajuster et sécuriser vos évolutions numériques."
      ],
      10 => [
        "Votre environnement numérique est exemplaire. Il incarne une référence pour votre secteur ou vos partenaires.",
        "Nous pouvons vous accompagner sur des outils d’excellence ou de sensibilisation à la cybersécurité.",
        "Renforce votre image et sécurise votre impact externe."
      ]
    ];

    if (array_key_exists($score, $entries)):
      $content = $entries[$score];
    ?>
    <div class="bg-[#3F6893] border border-white rounded-xl p-6 space-y-4">
      <h3 class="text-xl font-semibold text-white"><?= $title ?></h3>
      <p><strong>Analyse :</strong> <?= $content[0] ?></p>
      <p><strong>Accompagnement :</strong> <?= $content[1] ?></p>
      <p><strong>Impact :</strong> <?= $content[2] ?></p>
    </div>
    <?php else: ?>
    <div class="bg-red-500 text-white p-4 rounded">Score non reconnu.</div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<br>
<?php if (isset($_SESSION['accounting_score'])): ?>
  <div class="md:hidden block space-y-4 text-white">
    <?php
    $score = $_SESSION['accounting_score'];
    $title = "Comptabilité & Finance";

    $entries = [
      0 => [
        "Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.",
        "TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.",
        "Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances."
      ],
      1 => [
        "Le suivi financier est très limité voire inexistant. Il constitue un axe stratégique à renforcer.",
        "TreeConnect peut vous accompagner pour mettre en place les premiers indicateurs de pilotage financier adaptés à votre activité.",
        "Permet de poser un socle clair pour sécuriser la trésorerie et anticiper les échéances."
      ],
      2 => [
        "Quelques éléments de suivi sont présents (factures, tableaux), mais sans lisibilité sur la santé financière globale.",
        "Nous vous aidons à clarifier la structure financière et à poser les bases d’un pilotage simple.",
        "Favorise une gestion plus anticipée et une meilleure communication interne."
      ],
      3 => [
        "Une comptabilité existe (souvent déléguée), mais sans lien avec le pilotage quotidien.",
        "TreeConnect peut construire avec vous un tableau de bord adapté aux spécificités de votre activité.",
        "Aide à mieux piloter l’activité et à prendre des décisions éclairées."
      ],
      4 => [
        "Des outils de suivi sont présents, mais sans analyse ou mise à jour régulière.",
        "Nous vous accompagnons pour automatiser le suivi (trésorerie, charges) et interpréter les données clés.",
        "Renforce la réactivité et la visibilité financière."
      ],
      5 => [
        "Les bases financières sont posées. Quelques arbitrages restent complexes ou flous.",
        "TreeConnect peut vous aider à objectiver vos choix via des projections simples et lisibles.",
        "Facilite les arbitrages budgétaires et les demandes de financement."
      ],
      6 => [
        "La gestion financière est plutôt fluide, mais peu partagée ou modélisée.",
        "Nous vous aidons à structurer les données (graphiques, ratios) pour mieux les diffuser auprès des parties prenantes.",
        "Renforce l’adhésion de l’équipe et la posture vis-à-vis des partenaires."
      ],
      7 => [
        "Un pilotage structuré existe, avec plusieurs documents d’analyse ou de projection.",
        "TreeConnect peut fiabiliser les outils (formats, formules) ou soutenir un changement d’échelle.",
        "Sécurise l’activité et prépare une éventuelle levée de fonds."
      ],
      8 => [
        "Le pilotage est clair et régulier. Des axes de simplification ou de modélisation existent.",
        "Nous vous aidons à renforcer l’autonomie sur les outils, ou à gagner du temps via l’automatisation.",
        "Libère du temps stratégique et améliore la qualité de gestion."
      ],
      9 => [
        "Votre pilotage est structuré, lisible et utile à la décision. Quelques ajustements de présentation sont possibles.",
        "TreeConnect peut relire vos outils pour en renforcer la lisibilité ou l’alignement avec vos objectifs.",
        "Appuie la stratégie et valorise la rigueur interne."
      ],
      10 => [
        "Votre gestion financière est fluide, autonome et partagée. Elle contribue pleinement à la stratégie globale.",
        "Nous vous proposons un benchmark ou un outil de valorisation de votre approche.",
        "Donne de la hauteur et valorise la vision entrepreneuriale."
      ]
    ];

    if (array_key_exists($score, $entries)):
      $content = $entries[$score];
    ?>
    <div class="bg-[#3F6893] border border-white rounded-xl p-6 space-y-4">
      <h3 class="text-xl font-semibold"><?= $title ?></h3>
      <p><strong>Analyse :</strong> <?= $content[0] ?></p>
      <p><strong>Accompagnement :</strong> <?= $content[1] ?></p>
      <p><strong>Impact :</strong> <?= $content[2] ?></p>
    </div>
    <?php else: ?>
    <div class="bg-red-500 text-white p-4 rounded">Score non reconnu.</div>
    <?php endif; ?>
  </div>

<?php endif; ?>
<br>
<?php if (isset($_SESSION['marketing_score'])): ?>
  <div class="md:hidden block space-y-4 text-white">
    <?php
    $score = $_SESSION['marketing_score'];
    $title = "Marketing & Communication";

    $entries = [
      0 => [
        "Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.",
        "Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.",
        "Pose les bases d’une communication utile et accessible."
      ],
      1 => [
        "Le sujet est peu traité, avec peu d’actions lisibles ou visibles à ce jour.",
        "Nous aidons à identifier les actions prioritaires pour clarifier le positionnement et structurer les premières communications.",
        "Pose les bases d’une communication utile et accessible."
      ],
      2 => [
        "Quelques supports sont présents mais l’image est disparate ou peu alignée au projet.",
        "TreeConnect vous aide à définir un socle commun de messages et d’éléments visuels, en lien avec vos parties prenantes.",
        "Favorise une meilleure compréhension du projet et l’adhésion."
      ],
      3 => [
        "Des messages sont structurés, mais l’image ou les canaux ne sont pas encore bien définis.",
        "Nous accompagnons la formalisation d’une charte de communication et d’une stratégie de diffusion adaptée.",
        "Renforce la cohérence et la portée des actions."
      ],
      4 => [
        "Des supports cohérents existent, mais la stratégie de diffusion ou les canaux restent limités.",
        "TreeConnect peut vous proposer des outils et un appui ponctuel pour élargir ou optimiser la stratégie en place.",
        "Améliore la visibilité et la capacité d’influence."
      ],
      5 => [
        "Votre communication est claire, avec une identité stable et reconnue.",
        "Nous vous aidons à structurer une ligne éditoriale et à capitaliser les bonnes pratiques dans un kit ou une documentation.",
        "Facilite la transmission et l’appropriation en interne comme en externe."
      ],
      6 => [
        "Les actions de communication sont organisées et suivies. Quelques contenus peuvent être optimisés.",
        "Nous pouvons enrichir vos outils avec des canevas, des modèles, ou un accompagnement rédactionnel.",
        "Favorise le gain de temps et la pertinence des messages."
      ],
      7 => [
        "Votre stratégie est en place et bien déployée. L’équipe gagne en autonomie.",
        "TreeConnect peut enrichir la démarche avec des conseils sur les formats ou l’articulation entre les supports.",
        "Renforce la lisibilité, le dynamisme et l’impact."
      ],
      8 => [
        "La stratégie de communication est structurée, dynamique, avec des messages bien portés.",
        "Nous pouvons appuyer des temps forts spécifiques (lancement, campagne, événement), ou aider à transmettre les méthodes à l’équipe.",
        "Accroît la portée et l’autonomie de vos actions."
      ],
      9 => [
        "Votre communication est impactante et bien relayée. Elle s’inscrit dans une logique de développement.",
        "TreeConnect peut vous aider à valoriser les retombées et à amplifier la dynamique.",
        "Fait rayonner votre projet auprès de vos cibles et partenaires."
      ],
      10 => [
        "Votre communication est inspirante et constitue une référence dans votre domaine.",
        "Nous pouvons contribuer à capitaliser vos pratiques ou à structurer des temps de sensibilisation.",
        "Donne de la visibilité à votre excellence et inspire vos pairs."
      ]
    ];

    if (array_key_exists($score, $entries)):
      $content = $entries[$score];
    ?>
    <div class="bg-[#3F6893] border border-white rounded-xl p-6 space-y-4">
      <h3 class="text-xl font-semibold"><?= $title ?></h3>
      <p><strong>Analyse :</strong> <?= $content[0] ?></p>
      <p><strong>Accompagnement :</strong> <?= $content[1] ?></p>
      <p><strong>Impact :</strong> <?= $content[2] ?></p>
    </div>
    <?php else: ?>
    <div class="bg-red-500 text-white p-4 rounded">Score non reconnu.</div>
    <?php endif; ?>
  </div>
<?php endif; ?>



    <!-- Table  -->
    <div class="overflow-x-auto md:block hidden">
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
      confirmButtonColor: '#ffffff',
      cancelButtonColor: '#cccccc',
      background: '#3F6893',
      color: '#ffffff',
      customClass: {
        popup: 'bg-[#3F6893] text-white rounded-lg shadow-lg',
        confirmButton: 'bg-white text-[#304B68] px-4 py-2 rounded',
        cancelButton: 'bg-white text-[#304B68] px-4 py-2 rounded',
        input: 'bg-[#3F6893] text-white rounded px-2 py-1'
      }
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
                confirmButtonColor: 'white',
                background: '#3F6893',
                color: '#ffffff',
                customClass: {
                  popup: 'bg-[#3F6893] text-white rounded-lg shadow-lg',
                  confirmButton: 'bg-white text-[#304B68] px-4 py-2 rounded'
                }
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
              confirmButtonColor: '#d33',
              background: '#003366',
              color: '#ffffff',
              customClass: {
                popup: 'bg-[#003366] text-white rounded-lg shadow-lg',
                confirmButton: 'bg-white text-[#304B68] px-4 py-2 rounded'
              }
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
            confirmButtonColor: '#d33',
            background: '#3F6893',
            color: '#ffffff',
            customClass: {
              popup: 'bg-[#3F6893] text-white rounded-lg shadow-lg',
              confirmButton: 'bg-white text-[#304B68] px-4 py-2 rounded'
            }
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
