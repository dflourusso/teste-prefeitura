<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$g = Grupos::find(2);
$p = $g->getProdutos();
foreach ($p as $v) {
    echo $v . PHP_EOL;
}

