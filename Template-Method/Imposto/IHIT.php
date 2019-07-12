<?php

class IHIT extends TemplateDeImpostoCOndicional
{

    protected function deveUsarOMaximo(Orcamento $Orcamento){
        $noOrcamento = Array();

        foreach($Orcamento->getLista() as $item ){
            if(in_array($item->getNome(), $noOrcamento)) return true;
            else $noOrcamento[] = $item->getNome();
        }

        return false;
    }

    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * (count($Orcamento->getLista()) * 0.01);
    }
    
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return ($Orcamento->getValor() * 0.13) + 100;
    }

}