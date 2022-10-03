<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';

var_dump("eu tambem");
echo '<br>';

echo '<p>Concatenação</p>', '<br>';
echo "Nós também" . ' somos';
echo ("Nós também" . ' somos');
echo '<br>', "também aceito", "vírgulas";
echo '<br>';

echo "'Teste'" . '"Teste"';

print("<br>Também existe a função print");
print "<br>Também existe a função print";

//Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas letras');
echo '<br>' . mb_strlen('eu também', "utf-8");
echo '<br>' . substr("Só uma parte mesmo", 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); 

//método que a posição do texto 'abc' na string '!AbcaBcabc' retorna 1 
echo '<br>' . strpos('!AbcaBcabc', 'abc'); 
echo '<br>' . stripos('!AbcaBcabc', 'abc'); 

?>