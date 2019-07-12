<?php

class KCV extends Imposto
{
    public function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }
    
    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.2 + $this->calculaOutroImposto($Orcamento);
    }
}