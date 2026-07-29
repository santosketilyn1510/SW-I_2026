<?php
require_once 'biblioteca local/autoload.php';
$texto = new texto();
$calc = new Calcular();

echo 'BIBLIOTECA LOCAL';
echo "<br><br>";
echo 'soma:';
echo $calc->somar(10,20);
echo "<br><br>";
echo 'maiusculo:';
echo $texto->maiusculo("etec mcm");
echo "<br><br>";
echo 'multiplicar:';
echo $calc->multiplicar(10,20);
echo "<br><br>";
?>