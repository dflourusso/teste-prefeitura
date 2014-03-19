<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


//$grupo = new Grupos();
//$grupo->setDescricao('Alimentos');
//$grupo->setDatcad(new DateTime());
//$grupo->save();
//echo $grupo;


$produto = new Produtos();
$produto->setDatcad(new DateTime());
$produto->setDescricao('Arroz');
$produto->setPreco(5.5);
$produto->setGrupo(Grupos::find(2));
$produto->save();
$produto->refresh();
echo $produto;
