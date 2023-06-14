<?php
include_once 'cliente.php';

/*
pontos gerados or compras referente ao valor
bonus serão descontos gerados pelo sistema
Pontos expiram
100-300 pontos - 10%
301-500 pontos - 15%
 */
class Clientevip extends Cliente
{
    public $bonus;
    public $desconto; // 0.10 - 0.15
    public $pontos;

    public function somaPontos($pontos)
    {
        $this->pontos = $this->pontos + $pontos;
    }

    public function expiraPontos($pontos)
    {
        $this->pontos = $this->pontos - $pontos;
    }

    public function aplicaDesconto()
    {
        if ($this->pontos >= 100 || $this->pontos <= 300) {
            $this->desconto = 0.1;
        } else {
            if ($this->pontos >= 301) {
                $this->desconto = 0.15;
            }
        }
    }
}
?>