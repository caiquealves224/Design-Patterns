<?php

class ICMS extends TemplateDeImpostoCondicional
{
    public function calcula(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() > 500 ) {
            return $Orcamento->getValor() * 0.05;    
        }
        return $Orcamento->getValor() * 0.05;
    }
}