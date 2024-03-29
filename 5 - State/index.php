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
    require "Imposto/ImpostoMuitoCaro.php";
    require "Estado/IEstado.php";
    require "Estado/Aprovado.php";
    require "Estado/EmAprovacao.php";
    require "Estado/Reprovado.php";
    require "Estado/Finalizado.php";

    $reforma = new Orcamento(490);

    $reforma->aplicaDesconto();

    echo $reforma->getValor() . "\n";

    $reforma->aprova();
    $reforma->aplicaDesconto();

    echo $reforma->getValor() . "\n";

    // $reforma->finaliza(); tem que lançar uma exceção
    // $reforma->reprova(); tem que lançar uma exceção


    $reforma->aplicaDesconto();

    echo $reforma->getValor();
?>