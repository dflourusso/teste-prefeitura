<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';

$grupo = new Grupos();
$grupo->setDescricao('Alimentos');
$grupo->setDatcad(new DateTime());

echo $grupo;