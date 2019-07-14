<?php

class Aprovado implements IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        return $Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.05);
    }

    public function Aprova(Orcamento $Orcamento){
        throw new Exception("Esse Orcamento ja se encontra aprovado");
    }

    public function Reprova(Orcamento $Orcamento){
        throw new Exception("Um Orcamento aprovado não poe ser reprovado");
    }

    public function Finaliza(Orcamento $Orcamento){
        $Orcamento->setEstado(new Finalizado());
    }
}