<?php
session_start(); // Inicia a sessão
session_destroy(); // Destrói a sessão

// Redireciona o usuário para a página de login
header("Location: home.php");
exit;
?>
