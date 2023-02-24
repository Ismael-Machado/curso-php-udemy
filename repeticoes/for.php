<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}


$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

print_r($array);

echo "<hr>";

for($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

echo count($matrix). "<br>";

for($i = 0; $i < count($matrix); $i++) {
    echo $i. '<br>';
    echo count($matrix[$i]). '<br>';
    /*
    o count($matrix) informa a quantidade de arrays (linhas) da matrix (quantidade horizontal)
    no count($matrix[$i]) informa a quantidade de itens no array naquela posição/linha 
    exemplo: se o i tiver na posição 0 a count vai retornar a quantidade de itens na linha zero na matriz 
    */
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}
