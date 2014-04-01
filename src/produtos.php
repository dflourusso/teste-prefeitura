<?php
$qb = EM::instance()->createQueryBuilder();
$qb->select('p')->from('Produtos', 'p');

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