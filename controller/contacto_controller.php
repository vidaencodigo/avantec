<?php

/* Clase para tratar con excepciones y errores */

require_once 'PHPMailer/src/Exception.php';
/* Clase PHPMailer */
require_once 'PHPMailer/src/PHPMailer.php';

/*Clase SMTP necesaria para conectarte a un servidor SMTP */
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ContactoController
{
    function __construct()
    {
    }
    public function index()
    {
        require_once "view/contacto/contacto.php";
    }


    public function send_mail()
    {
        if ($_SERVER['REQUEST_METHOD'] = "post") {

            $nombre = $_REQUEST['name']. " ". $_REQUEST['sourn'];
            $this->mail($nombre, $_REQUEST['mail'], $_REQUEST['commnent']);
        }
    }
    public function mail($name, $recip, $commnet)
    {
        $mensaje = "
            Nombre: {$name}
            <br>
            Correo: {$recip}
            <br>
            Mensaje:<br>
            {$commnet}
            <br>
        ";
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'serviciosav914@gmail.com';                     //SMTP username
            $mail->Password   = 'keddvapezdjxzfih';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('serviciosav914@gmail.com', 'Mailer');
            $mail->addAddress('serviciosav914@gmail.com', 'serviciosav914@gmail.com');     //Add a recipient
           
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Servicios '. $name;
            $mail->Body    = $mensaje;
            $mail->AltBody = 'Mensaje de aplicación';
        
            $mail->send();

            
            $this->index();
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
