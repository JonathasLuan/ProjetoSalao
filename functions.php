<?php

function selectUser()
{
    include_once('conexao.php');
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM usuário WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
}
?>