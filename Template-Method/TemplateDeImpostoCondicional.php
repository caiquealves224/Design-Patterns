<?php

class TemplateDeImpostoCondicional implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarOMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento);
        } else {
            return $this->taxacaoMinima($Orcamento);
        }
    }

    public abstract function deveUsarOMaximo(Orcamento $Orcamento);
}