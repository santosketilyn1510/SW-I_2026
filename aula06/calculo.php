<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function calcularINSS($salarioBruto) {
    if ($salarioBruto <= 1621.00) return $salarioBruto * 0.075;
    elseif ($salarioBruto <= 2902.84) return 1621.00*0.075 + ($salarioBruto-1621.00)*0.09;
    elseif ($salarioBruto <= 4354.27) return 1621.00*0.075 + (2902.84-1621.00)*0.09 + ($salarioBruto-2902.84)*0.12;
    elseif ($salarioBruto <= 8475.55) return 1621.00*0.075 + (2902.84-1621.00)*0.09 + (4354.27-2902.84)*0.12 + ($salarioBruto-4354.27)*0.14;
    else return 1621.00*0.075 + (2902.84-1621.00)*0.09 + (4354.27-2902.84)*0.12 + (8475.55-4354.27)*0.14;
}

function calcularIRPF($baseCalculo) {
    if ($baseCalculo <= 2112.00) return 0;
    elseif ($baseCalculo <= 2826.65) return ($baseCalculo-2112.00)*0.075;
    elseif ($baseCalculo <= 3751.05) return (2826.65-2112.00)*0.075 + ($baseCalculo-2826.65)*0.15;
    elseif ($baseCalculo <= 4664.68) return (2826.65-2112.00)*0.075 + (3751.05-2826.65)*0.15 + ($baseCalculo-3751.05)*0.225;
    else return (2826.65-2112.00)*0.075 + (3751.05-2826.65)*0.15 + (4664.68-3751.05)*0.225 + ($baseCalculo-4664.68)*0.275;
}

$resultado = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8');
    $salarioBruto = floatval($_POST['salario'] ?? 0);
    $faltas = intval($_POST['faltas'] ?? 0);

    if ($salarioBruto > 0) {

        $inss = calcularINSS($salarioBruto);
        $baseIRPF = $salarioBruto - $inss;
        $irpf = calcularIRPF($baseIRPF);

        $descontoFaltas = min($faltas * ($salarioBruto / 30), $salarioBruto);
        $vt = $salarioBruto * 0.06;

        $total = $inss + $irpf + $descontoFaltas + $vt;
        $liquido = max(0, $salarioBruto - $total);

        $resultado = "$nome, seu salário líquido é: R$ " . number_format($liquido, 2, ',', '.');
    } else {
        $resultado = "Preencha os valores corretamente.";
    }
}

echo $resultado;
?>