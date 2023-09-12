<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../private/PHPmailer/Exception.php';
require '../private/PHPmailer/PHPMailer.php';
require '../private/PHPmailer/SMTP.php';
class email
{
    public static function send($id){
        require_once '../private/settings.php';
        global $host, $username, $password, $port;
        $customer_games = games::get($id);
        $customer = customers::get($id);



        $mail = new PHPMailer(true);

        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.strato.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'student@ictcampus.nl';                     //SMTP username
            $mail->Password   = 'N13tSp@mmen';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('student@ictcampus.n', 'Ratjetoe');
            $mail->addAddress($customer['email'], (ucfirst($customer['firstname']) ." " .$customer['lastname']));     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your games Overview';
            $mail->Body    = '<img src="http://ratjetoe/mail?id='. $id.'" alt="" />';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}