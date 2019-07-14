<?php
    require "IDesconto.php";
    require "Orcamento.php";
    require "Item.php";
    require "Desconto500Reais.php";
    require "Desconto5Itens.php";
    require "SemDesconto.php";
    require "CalculadoraDeDescontos.php";

    $reforma = new Orcamento(500);
    $reforma->addItem(new Item("tijolo", 250));
    $reforma->addItem(new Item("cimento", 250));

    $calculadora = new CalculadoraDeDescontos();

    echo $reforma->getValor();
    // echo $calculadora->desconto($reforma);
?>