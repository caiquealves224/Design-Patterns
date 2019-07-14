<?php

class Reprovado 
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento Reprovado não pode receber descontos", 1);
    }
}