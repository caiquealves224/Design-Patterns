<?php

abstract class TemplateDeImpostoCondicional implements Imposto
{
    public final function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarOMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento);
        } else {
            return $this->taxacaoMinima($Orcamento);
        }
    }

    protected abstract function deveUsarOMaximo(Orcamento $Orcamento);

    protected abstract function taxacaoMinima(Orcamento $Orcamento);
    
    protected abstract function taxacaoMaxima(Orcamento $Orcamento);
}