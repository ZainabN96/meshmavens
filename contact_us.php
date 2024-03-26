<?php
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';

    // $toEmail = "Technical.trainer@hcctechfoundation.com";
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];
    // $mail = new PHPMailer(true);

    // try {
    //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    //     $mail->isSMTP();
    //     $mail->Host       = 'smtp.meshmavens.com';
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'info@meshmavens.com';
    //     $mail->Password   = 'Temp*4143';
    //     //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //     $mail->Port       = 587; // Change this to 587 if using STARTTLS

    //     $mail->setFrom($email, $name);
    //     $mail->addAddress($toEmail, 'Mesh team');

    //     $mail->isHTML(true);
    //     $mail->Subject = $subject;
    //     $mail->Body    = $message;

    //     $mail->send();
    //     echo ("Your message has been sent. Thank you!");
    // } 
    // catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
?>

<?php


    //$to = "hafizumerkhan1@gmail.com";
    //$subject = "Test Email";
    //$message = "This is a test email.";
    //$headers = "From: khannnn839@gmail.com";
    $to = "zainabnaveed.hcc@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n"; // Add a Reply-To header

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        echo "Email sending failed.";
        // Additional error handling
        //echo "Error: " . error_get_last()['message'];
    }


exit;

    /*$to = "ayeshasheikh.as23@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
        // Additional error handling
        //echo "Error: " . error_get_last()['message'];
    }
exit;*/
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

  //  $toEmail = "Technical.trainer@hcctechfoundation.com";
      $toEmail = "khannnn839@gmail.com";
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];
    $name = 'HAMZA';
    $email = "hafizumerkhan1@gmail.com";
    $subject = 'Test';
    $message ="Test email";
    $mail = new PHPMailer(true);

    try {
        // $mail->isSMTP();
        // $mail->Host = 'smtp.gmail.com';
        // $mail->SMTPSecure = 'tls';
        // $mail->Port = 587;
        // $mail->SMTPAuth = true;
        // $mail->Username = 'zainabnaveed.hcc@gmail.com';
        // $mail->Password = 'Zain@2512';
         $mail->isSMTP();
        // $mail->Host       = 'smtp.meshmavens.com';
        // $mail->Host       = 'localhost';
        $mail->Host       = 'meshmavens.com';
        $mail->SMTPSecure = 'tls'; 
        $mail->SMTPAuth   = true;
        //$mail->SMTPAuth   = false;
       // $mail->Username   = 'info@meshmavens.com';
       // $mail->Password   = 'Temp*4143';
        $mail->Username   = 'khannnn839@gmail.com';
        $mail->Password   = 'bywm mshj rran qhma';
        $mail->Port = 587;

        $mail->setFrom($email, $name);
        $mail->addAddress($toEmail, 'Mesh team');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

       $res =  $mail->send();
       if($mail->send()){
              echo "Your message has been sent. Thank you!";
       }
       echo $res;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
