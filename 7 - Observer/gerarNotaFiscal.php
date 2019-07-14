<?php 

date_default_timezone_set("Brazil/East");

function carregaClasse($nomeClasse){
    require "$nomeClasse.php";
}

spl_autoload_register("carregaClasse");

$itens = array();
$itens[] = new Item("Tijolo", 250);
$itens[] = new Item("Cimento 1kg", 250);
$imposto = 500 * 0.2;

$notaFiscal = new NotaFiscal("ALura", "1234", $itens, 500, $imposto, "Tijolos amarelos", date("Y-m-d h:i:s"));

// var_dump($notaFiscal);

$geradorDeNota = new NotasFiscaisBuilder();

$geradorDeNota->comEmpresa("EMpresa xpto")
    ->comCNPJ("1234")
    ->addItem((new ItemBuilder())->comNome("teste de produto builder")->comValor(23)->build())
    ->addItem(new Item("Cimento 1kg", 250))
    ->comObservacao("Tijolos Amarelos")
    ->naData();

$geradorDeNota->addAcao(new Impressora());
$geradorDeNota->addAcao(new NotaFiscalDao());
$geradorDeNota->addAcao(new EnviarSMS());

$notaFiscal2 = $geradorDeNota->build();

var_dump($notaFiscal2);