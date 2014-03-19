<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$produto = Produtos::find(1);
$produto->setDatcad(new DateTime());
$produto->setDescricao('Arroz Prime');
$produto->save();
$produto->refresh();
echo $produto;