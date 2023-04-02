<?php
// Captura as informações enviadas pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Endereço de e-mail que irá receber a mensagem
$destinatario = "jonathas_luan.17@hotmail.com.br";

// Cabeçalhos do e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Corpo do e-mail
$corpo = "Nome: $nome\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Assunto: $assunto\n\n";
$corpo .= "Mensagem: $mensagem\n";

// Envia o e-mail
mail($destinatario, $assunto, $corpo, $headers);
