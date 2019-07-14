<?php

class Finalizado 
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento Finalizado não pode receber descontos", 1);
    }
}