<?php
require 'vendor/autoload.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';
use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);


// Read and decode JSON input
$data = json_decode(file_get_contents("php://input"), true);
if (!$data || !isset($data['Email'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

// Generate PDF HTML
ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: DejaVu Sans, sans-serif; padding: 40px; text-align: center; }
        h1 { color: #304B68; font-size: 36px; margin-bottom: 30px; }
        .info { font-size: 20px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Survey Certificate</h1>
    <p class="info">This certifies that <strong><?= htmlspecialchars($data["Name"]) ?></strong></p>
    <p class="info">has completed the maturity audit on <strong><?= htmlspecialchars($data["Date"]) ?></strong></p>
    <p class="info">with a score of <strong><?= htmlspecialchars($data["Score"]) ?></strong>.</p>
</body>
</html>
<?php
$html = ob_get_clean();

// Generate PDF using Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$pdfOutput = $dompdf->output(); // Get the PDF as a string

// Email setup
$mail = new PHPMailer(true);

try {
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP(); //Send using SMTP
          $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
          $mail->SMTPAuth = true; //Enable SMTP authentication
          $mail->Username = "abdulrehman226721skp@gmail.com"; //SMTP username
          $mail->Password = "puhd yvrw nfth uzgp"; //SMTP password
          $mail->SMTPSecure = "ssl"; //Enable implicit TLS encryption
          $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          // Recipients
          $mail->setFrom("abdulrehman226721skp@gmail.com", "Digital Shapping"); // Set your preferred "from" email and name
          $mail->addAddress("abdulrehman226721skp@gmail.com", "Digital Shapping"); // Recipient's email and name (You can change this)
          $mail->addReplyTo("abdulrehman226721skp@gmail.com", "Digital Shapping");

    $mail->Subject = 'Your Survey Certificate';
    $mail->Body = "Hi {$data['Name']},\n\nAttached is your survey certificate.\n\nBest regards,\nTreeConnect Team";
    $mail->addStringAttachment($pdfOutput, 'survey-certificate.pdf');

    $mail->send();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
