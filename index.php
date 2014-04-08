<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$p = Produtos::find(1);
$p->setPreco(4.445221);
$p->save();
