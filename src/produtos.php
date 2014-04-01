<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('p')->from('Produtos', 'p')
    ->where('p.preco > :preco')
    ->setParameter('preco', 10)
    ->orWhere('p.preco < :preco1')
    ->setParameter('preco1', 5)
    ->orderBy('p.preco', 'desc');

$produtos = $qb->getQuery()->getArrayResult();


echo '<table>';
foreach ($produtos as $k => $v) {
    ?>
    <tr>
        <td>
            <?= $v['id'] ?>
        </td>
        <td>
            <?= $v['descricao'] ?>
        </td>
        <td>
            <?= $v['preco'] ?>
        </td>
    </tr>
<?
}
echo '</table>';