<?php

interface IDesconto
{
    public function desconto(Orcamento $Orcamento);
    public function setProximo(IDesconto $proximo);
}