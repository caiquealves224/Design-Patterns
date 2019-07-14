<?php

class Aprovado 
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        return $Orcamento->setValor($Orcamento->getValor() - 0.05);
    }
}