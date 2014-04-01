<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('p')->from('Produtos', 'p')
    ->where($qb->expr()->in('p.id', array(6, 7, 9)));

$produtos = $qb->getQuery()->getArrayResult();

echo "<pre>";
var_export($produtos);
echo "</pre>";
