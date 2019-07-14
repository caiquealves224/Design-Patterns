<?php

class ItemBuilder
{
    private $nome;
    private $valor;

    public function __construct()
    {
        return $this;
    }

    public function comNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function comValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    public function build()
    {
        return new Item($this->nome ,$this->valor);
    }
}