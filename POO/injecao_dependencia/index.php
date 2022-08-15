<?php
// Basicamente é você utilizar uma classe dentro de outra classe.
//Dessa forma você pode usar o método de uma classe externa dentro da classe desejada.
class Basico1 {
    public function somar($x, $y){
        return $x + $y;
    }

    public function multiplicar($x, $y){
        return $x * $y;
    }
    
}

class Basico2 {
    public function somar($x, $y){
        $res = $x;
        for($q =0; $q < $y; $q++){
            $res++;
        }
        return $res;
    }
}
class Matematica{
    private $basico;

    //aqui será puxada a classe basico1 pra dentro da variável $basico. Assim as funções de basico1 pode ser usada em Matematica.
    public function __construct($b){
        //$this->basico = new Basico1();    Desta forma da pra colocar somente uma classe.

        //Desta forma fica dinâmico. Então é só atribuir a classe à alguma variável e colocar essa variável como argumento na instanciação da classe.
        $this->basico = $b;
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }

    public function multiplicar($x, $y){
        return $this->basico->multiplicar($x,$y);
    }
}
$basico = new basico1();
$mat = new Matematica($basico);
echo $mat->somar(5,20);
echo $mat->multiplicar(10,5);