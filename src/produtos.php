<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('p')->from('Produtos', 'p')
    ->where($qb->expr()->like('p.descricao', $qb->expr()->literal('%rod%')));

$produtos = $qb->getQuery()->getArrayResult();

echo "<pre>";
var_export($produtos);
echo "</pre>";
