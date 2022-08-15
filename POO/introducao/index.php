<?php

require 'Funcionario.php';

$funcionario = new Funcionario();
$funcionario->setName('Maicon');
$funcionario->setSalario(1000);
$funcionario->setHorasExtras(10);
$funcionario->setValorHorasExtras(20);

echo $funcionario->getSalarioEfetivo();

