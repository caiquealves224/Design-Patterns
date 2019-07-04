<?php 

class CalculadoraDeDescontos
{
    public function desconto(Orcamento $Orcamento)
    {
        $desconto5itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $semDesconto = new SemDesconto();

        $desconto5itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($semDesconto);
        
        $valorDoDesconto = $desconto5itens->desconto($Orcamento);
        return $valorDoDesconto;
    }
}