<?php 

class IKCV extends TemplateDeImpostoCondicional
{

    public function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    protected function deveUsarOMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($Orcamento);
    }

    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.06;
    }
    
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.10;
    }

    private function temItemMaiorQue100ReaisNo(Orcamento $orcamento) {
        foreach ($orcamento->getLista() as $item) {
            if($item->getValor() > 100) return true;
        }
        return false;
  }
}