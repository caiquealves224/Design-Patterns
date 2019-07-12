<?php

class KCV extends Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.2 + $this->calculaOutroImposto($Orcamento);
    }
}