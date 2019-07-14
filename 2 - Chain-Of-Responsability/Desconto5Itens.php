<?php

class Desconto5Itens implements IDesconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if(count($Orcamento->getLista()) >= 5) {
            return $Orcamento->getValor() * 0.1;
        } else {
            return $this->proximoDesconto->desconto($Orcamento);
        }
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }
}