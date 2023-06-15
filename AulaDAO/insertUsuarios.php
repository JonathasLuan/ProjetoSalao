<?php 
include 'Dao.php';
$dao = new Dao();
$resultado = $dao->inserirUsuario($_POST['usuario'],$_POST['senha']);
if($resultado) { 
    echo "usuario cadastrao com sucesso";
 include_once 'painel.php';
} else { 
    echo 'erro ao cadastrar usuario';
    include_once 'cadastrar_usuarios.php';
}


?>