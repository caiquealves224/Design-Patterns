<?php

class EmAprovacao implements IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento)
    {
        return $Orcamento->setValor($Orcamento->getValor() - $Orcamento->getValor() * 0.02);
    }

    public function Aprova(Orcamento $Orcamento){
        $Orcamento->setEstado(new Aprovado());
    }

    public function Reprova(Orcamento $Orcamento){
        $Orcamento->setEstado(new Reprovado());
    }

    public function Finaliza(Orcamento $Orcamento){
        throw new Exception("Não pode finalizar um orcamento sem reprovalo", 1);
    }
}