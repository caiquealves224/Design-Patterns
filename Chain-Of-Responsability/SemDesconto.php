<?php

class SemDesconto implements InterfaceDesconto
{
    public function desconto(Orcamento $Orcamento)
    {
        return 0;
    }

    public function setProximo(Desconto $desconto)
    {
        # code...
    }
}