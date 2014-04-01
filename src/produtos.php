<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('p.id, p.descricao, p.preco, g.descricao as grupo')->from('Produtos', 'p')
    ->leftJoin('p.grupo', 'g')
->orderBy('p.id');

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
        <td>
            <?= $v['grupo'] ?>
        </td>
    </tr>
<?
}
echo '</table>';