<?php

class Reprovado implements IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        throw new Exception("Orçamento Reprovado não pode receber descontos", 1);
    }
}