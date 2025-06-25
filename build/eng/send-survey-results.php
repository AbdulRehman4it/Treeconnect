<?php
require 'vendor/autoload.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Read and decode JSON input
$data = json_decode(file_get_contents("php://input"), true);
if (!$data || !isset($data['Email'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input: Email missing']);
    exit;
}

// Create a formatted message from all responses
$message = "Survey Submission Report\n\n";
foreach ($data as $question => $answer) {
    $message .= "{$question}: {$answer}\n";
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "abdulrehman226721skp@gmail.com";
    $mail->Password = "puhd yvrw nfth uzgp";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom("abdulrehman226721skp@gmail.com", "Digital Shapping");
    $mail->addAddress($data['Email']);
    $mail->addReplyTo("abdulrehman226721skp@gmail.com", "Digital Shapping");

    $mail->Subject = "Survey Results Submission";
    $mail->Body = $message;

    $mail->send();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
?>
