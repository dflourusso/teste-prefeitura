<?php

$g = Grupos::find(1);
$p = $g->getProdutos();

echo "<pre>";
echo $p->current();
echo '</pre>';