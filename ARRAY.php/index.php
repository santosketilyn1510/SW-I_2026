<?php
$_MENU = [

    'inicio' => '<h1>Um pouco sobre</h1>
    <p>Matheus Brasileiro Aguiar, mais conhecido como Matuê, é um rapper, cantor, compositor e empresário brasileiro.
    Ficou conhecido com o single "Anos Luz" (2017) e pelo álbum Máquina do Tempo (2020).
    É considerado um dos símbolos do trap brasileiro.</p>',

    'curiosidades' => '<h1>Dia Nacional do Trap</h1>
    <p>Em 23 de novembro de 2025, após o cancelamento do festival CENA 2K25, artistas organizaram shows alternativos.
    Matuê foi um dos principais nomes do movimento, ajudando a promover artistas underground e fortalecer a cena.</p>',

    'sobre' => '<h1>Sua história</h1>
    <p>Matuê nasceu em Fortaleza e morou em Oakland (EUA) durante a infância.
    Lá aprendeu inglês e teve contato com o rap. Trabalhou como vendedor e professor antes de investir na música.
    Em 2021, revelou que se tornou pai.</p>',

    'sucessos' => '<h1>Faixas mais ouvidas</h1>
    <ul>
        <li>Anos Luz</li>
        <li>Máquina do Tempo</li>
        <li>Vampiro</li>
        <li>Kenny G</li>
        <li>Gorilla Roxo</li>
    </ul>'
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matuê Life</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #111;
    color: #fff;
}

header {
    background: #000;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

header a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 8px 12px;
    transition: 0.3s;
}

header a:hover {
    background-color: red;
    border-radius: 5px;
}

.logo img {
    width: 60px;
}

.container {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background: #1a1a1a;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255,0,0,0.3);
}

h1 {
    color: red;
}

ul {
    text-align: left;
}

hr {
    border: none;
    height: 1px;
    background: #333;
}
</style>
</head>

<body>

<header>
    <a class="logo"><img src="img/30praum.jpg" alt="Logo"></a>

    <?php
    foreach ($_MENU as $key => $value){ 
        echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
    }
    ?>
</header>

<hr>

<div class="container">
<?php
$_pagina = isset($_GET['page']) ? $_GET['page'] : 'inicio';

if(array_key_exists($_pagina, $_MENU)){
    echo $_MENU[$_pagina];
} else {
    echo '<h1>Página não encontrada</h1>';
}
?>
</div>

</body>
</html>
