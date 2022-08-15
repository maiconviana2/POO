<?php
class Funcionario {
    private $nome;
    private $salario;
    private $horasExtras;
    private $valorHorasExtras;
    private $aumento;


    public function setName($name){
        $this->nome = $name;
    }

    public function setSalario($base){
        $this->salario = $base;
    }

    public function setHorasExtras($extras){
        $this->horasExtras = $extras;
    }

    public function setValorHorasExtras($valor){
        $this->valorHorasExtras = $valor;
    }

    public function getSalarioEfetivo(){
        if($this->horasExtras){
            $this->salario = $this->salario + ($this->salario * 0.1);
            #Outra forma -> $this->aumento = $this->salario * 0.1 depois coloca + $this->aumento na função abaixo;
            return $this->salarioEfetivo = $this->salario + ($this->horasExtras * $this->valorHorasExtras) ;
        }else{
            echo 'O funcionário: '.$this->nome.' não tem horas extras.';
        }
    }
}