<?php
    require "Orcamento.php";
    require "CalculadoraDeImpostos.php";
    require "Imposto/Imposto.php";
    require "TemplateDeImpostoCondicional.php";
    require "Imposto/ICMS.php";
    require "Imposto/ISS.php";
    require "Imposto/KCV.php";
    require "Imposto/ICPP.php";
    require "Imposto/IKCV.php";

    $reforma = new Orcamento(1000);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS(new KCV()));
?>