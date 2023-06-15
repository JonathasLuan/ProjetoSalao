<?php 
include 'Dao.php';
$dao = new Dao();


$resultado = $dao->verificaUsuario($_POST['usuario'],$_POST['senha']);

if($resultado) { 
 include_once 'painel.php';
} else { 
    echo 'erro';
    include_once 'index.php';
}


?>