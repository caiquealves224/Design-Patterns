<?php
class Desconto500Reais implements IDesconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() > 500){
            return $Orcamento->getValor() * 0.05;
        }

        return $this->proximoDesconto->desconto($Orcamento);
    }

    public function setProximo(IDesconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }
}