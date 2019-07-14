<?php 

date_default_timezone_set("Brazil/East");

require "NotaFiscal.php";
require "Item.php";
require "GeradorDeNotasFiscais.php";

$itens = array();
$itens[] = new Item("Tijolo", 250);
$itens[] = new Item("Cimento 1kg", 250);
$imposto = 500 * 0.2;

$notaFiscal = new NotaFiscal("ALura", "1234", $itens, 500, $imposto, "Tijolos amarelos", date("Y-m-d h:i:s"));

// var_dump($notaFiscal);

$geradorDeNota = new GeradorDeNotasFiscais();

$geradorDeNota->comEmpresa("Alura");
$geradorDeNota->comCNPJ("1234");
$geradorDeNota->addItem(new Item("Tijolo", 250));
$geradorDeNota->addItem(new Item("Cimento 1kg", 250));
$geradorDeNota->comObservacao("Tijolos Amarelos");
$geradorDeNota->naData();

$notaFiscal2 = $geradorDeNota->gerar();

var_dump($notaFiscal2);