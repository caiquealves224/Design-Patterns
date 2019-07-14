<?php

class NotasFiscaisBuilder
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    function __construct()
    {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();

        return $this;
    }

    public function comEmpresa($nomeEmpresa)
    {
        $this->empresa = $nomeEmpresa;

        return $this;
    }

    public function comCNPJ($CNPJ)
    {
        $this->cnpj = $CNPJ;

        return $this;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor(); 
        $this->valorImpostos += $novoItem->getValor() * 0.2; 

        return $this;
    }

    public function comObservacao($observacao)
    {
        $this->observacoes = $observacao;

        return $this;
    }

    public function naData($data = null )
    {
        if(is_null($data)){
            $data =  date("Y-m-d h:i:s");
        }

        $this->dataEmissao = $data;

        return $this;
    }

    public function build()
    {
        $nf = new NotaFiscal(
            $this->empresa,
            $this->cnpj,
            $this->itens,
            $this->valorBruto,
            $this->valorImpostos,
            $this->observacoes,
            $this->dataEmissao
        );

        return $nf;
    }
}