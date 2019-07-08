<?php

class DescontoPorVendaCasada implements IDesconto
{

    private $proximoDesconto;

    public function calcula(Orcamento $Orcamento)
    {
        if($this->existe("Caneta",$Orcamento) && $this->existe("Lapis",$Orcamento) ){
            return $Orcamento->getValor() * 0.05;
        }

        return $this->proximoDesconto->calcula($Orcamento);
    }

    private function existe($nomeDoItem, Orcamento $orcamento) 
    {
        foreach ($orcamento->getLista() as $item) {
            if($item->getNome() == $nomeDoItem) return true;
        }
        return false;
    }

    public function setProximo(IDesconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}