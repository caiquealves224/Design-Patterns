<?php 

class Orcamento
{
    private $valor;
    private $itens;

    function __construct($valor){
        $this->valor = $valor;
        $this->itens = array();


    }

    public function addItem(Item $novoItem) : void
    {
        $this->itens[] = $novoItem;
    }

    public function getLista() : array
    {
        return $this->itens;
    }

    public function getValor(){
        return $this->valor;
    }
}
