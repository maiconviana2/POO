<?php
#Métodos estáticos são métodos que podem ser usados sem precisar de criar um novo objeto.
class Matematica{
    #O mesmo pode ser feito com atributos.
    public static string $nome = 'Maicon';
    #para transformar uma função em estática coloque STATIC antes de function.
    public static function somar($x, $y){
        return $x + $y;
    }
    #Feito isso, posso usar a função sem ter que criar um novo objeto.
}

#Para usar a função, a classe a qual ela pertence deve ser mencionada depois coloca :: e o nome da função.
echo Matematica::somar(20,50);

#Atributos
echo Matematica::$nome;