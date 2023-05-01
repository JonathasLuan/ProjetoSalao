<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    ini_set("SMTP", "smtp.example.com");
    ini_set("smtp_port", "587");


    $to = "jonathas_luan.17@hotmail.com";
    $subject = "Contato ProjetoSalão";
    $body = "Nome: " . $nome . "\n" . "E-mail: " . $email . "Telefone: " . $telefone . "\n" . "Assunto: " . $assunto . "\n" . "Mensagem: " . $mensagem;

    $header = "From: jonathas_luan.17@hotmail.com" . "\r\n" . "Reply-To:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo "E-mail enviado com sucesso";

    } else {
        echo "E-mail não pôde ser enviado";
    }
}

?>