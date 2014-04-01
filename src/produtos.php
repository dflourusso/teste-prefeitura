<?php

$g = Grupos::find(1);
$p = $g->getProdutos();

echo "<pre>";
var_export($p->isEmpty());
echo '</pre>';