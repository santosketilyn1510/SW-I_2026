<?php

$cpf = preg_replace('/[^0-9]/', '', $_POST['cpf']);

if (strlen($cpf) != 11) {
    echo "<h2>$nome, CPF inválido!</h2>";
    exit;
}

if (preg_match('/(\d)\1{10}/', $cpf)) {
    echo "<h2>$nome, CPF inválido!</h2>";
    exit;
}

$soma = 0;
for ($i = 0, $peso = 10; $i < 9; $i++, $peso--) {
    $soma += $cpf[$i] * $peso;
}

$resto = ($soma * 10) % 11;
if ($resto == 10) {
    $resto = 0;
}

if ($resto != $cpf[9]) {
    echo "<h2>$nome, CPF inválido!</h2>";
    exit;
}

$soma = 0;
for ($i = 0, $peso = 11; $i < 10; $i++, $peso--) {
    $soma += $cpf[$i] * $peso;
}

$resto = ($soma * 10) % 11;
if ($resto == 10) {
    $resto = 0;
}

if ($resto != $cpf[10]) {
    echo "<h2>$nome, CPF inválido!</h2>";
} else {
    echo "<h2>$nome, CPF válido!</h2>";
}

?>