<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$f = new Fornecedores();
$f->setNomraz('Fornecetudo LTDA');
$f->save();