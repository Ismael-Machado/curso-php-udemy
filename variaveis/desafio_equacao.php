<div class="titulo">Desafio Equação</div>

<?php 

$a = 6; 
$b = 3;
$c = 2;
$soma_1 = $a + $b;
$mult_1 = $a * $soma_1; 
$mult_2 = $b * $c;
$resultado_1 = ($mult_1 ** 2) / $mult_2;

$d = 1;
$e = 5;
$f = 7;

$sub_1 = $d - $e;
$sub_2 = $c - $f;
$mult_3 = $sub_1 - $sub_2;
$resultado_2 = ($mult_3 / $c) ** $c;

$resultado_3 = ($resultado_1 - $resultado_2) ** $b;

$resultado_final = $resultado_3 / (10 ** 3);

echo $resultado_final;