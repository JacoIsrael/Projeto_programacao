<?php

include ('cabecalho.php');

if (isset($_GET['cat'])){
    if ($_GET['cat']==1){
        $categoria = "Categoria Shawn Mendes";
    }elseif ($_GET['cat']==2){
        $categoria = "Categoria Ed Sheeran";
    }elseif ($_GET['cat']==3){
        $categoria = "Categoria Dua Lipa";
    }elseif ($_GET['cat']==4){
        $categoria = "Categoria Teilursulfite";
    }else{
        $categoria = "Categoria Inexistente";
    }
}elseif (isset($_POST['busca'])){
    $categoria = "Não foi encontrado nenhum artistinha com o termo  ".$_POST['busca'];
}else{
    $categoria = "Opção inválida";
}

//if (isset($_GET['cat'])){
//    $categoria = $_GET['cat'];
//
//    $conexao = new PDO("mysql:host=location;dbname=3info3");
//
//    $sql = "select * from produto where id_categoria".$categoria." order by nome_categoria";
//
//    $result = $conexao->query($sql);
//
//    foreach ($result as $categoria){
//
//    }
//}


?>

<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artistinhas</title>
    <link rel="stylesheet" >
</head>
<body style="background-color: #8c2f39">

<div style="text-align: center;color: #FED0BB">
    <h1 > Artistinhas</h1>
    <h2 style=" color: #fefd7a"><?= $categoria ?> </h2>
</div>


</body>
</html>