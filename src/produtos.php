<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('sum(p.preco) as preco, g.descricao as grupo')->from('Produtos', 'p')
    ->leftJoin('p.grupo', 'g')
    ->orderBy('p.id')
    ->groupBy('p.grupo');

$produtos = $qb->getQuery()->getArrayResult();


echo '<table>';
foreach ($produtos as $k => $v) {
    ?>
    <tr>
        <td>
            <?= $v['preco'] ?>
        </td>
        <td>
            <?= $v['grupo'] ?>
        </td>
    </tr>
<?
}
echo '</table>';