<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select($qb->expr()->count('p'))->from('Produtos', 'p');

$produtos = $qb->getQuery()->getArrayResult();

var_export($produtos);
