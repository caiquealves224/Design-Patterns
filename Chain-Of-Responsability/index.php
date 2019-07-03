<?php
    require "Orcamento.php";
    require "Item.php";
    require "CalculadoraDeDescontos.php";

    $reforma = new Orcamento(500);
    $reforma->addItem(new Item("tijolo", 250));
    $reforma->addItem(new Item("cimento", 250));

    $calculadora = new CalculadoraDeDescontos();

    echo $calculadora->desconto($reforma)
?>