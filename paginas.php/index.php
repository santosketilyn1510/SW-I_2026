<?php

$pagina = isset($_GET['page']) ? $_GET['page'] : 'inicio';

$menu = [
    'inicio' => 'Início',
    'curiosidades' => 'Curiosidades',
    'sobre' => 'Sobre',
    'sucessos' => 'Sucessos',
    'projetos' => 'Projetos'
];

$conteudo = [

'inicio' => '

<div class="banner">

    <h1>MATUÊ</h1>

    <p>Trap • Arte • Futuro • 30PRAUM</p>

</div>

<div class="foto-grande">

    <img src="img/matue1.jpg" alt="">

</div>

<h2>Quem é Matuê?</h2>

<p>
Matheus Brasileiro Aguiar, conhecido artisticamente como Matuê,
é um rapper, cantor, compositor e empresário brasileiro
considerado um dos maiores nomes do trap nacional.
</p>

<p>
O artista ficou famoso após o lançamento de "Anos Luz",
música que viralizou e marcou o início de uma nova fase
para o trap brasileiro.
</p>

<div class="foto-dupla">

    <img src="img/matue2.jpg" alt="">
    <img src="img/matue3.jpg" alt="">

</div>
',

'curiosidades' => '

<h2>Curiosidades</h2>

<div class="card">

    <h3>🔥 Viveu nos EUA</h3>

    <p>
    Durante a infância, Matuê viveu em Oakland,
    na Califórnia, onde teve contato com o rap americano.
    </p>

</div>

<div class="card">

    <h3>🩸 Estilo único</h3>

    <p>
    O artista mistura elementos futuristas,
    sombrios e psicodélicos em suas músicas e videoclipes.
    </p>

</div>

<div class="foto-grande">

    <img src="img/matue4.webp" alt="">

</div>
',

'sobre' => '

<h2>Sua História</h2>

<p>
Matuê nasceu em Fortaleza e começou sua carreira
de forma independente, produzindo músicas e videoclipes.
</p>

<p>
Hoje é dono da gravadora 30PRAUM e um dos maiores
artistas do trap brasileiro.
</p>

<div class="foto-tripla">

    <img src="img/matue5.jpg" alt="">
    <img src="img/matue6.jpg" alt="">
    <img src="img/matue7.jpg" alt="">

</div>
',

'sucessos' => '

<h2>Maiores Sucessos</h2>

<div class="musicas">

    <div class="musica">

        <h3>Anos Luz</h3>

        <p>
        Música que levou Matuê ao sucesso nacional.
        </p>

        <a href="https://www.youtube.com/watch?v=m226f2reF28"
        target="_blank"
        class="btn-musica">

        Ouvir Música

        </a>

    </div>

    <div class="musica">

        <h3>Máquina do Tempo</h3>

        <p>
        Faixa futurista com milhões de reproduções.
        </p>

        <a href="https://www.youtube.com/results?search_query=matuê+máquina+do+tempo"
        target="_blank"
        class="btn-musica">

        Ouvir Música

        </a>

    </div>

    <div class="musica">

        <h3>Vampiro</h3>

        <p>
        Hit em parceria com WIU e Teto.
        </p>

        <a href="https://www.youtube.com/results?search_query=matuê+vampiro"
        target="_blank"
        class="btn-musica">

        Ouvir Música

        </a>

    </div>

    <div class="musica">

        <h3>Kenny G</h3>

        <p>
        Música com instrumental marcante.
        </p>

        <a href="https://www.youtube.com/results?search_query=matuê+kenny+g"
        target="_blank"
        class="btn-musica">

        Ouvir Música

        </a>

    </div>

    <div class="musica">

        <h3>Gorilla Roxo</h3>

        <p>
        Faixa com vibe intensa e psicodélica.
        </p>

        <a href="https://www.youtube.com/results?search_query=matuê+gorilla+roxo"
        target="_blank"
        class="btn-musica">

        Ouvir Música

        </a>

    </div>

</div>

<div class="foto-grande">

    <img src="img/matue8.jpg" alt="">

</div>
',

'projetos' => '

<h2>Projetos</h2>

<div class="card">

    <h3>🩸 Máquina do Tempo</h3>

    <p>
    Álbum lançado em 2020 que revolucionou
    o trap brasileiro.
    </p>

</div>

<div class="card">

    <h3>🔥 30PRAUM</h3>

    <p>
    Gravadora criada por Matuê para revelar
    novos talentos.
    </p>

</div>

<div class="foto-dupla">

    <img src="img/matue9.jpg" alt="">
    <img src="img/matue10.jpg" alt="">

</div>
'
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Matuê Life</title>

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    background:
    linear-gradient(rgba(0,0,0,0.95),
    rgba(20,0,0,0.92));

    color:white;

    font-family:'Poppins', sans-serif;
}

