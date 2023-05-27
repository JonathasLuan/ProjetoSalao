<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jonathasluan.17@gmail.com';
    $mail->Password = '131544741Jl-G@gleNoVa1';
    $mail->Port = 587;

    $mail->setFrom('jonathasluan.17@gmail.com');
    $mail->addAddress('jonathasluan.17@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Teste de e-mail';
    $mail->Body = 'Chegou o e-mail teste do <strong>Código</strong>';
    $mail->AltBody = 'Chegou o e-mail teste do Código';

    if($mail->send()) {
        echo 'E-mail enviado com sucesso.';
    } else {
        echo 'E-mail não enviado.';
    }

} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

?>