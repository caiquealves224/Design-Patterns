<?php 

date_default_timezone_set("Brazil/East");

require "NotaFiscal.php";
require "Item.php";
require "GeradorNotasFiscais.php";

$itens = array();
$itens[] = new Item("Tijolo", 250);
$itens[] = new Item("Cimento 1kg", 250);
$imposto = 500 * 0.2;

$notaFiscal = new NotaFiscal("ALura", "1234", $itens, 500, $imposto, "Tijolos amarelos", date("Y-m-d h:i:s"));

// var_dump($notaFiscal);

$geradorDeNota = new GeradorNotasFiscais();

$geradorDeNota->comEmpresa("Alura");
$geradorDeNota->comCNPJ("1234");
$geradorDeNota->addItem("");
$geradorDeNota->addItem("");
$geradorDeNota->comObservacao("Tijolos Amarelos");
$geradorDeNota->naData();