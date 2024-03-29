<?php 

class Orcamento
{
    private $valor;
    private $itens;
    private $estado;

    function __construct($valor){
        $this->valor = $valor;
        $this->itens = array();
        $this->estado = new EmAprovacao;

    }

    public function addItem(Item $novoItem) : void
    {
        $this->itens[] = $novoItem;
        $this->valor += $novoItem->getValor();
    }

    public function getLista() : array
    {
        return $this->itens;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(IEstado $estado)
    {
        $this->estado = $estado;
    }

    public function aplicaDesconto()
    {
        $this->estado->aplicaDesconto($this);
    }

    public function aprova()
    {
        $this->estado->aprova($this);
    }

    public function Reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }
}