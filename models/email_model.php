<?php

namespace models\contactModel;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../lib/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Definicoes do servidor
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //// modo debug 
    $mail->isSMTP(); // tipo de seguranca
    $mail->Host       = 'smp.example.com'; // hostname
    $mail->SMTPAuth   = true; // autorizacao SMTP
    $mail->Username   = 'username'; // nome do usuario || email do usuario
    $mail->Password   = 'password'; // senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465; // porta do servidor

    //Receptores
    $mail->setFrom('example@email.com', 'nome'); // email a enviar
    $mail->addAddress('example@email.com', 'nome'); // email a receber

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
