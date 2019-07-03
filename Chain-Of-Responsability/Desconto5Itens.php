<?php

class Desconto5Itens {
    public function desconto(Orcamento $Orcamento)
    {
        if(count($Orcamento->getLista() >= 5)) {
            return $Orcamento->getValor() * 0.1;
        } else {
            return 0;
        }
    }
}