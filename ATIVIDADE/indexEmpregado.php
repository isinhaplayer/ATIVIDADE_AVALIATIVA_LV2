<?php

    include 'Empregado.php';

$empregado1 = newEmpregado();
$empregado1->setNome('Marcos');
$empregado1->setSobrenome('Pires');
$empregado1->setSalarioMensal(3000);

$empregado2 = new Empregado();
$empregado2->setNome('Isabella');
$empregado2->setSobrenome('Valadares');
$empregado2->setSalarioMensal(5000);


echo "Salário anual do empregado 1: " . $empregado1->getSalarioAnual() . "\n";
echo "Salário anual do empregado 2: " . $empregado2->getSalarioAnual() . "\n";


$empregado1->recebaAumento(10);
$empregado2->recebaAumento(10);


echo "Novo salário anual do empregado 1: " . $empregado1->getSalarioAnual() . "\n";
echo "Novo salário anual do empregado 2: " . $empregado2->getSalarioAnual() . "\n";


?>