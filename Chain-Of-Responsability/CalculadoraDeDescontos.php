<?php 

class CalculadoraDeDescontos
{
    public function desconto(Orcamento $Orcamento)
    {
        if(count($Orcamento->getItens() >= 5)){

            return $Orcamento->getValor() * 0.1;

        } elseif ( $Orcamento->getValot() > 500) {

            return $Orcamento->getValor() * 0.05;

        } else {
            
            return 0;
        }
    }
}