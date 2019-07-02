<?php
    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "Imposto/ICMS.php";
    require "Imposto/ISS.php";

    $reforma = new Orcamento(500);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br />";

    echo $calculadora->calcula($reforma, new ISS());
?>