<?php

class Calculadora
{
    public $valorFinal;

    public function soma($valorRecebido)
    {
        return $this->valorFinal += $valorRecebido;
    }

    public function subtracao($valorRecebido)
    {
        return $this->valorFinal -= $valorRecebido;
    }

    public function multiplicacao($valorRecebido)
    {
        return $this->valorFinal *= $valorRecebido;
    }

    public function divisao($valorRecebido)
    {
        return $this->valorFinal /= $valorRecebido;
    }

    public function total()
    {
        return $this->valorFinal;
    }

    public function clear(){
        return $this->valorFinal = 0;
    }
}

$calc = new Calculadora();
$calc->soma(12) . "<br>";
$calc->soma(2) . "<br>";
$calc->subtracao(1) . "<br>";
$calc->multiplicacao(3) . "<br>";
$calc->divisao(2) . "<br>";
$calc->soma(0.5) . "<br>";
echo "Total: " . $calc->total();
$calc->clear();