<?php

class ImpostoMuitoCaro extends Imposto
{
    function __construct($Imposto = null)
    {
        parent::__construct($Imposto);
    }

    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.20 + $this->calculaOutroImposto($Orcamento);
    }
}