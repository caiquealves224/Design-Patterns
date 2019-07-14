<?php 

date_default_timezone_set("Brazil/East");

require "NotaFiscal.php";
require "Item.php";
require "NotasFiscaisBuilder.php";

$itens = array();
$itens[] = new Item("Tijolo", 250);
$itens[] = new Item("Cimento 1kg", 250);
$imposto = 500 * 0.2;

$notaFiscal = new NotaFiscal("ALura", "1234", $itens, 500, $imposto, "Tijolos amarelos", date("Y-m-d h:i:s"));

// var_dump($notaFiscal);

$geradorDeNota = new NotasFiscaisBuilder();

$geradorDeNota->comEmpresa("EMpresa xpto")
    ->comCNPJ("1234")
    ->addItem(new Item("Tijolo", 250))
    ->addItem(new Item("Cimento 1kg", 250))
    ->comObservacao("Tijolos Amarelos")
    ->naData();

$notaFiscal2 = $geradorDeNota->build();

var_dump($notaFiscal2);