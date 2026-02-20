<?php
$nome = "ketilyn";
$idade = 16;
$altura = 1.62;
$status = true;

//exibir valores na tela 
echo "o nome é: $nome"; //1ª forma
echo "<br>";
echo 'o nome é: '. $nome; //2ªforma
echo "<br>";
echo $nome ;
echo "<br>";

//verificar tipo e valor de uma variável
var_dump($altura);
echo "<br>";
print_r($altura);
echo "<br>";

//curiosidade do php a respeito de valores booleanos 
echo "o status é: $status";


?>