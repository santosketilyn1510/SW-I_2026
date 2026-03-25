<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];

$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];

$media = ($m1 + $m2 + $m3) / 3;

echo "É um prazer te conhecer $nome $sobrenome <br>";
echo "Sua média é: $media";

?>
</main>

</body>
</html>
