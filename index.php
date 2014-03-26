<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';



$f = Fornecedores::find(1);
$p = $f->getProdutos();
echo $p->count();
echo PHP_EOL;
foreach ($p as $v) {
    echo $v . PHP_EOL;
}