header{

    background:black;

    padding:20px;

    display:flex;
    justify-content:center;
    align-items:center;

    gap:20px;

    border-bottom:2px solid darkred;

    position:sticky;
    top:0;
}

header a{

    color:white;

    text-decoration:none;

    padding:10px 15px;

    border-radius:10px;

    transition:0.3s;

    font-weight:bold;
}

header a:hover{

    background:darkred;

    box-shadow:
    0 0 15px red;
}

.logo img{

    width:70px;
    height:70px;

    object-fit:cover;

    border-radius:50%;

    border:2px solid red;

    box-shadow:
    0 0 20px red;
}

.container{

    width:90%;
    max-width:1100px;

    margin:40px auto;

    padding:40px;

    background:rgba(10,10,10,0.8);

    border-radius:20px;

    border:1px solid rgba(255,0,0,0.2);

    box-shadow:
    0 0 25px rgba(255,0,0,0.2);
}

.banner{

    text-align:center;

    margin-bottom:40px;
}

.banner h1{

    font-size:80px;

    color:#ff1a1a;

    font-family:'Cinzel', serif;

    text-shadow:
    0 0 15px red,
    0 0 30px darkred;
}

.banner p{

    color:#bbb;

    letter-spacing:4px;
}

h2{

    color:#ff3333;

    margin-top:30px;
    margin-bottom:20px;

    font-size:35px;

    font-family:'Cinzel', serif;
}

h3{

    color:#ff4d4d;

    margin-bottom:10px;
}

p{

    line-height:1.8;

    color:#ddd;

    margin-bottom:20px;
}

.card{

    background:rgba(30,0,0,0.6);

    padding:25px;

    border-radius:15px;

    margin-top:20px;

    border-left:5px solid red;

    transition:0.3s;
}

.card:hover{

    transform:translateY(-5px);

    box-shadow:
    0 0 20px rgba(255,0,0,0.5);
}

.foto-grande img{

    width:100%;

    height:450px;

    object-fit:cover;

    border-radius:20px;

    margin-top:25px;

    border:2px solid darkred;
}

.foto-dupla{

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:20px;

    margin-top:25px;
}

.foto-dupla img{

    width:100%;

    height:300px;

    object-fit:cover;

    border-radius:15px;

    border:2px solid darkred;
}

.foto-tripla{

    display:grid;

    grid-template-columns:1fr 1fr 1fr;

    gap:20px;

    margin-top:25px;
}

.foto-tripla img{

    width:100%;

    height:250px;

    object-fit:cover;

    border-radius:15px;

    border:2px solid darkred;
}

.musicas{

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(220px,1fr));

    gap:20px;

    margin-top:30px;
}

.musica{

    background:black;

    padding:25px;

    border-radius:15px;

    border:1px solid darkred;

    transition:0.3s;
}

.musica:hover{

    background:darkred;

    transform:scale(1.05);

    box-shadow:
    0 0 20px red;
}

.btn-musica{

    display:inline-block;

    margin-top:15px;

    padding:12px 20px;

    background:
    linear-gradient(45deg,darkred,red);

    color:white;

    text-decoration:none;

    border-radius:10px;

    font-weight:bold;

    transition:0.3s;
}

.btn-musica:hover{

    transform:scale(1.05);

    box-shadow:
    0 0 20px red;
}

footer{

    margin-top:50px;

    text-align:center;

    padding:25px;

    background:black;

    border-top:2px solid darkred;
}

@media(max-width:800px){

    .foto-dupla,
    .foto-tripla{

        grid-template-columns:1fr;
    }

    .banner h1{

        font-size:50px;
    }

    header{

        flex-wrap:wrap;
    }
}

</style>

</head>

<body>

<header>

    <a class="logo">

        <img src="img/30praum.jpg" alt="">

    </a>

    <?php

    foreach($menu as $key => $value){

        echo '<a href="?page='.$key.'">'.$value.'</a>';
    }

    ?>

</header>

<div class="container">

<?php

if(array_key_exists($pagina, $conteudo)){

    echo $conteudo[$pagina];

}else{

    echo "<h2>Página não encontrada</h2>";
}

?>

</div>

<footer>

<p>

Desenvolvido por Ketilyn Santos • <?php echo date("Y"); ?>

</p>

</footer>

</body>

</html>