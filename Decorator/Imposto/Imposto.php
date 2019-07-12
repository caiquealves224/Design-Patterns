<?php 

abstract class Imposto
{

    protected $outroImposto;

    function __construct($Imposto = null)
    {
        $this->outroImposto = $imposto;
    }
    public abstract function calcula(Orcamento $Orcamento);
}