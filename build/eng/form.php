<?php
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST["submit"])) {
      $fullname = $_POST["name"];
      $company = $_POST["company"];
      $phone = $_POST["phone"];
      $msg = $_POST["message"];
     
      $mail = new PHPMailer(true);

      try {
          //Server settings
          // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP(); //Send using SMTP
          $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
          $mail->SMTPAuth = true; //Enable SMTP authentication
          $mail->Username = "abdulrehman226721skp@gmail.com"; //SMTP username
          $mail->Password = "puhd yvrw nfth uzgp"; //SMTP password
          $mail->SMTPSecure = "ssl"; //Enable implicit TLS encryption
          $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          // Recipients
          $mail->setFrom("contact@treeconnect.ch", "Tree Connect"); // Set your preferred "from" email and name
          $mail->addAddress("contact@treeconnect.ch", "Tree Connect"); // Recipient's email and name (You can change this)
          $mail->addReplyTo("contact@treeconnect.ch", "Tree Connect");

          //Content
          $mail->isHTML(true);
          // Update the message to include the user's email
          $message = "<b>Name:</b>  $name<br> <b>Coompany Name:</b>  $company\n\n <b>Phone Number:</b>  $phone\n\n <br> <b>Message:</b>  $msg  <br> "; //Set email format to HTML
          $mail->Subject = $project;
          $mail->Body = $message;
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          
          echo 
          "
          <script>
         
          document.location.href = './contact.php';
         </script>
          ";
      } catch (Exception $e) {
   
          echo "
          
          <script>
          alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
          document.location.href = './contact.php';
         </script>
          
          
          
          
          ";
      }
  }
?>