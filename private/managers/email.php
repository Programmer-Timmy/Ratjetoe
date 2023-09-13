<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../private/PHPmailer/Exception.php';
require '../private/PHPmailer/PHPMailer.php';
require '../private/PHPmailer/SMTP.php';
class email
{
    public static function send($id, $htmlcontent){
        $customer = customers::get($id);
        $settings = settings::settings();
        $mail = new PHPMailer(true);

        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $settings['host'];                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $settings['username'];                     //SMTP username
            $mail->Password   = $settings['password'];                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = $settings['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('student@ictcampus.n', 'Ratjetoe');
            $mail->addAddress($customer['email'], (ucfirst($customer['firstname']) ." " .$customer['lastname']));     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Your games Overview';
            $mail->Body    = $htmlcontent;
            $mail->AltBody = 'Sorry but mail does not suport HTML';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}