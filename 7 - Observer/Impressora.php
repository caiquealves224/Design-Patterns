<?php

class Impressora implements IAcoesAoGerarNota
{
    public function executa(NotaFiscal $nf)
    {
        echo "Imprimindo Nota \n";
    }
}