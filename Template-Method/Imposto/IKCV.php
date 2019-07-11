<?php 

class IKCV extends TemplateDeImpostoCondicional
{
    public function deveUsarOMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500 && temItemMaiorQue100ReaisNo($Orcamento);
    }

    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.06;
    }
    
    public function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.10;
    }

    private function temItemMaiorQue100ReaisNo(Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if($item->getValor() > 100) return true;
        }
        return false;
  }
}