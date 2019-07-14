<?php

class ICPP extends TemplateDeImpostoCondicional
{

    public function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }
    
    public function deveUsarOMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500;
    }

    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05;
    }
    
    public function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.07;
    }
}