<?php

class ICMS implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() > 500 ) {
            return $Orcamento->getValor() * 0.05;    
        }
        return $Orcamento->getValor() * 0.05;
    }
}