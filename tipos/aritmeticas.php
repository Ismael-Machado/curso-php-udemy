<div class="titulo">Operações aritméticas</div>

<?php
echo 1 + 1, '<br>'; 

var_dump(1 + 1);
echo '<br>'; 

echo 1 + 2.5, '<br>'; 
echo 10 - 2, '<br>'; 
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';  

var_dump(7 / 4);
echo '<br>'; 

echo intdiv(7, 4), '<br>'; 
echo round(7 / 4), '<br>'; 
echo 7 % 4, '<br>'; 
echo 7 % 0, '<br>'; //infinito, não gera erro
// echo intdiv(7, 0), '<br>'; //erro
echo 4 ** 2, '<br>';

// Precedência de operadores:
// () => ** => / * % => + - 

echo '<p>Precedência</p>';

