<?php

class Desconto500Reais
{
    public function desconto(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() > 500){
            return $Orcamento->getValor() * 0.05;
        }

        return 0;
    }
}