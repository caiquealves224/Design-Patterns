<?php

class EnviarSMS implements IAcoesAoGerarNota
{
    public function executa(NotaFiscal $nf)
    {
        echo "Enviando SMS \n";
    }
}