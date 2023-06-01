<?php
class Endereco
{
    public $cep;
    public $rua;
    public $cidade;
    public $numero;
    public $bairro;
    public $estado;

    public function mostraDados()
    {
        echo $this->rua;
        echo $this->cidade;
        echo $this->cep;
    }
}
?>