<?php

namespace models\contactModel;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../lib/vendor/autoload.php';
include('../config.php');

$mail = new PHPMailer(true);

try {
    //Definicoes do servidor
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //// modo debug 
    $mail->isSMTP(); // tipo de seguranca
    $mail->Host       = HOST; // hostname
    $mail->SMTPAuth   = true; // autorizacao SMTP
    $mail->Username   = EMAIL; // nome do usuario || email do usuario
    $mail->Password   = PASS; // senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; // porta do servidor

    //Receptores
    $mail->setFrom(EMAIL, NAME); // email a enviar
    $mail->addAddress(EMAIL, NAME); // email a receber

    // Campos a enviar
    $email = $_POST['email'];

    // Menssagem
    $mail->isHTML(true);
    $mail->Subject = "Email para Notificacoes";
    $mail->Body    =
        "
    Email do contactante: $email <br>
    ";
    $mail->AltBody     =
        "
    Email do contactante: $email \n
    ";

    $mail->send();

    $_SESSION['email_success'] = 'Menssagem enviada com sucesso';
} catch (Exception $e) {
    $_SESSION['email_error'] = 'Erro ao enviar menssagem.';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}