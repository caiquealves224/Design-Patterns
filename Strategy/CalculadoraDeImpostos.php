<?php

class CalculadoraDeImpostos {
    public function calcula(Orcamento $Orcamento, $imposto){

        return $imposto->calcula($Orcamento);

    }
}

?>