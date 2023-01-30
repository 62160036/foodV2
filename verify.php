<!-- <?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
    require_once 'config/config.php';

        //  $mail = new PHPMailer(true);
        //  try {
        //      $mail->SMTPDebug = 0;
        //      $mail->isSMTP();
        //      $mail->Host ='smtp.gmail.com';
        //      $mail->SMTPAuth = true;
        //      $mail->Username = 'your_email@gmail.com';
        //      $mail->Password = 'your_password';
        //      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //      $mail->Port = 587;
        //      $mail->setFrom('your_email@gmail.com', 'food-project.com');
        //      $mail->addAddress($email, $name);
        //      $mail->isHTML(true);
        //      $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        //      $mail->Subject = 'Email verification';
        //      $mail->Body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></b></p>';
        //      $mail->send();
        //  }   
//   ?> -->