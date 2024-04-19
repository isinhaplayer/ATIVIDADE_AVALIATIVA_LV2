<?php

include 'Fatura.php';


$fatura = new Fatura ("12345", "Teclado USB", 5, 20.00);
 

echo "Número da fatura: " . $fatura->getNumero() . "\n";
$fatura->setNumero("54321");
echo "Novo número da fatura: " . $fatura->getNumero() . "\n";

echo "Descrição do item: " . $fatura->getDescricao() . "\n";
$fatura->setDescricao("Teclado sem fio");
echo "Nova descrição do item: " . $fatura->getDescricao() . "\n";

echo "Quantidade comprada: " . $fatura->getQuantidade() . "\n";
$fatura->setQuantidade(3);
echo "Nova quantidade comprada: " . $fatura->getQuantidade() . "\n";

echo "Preço por item: " . $fatura->getPrecoUnitario() . "\n";
$fatura->setPrecoUnitario(25.00);
echo "Novo preço por item: " . $fatura->getPrecoUnitario() . "\n";


echo "Valor total da fatura: " . $fatura->getTotalFatura() . "\n";

$fatura->setPrecoUnitario(-10.00);
echo "Novo preço por item (valor negativo): " . $fatura->getPrecoUnitario() . "\n";
echo "Valor total da fatura (valor negativo): " . $fatura->getTotalFatura() . "\n";
?>  