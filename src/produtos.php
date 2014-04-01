<?php

$g = Grupos::find(1);
$p = $g->getProdutos();

echo "<pre>";
foreach ($p as $k => $v) {
    echo $v;
}
echo '</pre>';