<?php 

date_default_timezone_set("Brazil/East");

require "NotaFiscal.php";
require "Item.php";

$itens = array();
$itens[] = new Item("Tijolo", 250);
$itens[] = new Item("Cimento 1kg", 250);
$imposto = 500 * 0.02;

$notaFiscal = new NotaFiscal("ALura", "1234", $itens, 500, $imposto, "Tijolos amarelos", date("Y-m-d h:i:s"));

echo "<pre>";

var_dump($notaFiscal);