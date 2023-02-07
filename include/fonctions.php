<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/src/Exception.php';
require 'php-mailer/src/PHPMailer.php';
require 'php-mailer/src/SMTP.php';

//Send mail from portfolio to my gmail
function sendMail($firstName, $lastName, $email, $text) {

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';        //SMTP username
    $mail->Password   = '';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'Portfolio Nicolas Loizeau');
    $mail->addAddress('');         //Add a recipient

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->CharSet = "UTF-8";
    $mail->Subject = 'Message depuis mon portfolio';
    $mail->Body    = 'Expéditeur : '. $firstName . ' '  . $lastName . '<br>' . 'Email: ' . $email . '<br>' . 'Message: ' . $text;

    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}


//Send confirmation mail from portfolio to usermail
function sendConfirmationMail($firstName, $lastName, $email) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '';        //SMTP username
        $mail->Password   = '';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('', 'Portfolio Nicolas Loizeau');
        $mail->addAddress($email);                                  //Add a recipient
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->CharSet = "UTF-8";
        $mail->Subject = 'Accusé de réception';
        $mail->Body    = 'Bonjour ' . $firstName . ' ' . $lastName . '<br>' . 'J\'ai bien reçu votre message envoyé depuis mon portfolio (nicolas.cciopenlab.fr).' . '<br>' . 'Merci de m\'avoir contacté, je vous répondrai le plus rapidement possible.';
    
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    }