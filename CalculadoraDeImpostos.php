<?php


    class CalculadoraDeImpostos {
        public function calculaICMS(Orcamento $Orcamento){
            return $Orcamento->getValor() * 0.05;
        }
    }


    class Orcamento {
        private $valor;
        
    }
?>