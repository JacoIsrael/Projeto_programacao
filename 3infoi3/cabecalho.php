<!DOCTYPE html>
<html lang="en" style="background-color: #8c2f39;color: #461220;font-weight: bold">
<head>
    <meta charset="UTF-8">
    <title>Artistinhas</title>
</head>
<body>

<div id="topo_logo">
    <img src="imagens/logo.png">
</div>

<link rel="stylesheet" href="estilo.css" type="text/css">

<div style="text-align: center; font-weight: bold; color: #FED0BB; font-size: 20px" >
    <h1 style="font-size: 60px">Artistinhas</h1>
    <h3>Tudo sobre artistinhas que você encontra na deep web.</h3>
</div>


<!---->
<!--    <li><a href="produtos.php?cat=1" >xaumendez</a></li>-->
<!--        <ul> <li><img src="imagens/xaumendes.jpg" width="100" height="100"></li></ul>-->
<!--    <li><a href="produtos.php?cat=2" >edychera</a></li><img src="imagens/edychera.jpg" width="100" height="100">-->
<!--    <li><a href="produtos.php?cat=3"  >dualypa</a></li><img src="imagens/dualypa.jpg " width="100" height="100">-->
<!--    <li><a href="produtos.php?cat=4"   >teilursulfite</a><br><br></li><img src="imagens/teilur.jpg" width=150" height="100">-->




<div id="menu" >
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="produtos.php?cat=1" >Shawn Mendes</a>
            <ul>
                <li><img src="imagens/xaumendes.jpg" width="100" height="100"></li>
            </ul>
        </li>

        <li><a href="produtos.php?cat=2" >Ed Sheeran</a>
            <ul>
                <li><img src="imagens/edychera.jpg" width="100" height="100"></li>
            </ul>
        </li>

        <li><a href="produtos.php?cat=3"  >Dua Lipa</a>
            <ul>
                <li><img src="imagens/dualypa.jpg " width="100" height="100"></li>
            </ul>
        </li>

        <li><a href="produtos.php?cat=4"   >teilursulfite</a>
            <ul>
                <li><img src="imagens/teilur.jpg" width=150" height="100"></li>
            </ul>
        </li>
        <div style="text-align: right; color: #FED0BB; margin-top:-20px ">
            <form method="post" action="produtos.php">Pesquisar produtos
                <input type="text" name="busca">
                <input type="submit">
            </form>
        </div>
    </ul>


</div>