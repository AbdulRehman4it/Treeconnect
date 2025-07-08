<?php include_once './inc/header.php';?>
<body class="bg-[#304B68] overflow-x-hidden">
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$companyData = $_SESSION['companyData'] ?? [];

if (!empty($companyData)) {
    echo '<h2>Données du formulaire (Company Info):</h2>';
    echo '<ul style="font-family: sans-serif; line-height: 1.6;">';
    foreach ($companyData as $key => [$label, $value]) {
        echo "<li><strong>$label:</strong> " . htmlspecialchars($value) . "</li>";
    }
    echo '</ul>';
} else {
    echo '<p>Aucune donnée soumise.</p>';
}

if (isset($_SESSION['hr_heading'], $_SESSION['hr_score'], $_SESSION['hr_answers'])) {
    echo "<h2>" . htmlspecialchars($_SESSION['hr_heading']) . "</h2><br>";

    foreach ($_SESSION['hr_answers'] as $q => [$response, $score]) {
        echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
    }

    echo "<br><strong>Total des points: " . $_SESSION['hr_score'] . " / 10</strong><br><br>";
} else {
    echo "<p>Aucune réponse enregistrée pour Ressources Humaines.</p>";
}

if (isset($_SESSION['admin_heading'], $_SESSION['admin_score'], $_SESSION['admin_answers'])) {
    echo "<h2>" . htmlspecialchars($_SESSION['admin_heading']) . "</h2><br>";

    foreach ($_SESSION['admin_answers'] as $q => [$response, $score]) {
        echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
    }

    echo "<br><strong>Total des points: " . $_SESSION['admin_score'] . " / 10</strong><br><br>";
}
if (isset($_SESSION['it_heading']) && isset($_SESSION['it_score']) && isset($_SESSION['it_answers'])) {
    echo "<h2>" . htmlspecialchars($_SESSION['it_heading']) . "</h2><br>";

    foreach ($_SESSION['it_answers'] as $q => [$response, $score]) {
        echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
    }

    echo "<br><strong>Total des points: " . $_SESSION['it_score'] . " / 10</strong><br><br>";
}
if (isset($_SESSION['accounting_heading']) && isset($_SESSION['accounting_score']) && isset($_SESSION['accounting_answers'])) {
    echo "<h2>" . htmlspecialchars($_SESSION['accounting_heading']) . "</h2><br>";

    foreach ($_SESSION['accounting_answers'] as $q => [$response, $score]) {
        echo "Réponse à " . strtoupper($q) . ": " . htmlspecialchars($response) . " (Score: $score)<br>";
    }

    echo "<br><strong>Total des points: " . $_SESSION['accounting_score'] . " / 10</strong><br><br>";
}
?>

<div  class=" flex items-center justify-center">
  <div class="bg-[#3F6893] text-white w-full overflow-y-auto xl:mx-40 lg:mx-14 rounded-2xl lg:px-16 px-4 py-20">
 <!-- Close Button -->
    <!-- <button onclick="closePopup()" class="absolute top-4 right-6 text-white text-2xl font-bold hover:text-gray-300">
      &times;
    </button> -->

    <!-- heading  -->
    <div>
       <h1 class="xl:text-4xl text-2xl font-semibold text-center mb-6">Organizational Maturity Radar - Tree Connect</h1>
    </div>

   <!-- chart -->
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
          <td class="border-b-0 border border-white lg:px-8 px-4 py-2">No structured communication strategy is currently in place.</td>
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


</body>