<?php
include_once 'pessoa.php';
class Cliente extends Pessoa
{ // extends significa "herda de"; uma classe herda atributos de outra
    public $codCliente;
    public function __construct($numeroCliente, $nomeCliente)
    {
        $this->codCliente = $numeroCliente; // this aponta metodos ou atributos da própria classe
        $this->nome = $nomeCliente;
    }

    public function mostraVip()
    {
        echo 'Nome: ' . $this->nome . '<br>';
    }
}
?>