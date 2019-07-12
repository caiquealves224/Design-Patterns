<?php 

abstract class Imposto
{

    protected $outroImposto;

    function __construct(Imposto $Imposto = null)
    {
        $this->outroImposto = $Imposto;
    }

    protected function calculaOutroImposto(Orcamento $Orcamento)
    {
        if($this->outroImposto == null) return 0;
        return $this->outroImposto->calcula($Orcamento);
    }

    public abstract function calcula(Orcamento $Orcamento);
}