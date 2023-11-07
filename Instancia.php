<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta(123, "Jorivaldo Pinto da Silva", 10.90);
$cliente = new Cliente("Jorivaldo Pinto da Silva", 20, "mininx", $conta);

echo $cliente->retornarConta()->retornarNome();