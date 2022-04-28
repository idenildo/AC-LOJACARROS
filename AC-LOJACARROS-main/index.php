<?php

$produto = new Produto();
$produto->setDescricao(“Produto 01”);
$produto->setPreco(9.99);
$produto->setQuantidade(2);
$produto->setMarca("Lacoste");
$produto->adicionar();

$carro = new Carro();
$carro->setDescricao(Carro 01);
$carro->setChassi("8vR 70GPDg YF 0W1743");
$carro->setQuantidade(1);
$carro->setpreco(R$73.390);
$carro->setNome("Hb-20s");
$carro->adiconar();

$funcionario = new Funcionario();
$funcionario->setNome("Idenildo Junior");
$funcionario->setCpf(936.777.210-67);
$funcionario->setSexo("Masculino");
$funcionario->setSalario(R$1.250.00);
$funcionario->adicionar();

$cliente = new Cliente();
$cliente->setNome("Jorge Vitor");
$cliente->setCpf(238.389.670-54);
$cliente->setEndereco("Av. Sete de Setembro, 9880");
$cliente->setSexo("Masculino");
$cliente->adicionar();
?>