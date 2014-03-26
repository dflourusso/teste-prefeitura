<?php

date_default_timezone_set('America/Sao_Paulo');
require_once 'bootstrap.php';


$fp = new FornecedoresProdutos();
$fp->setProdutoId(1);
$fp->setProduto(Produtos::find(1));
$fp->setFornecedorId(1);
$fp->setFornecedor(Fornecedores::find(1));
$fp->save();