<?php

abstract class TemplateDeImpostoCondicional extends Imposto
{

    public function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }
    
    public final function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarOMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        } else {
            return $this->taxacaoMinima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        }
    }

    protected abstract function deveUsarOMaximo(Orcamento $Orcamento);

    protected abstract function taxacaoMinima(Orcamento $Orcamento);
    
    protected abstract function taxacaoMaxima(Orcamento $Orcamento);
}