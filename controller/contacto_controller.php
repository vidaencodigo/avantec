<?php

/* Clase para tratar con excepciones y errores */

require_once 'PHPMailer/src/Exception.php';
/* Clase PHPMailer */
require_once 'PHPMailer/src/PHPMailer.php';

/*Clase SMTP necesaria para conectarte a un servidor SMTP */
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class ContactoController
{
    function __construct()
    {
        try {
            // Intentar crear una nueva instancia de la clase PHPMailer
            $mail = new PHPMailer(true);
            // (…)
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }
    public function index()
    {
        require_once "view/contacto/contacto.php";
    }
}
