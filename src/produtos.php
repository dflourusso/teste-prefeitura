<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select($qb->expr()->min('p.preco'))->from('Produtos', 'p');

$produtos = $qb->getQuery()->getArrayResult();

var_export($produtos);
