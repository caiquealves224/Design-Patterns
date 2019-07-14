<?php

class SemDesconto implements IDesconto
{
    public function desconto(Orcamento $Orcamento)
    {
        return 0;
    }

    public function setProximo(IDesconto $desconto)
    {
        # code...
    }
}