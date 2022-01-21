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
    $mail->setFrom('example@example.com', 'nome'); // email a enviar
    $mail->addAddress('example@example.com', 'nome'); // email a receber

    // Campos a enviar
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];

    // Menssagem
    $mail->isHTML(true);
    $mail->Subject = "Messagem de $name";
    $mail->Body    =
        "
    Email do contactante: $email <br>
    Nome do contactante: $name <br>
    Telefone do contactante: $tel <br>
    Assunto: <br>
    $assunto
    ";
    $mail->AltBody     =
        "
    Email do contactante: $email \n
    Nome do contactante: $name \n
    Telefone do contactante: $tel \n
    Assunto: \n
    $assunto
    ";

    $mail->send();

    $_SESSION['email_success'] = 'Menssagem enviada com sucesso';
} catch (Exception $e) {
    $_SESSION['email_error'] = 'Erro ao enviar menssagem.';
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}