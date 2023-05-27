<?php
class Pessoa
{
    private $cpf;
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;
    public $email;

    public function cadastrarcpf($cpf)
    {
        // validar o CPF
        echo "<br>" . "CPF válido";
        $this->cpf = $cpf;
    }

    public function mostrarCpf()
    {
        echo "<br> CPF: " . $this->cpf;
    }
}
?>