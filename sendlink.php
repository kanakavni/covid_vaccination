<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
    require 'vendor/autoload.php';

if(isset($_POST['emailAddress'])){
    sendMail($_POST['emailAddress']);
}

function sendMail($email){
    $mail = new PHPMailer(true);
    $email=$_POST['emailAddress'];
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'loghorizonpoint@gmail.com';                     //SMTP username
        $mail->Password   = 'soypra02';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('loghorizonpoint@gmail.com', 'CodesPaint');
    
        $mail->addAddress($email);               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Start with CodesPaint';
        $mail->Body    = '<div class="container"><p> Hi! find below the link for registration</br></br>
        <a href="http://localhost/covid_vaccination/signup.php?val="> Click to Register!</a>
        </p>
        </div>';
    
        $mail->AltBody = 'CodesPaint Registration';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}
?>
