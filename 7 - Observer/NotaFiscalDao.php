<?php

class NotaFiscalDao implements IAcoesAoGerarNota
{
    public function executa(NotaFiscal $nf)
    {
        echo "salvando no bd nota fiscal \n";
    }
}