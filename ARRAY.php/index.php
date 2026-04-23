<?php
$_MENU = [
    'Home' => '<h1>Página inicial</h1><p>Bem-vindo ao site!</p>',
    'Contato' => '<h1>Contato</h1><p>Email: contato@email.com</p>',
    'Sobre' => '<h1>Sobre</h1><p>Informações sobre mim.</p>',
    'Experiencias' => '<h1>Experiências</h1><p>Minhas experiências profissionais.</p>',
    'Projetos' => '<h1>Projetos</h1><p>Meus projetos desenvolvidos.</p>',
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>

    <!-- CSS simples -->
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        header {
            background-color: #333;
            padding: 15px;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 10px;
            font-weight: bold;
        }

        header a:hover {
            color: yellow;
        }

        img {
            width: 50px;
            vertical-align: middle;
        }
    </style>
</head>

<body>

<header>
    <?php
    echo '<a class="logo"><img src="img/logo.avif" alt="Logo"></a>';

    foreach ($_MENU as $key => $value){ 
        echo '<a href="?page='.$key.'">'.$key.'</a>';
    }
    ?>
</header>

<hr>

<?php
$_pagina = isset($_GET['page']) ? $_GET['page'] : 'Home';

if(array_key_exists($_pagina, $_MENU)){
    echo $_MENU[$_pagina];
} else {
    echo '<h1>Página não encontrada</h1>';
}
?>

</body>
</html>
