<?php

    class CalculadoraDeImpostos {
        public function calcula(Orcamento $Orcamento, $imposto){
            return $Orcamento->getValor() * 0.05;
        }

        public function calculaISS(Orcamento $Orcamento){
            return $Orcamento->getValor() * 0.10;
        }
    }

?>