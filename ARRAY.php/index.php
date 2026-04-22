<?php
$_MENU = [
    'Home' => '<h1> página inicial </h1>',
    'contato' => '<h1> contato page aqui </h1>',
    'sobre' => '<h1> sobre page aqui </h1>',
    'experiencias' => '<h1> experiencias page aqui </h1>',
    'projetos' => '<h1> projetos page aqui </h1>',
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array php</title>

</head>
    
<body>
    <header class="alonso">
    <?php
     echo '<a class="logo"><img src="imagem.jpg" alt="Logo"></a>';
     foreach ($_MENU as $key => $value){ 

   echo '<a href="?page='.$key.'">'.$key.'</a> | ';
     }
     ?>
     </header>
     
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
     