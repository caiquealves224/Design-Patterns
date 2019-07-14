<?php

class Finalizado implements IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento Finalizado não pode receber descontos", 1);
    }

    public function Aprova(Orcamento $Orcamento){
        throw new Exception("Orçamento já finalziado", 1);
    }

    public function Reprova(Orcamento $Orcamento){
        throw new Exception("Orcamento já finalizado", 1);
    }

    public function Finaliza(Orcamento $Orcamento){
        throw new Exception("Orçamento já finalziado", 1);
    }

}