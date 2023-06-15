<?php

class Dao { 
    private $dsn='mysql:host=localhost;dbname=projetosalao';
    private $usuario='root';
    private $senha=''; 
    private $pdo; 

public function __construct(){

    $this->pdo = new PDO($this->dsn, $this->usuario, $this->senha);
}

public function listaUsuarios(){
$resultado = $this->pdo->query("Select * from usuários");
return $resultado;
}

public function cadastrarUsuario($usuario,$senha){
    $this->pdo->query("insert into usuários values ('$usuario', '$senha') ");
}

public function verificaUsuario($usuario,$senha){
 $stmt = $this->pdo->query("select * from usuários where usuario='$usuario' and senha='$senha'");
 $resultado = $stmt->fetch();
 return $resultado;
}

public function inserirUsuario($usuario,$senha){
    $stmt = $this->pdo->query("insert into usuários values('$usuario','$senha')");
    $resultado = $stmt->execute();
    return $resultado; 
}

}