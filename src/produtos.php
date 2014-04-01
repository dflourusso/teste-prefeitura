<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select($qb->expr()->countDistinct('p.grupo_id'))->from('Produtos', 'p');

$produtos = $qb->getQuery()->getArrayResult();

echo "<pre>";
var_export($produtos);
echo "</pre>";
