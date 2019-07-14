<?php

class Reprovado implements IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento Reprovado não pode receber descontos", 1);
    }

    public function Aprova(Orcamento $Orcamento){
        throw new Exception("Apenas orçamentos aprovados podem ser finalizados", 1);
    }

    public function Reprova(Orcamento $Orcamento){
        throw new Exception("Este Orçamento já se encontra reprovado", 1);
    }

    public function Finaliza(Orcamento $Orcamento){
        throw new Exception("Apenas orçamentos aprovados podem ser finalizados", 1);
    }
}