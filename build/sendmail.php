<?php
// ✅ Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ✅ Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
ob_start();

// ✅ Include header with proper path
$headerPath = __DIR__ . '/inc/header.php';
if (file_exists($headerPath)) {
    include_once $headerPath;
} else {
    ob_end_clean();
    echo json_encode(['success' => false, 'message' => 'Header file not found']);
    exit;
}
ob_end_clean(); 

// ✅ Load PHPMailer
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ✅ Capture HTML email content
ob_start();
?>

<!-- HTML Email Starts -->
<div style="font-family: 'Segoe UI', sans-serif; background-color: #f9f9fc; color: #333; padding: 30px;">
  <?php if (!empty($_SESSION['companyData'])): ?>
    <h2 style="color: #003366; border-bottom: 2px solid #d1dbe8;">🗂 Données du formulaire (Company Info)</h2>
    <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
      <?php foreach ($_SESSION['companyData'] as [$label, $value]): ?>
        <tr>
          <td style="background-color: #eef3fa; border: 1px solid #ccc; padding: 10px; font-weight: bold;"><?= htmlspecialchars($label) ?></td>
          <td style="border: 1px solid #ccc; padding: 10px;"><?= htmlspecialchars($value) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <?php
  function renderBlockInline($headingKey, $scoreKey, $answersKey, $questionsMap, $icon) {
      if (isset($_SESSION[$headingKey], $_SESSION[$scoreKey], $_SESSION[$answersKey])) {
          echo "<h2 style='color:#003366;'>$icon " . htmlspecialchars($_SESSION[$headingKey]) . "</h2>";
          echo "<table style='width:100%; border-collapse:collapse; margin-bottom:10px;'>
                  <tr>
                    <th style='background:#e8eff7; padding:10px; border:1px solid #ccc;'>Question</th>
                    <th style='background:#e8eff7; padding:10px; border:1px solid #ccc;'>Réponse</th>
                    <th style='background:#e8eff7; padding:10px; border:1px solid #ccc;'>Score</th>
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
          echo "<div style='font-weight:bold;'>Total des points : " . $_SESSION[$scoreKey] . " / 10</div><br>";
      }
  }

  // ✅ Question maps
  $questionsHR = [
      'aq1' => "Onboarding et Recrutement",
      'aq2' => "Objectifs et Performance ",
      'aq3' => "SIRH et Paie",
      'aq4' => "Politique de Rémunération",
      'aq5' => "Charte et référentiel RH"
  ];
  $questionsAdmin = [
      'bq1' => "Modélisation des procédures",
      'bq2' => "Automatisation des tâches ",
      'bq3' => "Organisation documentaire centralisée",
      'bq4' => "Suivi des échéances ",
      'bq5' => "Continuité administrative"
  ];
  $questionsIT = [
      'cq1' => " Infrastructure informatique ",
      'cq2' => "Sauvegarde des données ",
      'cq3' => "Outils collaboratifs ",
      'cq4' => "Accompagnement et veille technologique ",
      'cq5' => " Cybersécurité "
  ];
  $questionsAccounting = [
      'dq1' => "Tableau de bord financier",
      'dq2' => "Processus de facturation",
      'dq3' => "Suivi des charges",
      'dq4' => "Prévisions financières",
      'dq5' => "Outils financiers digitaux"
  ];
  $questionsMarketing = [
      'cq1' => "Stratégie de communication ",
      'cq2' => "Identité visuelle",
      'cq3' => "Canaux de communication",
      'cq4' => "Suivi des résultats ",
      'cq5' => " Planification des actions"
  ];

  renderBlockInline('hr_heading', 'hr_score', 'hr_answers', $questionsHR, '👥');
  renderBlockInline('admin_heading', 'admin_score', 'admin_answers', $questionsAdmin, '📁');
  renderBlockInline('it_heading', 'it_score', 'it_answers', $questionsIT, '💻');
  renderBlockInline('accounting_heading', 'accounting_score', 'accounting_answers', $questionsAccounting, '📊');
  renderBlockInline('marketing_heading', 'marketing_score', 'marketing_answers', $questionsMarketing, '📣');
  ?>
</div>
<!-- HTML Email Ends -->

<?php
$mailBody = ob_get_clean();

// ✅ Check if content exists
if (empty(trim($mailBody))) {
    echo json_encode(['success' => false, 'message' => 'Email body is empty']);
    exit;
}

// ✅ Send Email
try {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "abdulrehman226721skp@gmail.com";
    $mail->Password = "puhd yvrw nfth uzgp";  // Note: consider using env variable
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom('contact@treeconnect.ch', 'Results');
    $userEmail = $_POST['user_email'] ?? 'fallback@example.com';
    $mail->addAddress('contact@treeconnect.ch', 'Client');
    $mail->addAddress($userEmail, 'Client');
    $mail->isHTML(true);
    $mail->Subject = '📝 Résultats du Diagnostic de votre entreprise';
    $mail->Body = $mailBody;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Mail sent successfully']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
?>
