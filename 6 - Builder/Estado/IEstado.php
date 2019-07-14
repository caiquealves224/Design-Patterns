<?php 

interface IEstado
{
    public function aplicaDesconto(Orcamento $Orcamento);

    public function Aprova(Orcamento $Orcamento);

    public function Reprova(Orcamento $Orcamento);

    public function Finaliza(Orcamento $Orcamento);
}