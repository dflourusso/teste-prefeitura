<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$g = new Grupos();
$g->setDescricao('teste');
$g->setDatcad(new DateTime());
$g->setMesref(new DateTime());
$g->save();
