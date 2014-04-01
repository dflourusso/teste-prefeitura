<?php

$g = Grupos::find(1);
$p = $g->getProdutos();

echo "<pre>";
echo $p->last();
echo '</pre>';