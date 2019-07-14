<?php

class GeradorDeNotasFiscais
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
    }

    public function comEmpresa($nomeEmpresa)
    {
        $this->empresa = $nomeEmpresa;
    }

    public function comCNPJ($CNPJ)
    {
        $this->cnpj = $CNPJ;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor(); 
        $this->valorImpostos += $novoItem->getValor() * 0.2; 
    }

    public function comObservacao($observacao)
    {
        $this->observacoes = $observacao;
    }

    public function naData($data = null )
    {
        if(is_null($data)){
            $data =  date("Y-m-d h:i:s");
        }

        $this->dataEmissao = $data;
    }

    public function gerar()
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