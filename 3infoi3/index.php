<?php
session_start();
include ('cabecalho.php');
?>

<!DOCTYPE html>
<html lang="en" style="background-color: #8c2f39;color: #461220;font-weight: bold">
<head>
    <meta charset="UTF-8">
    <title>Artistinhas</title>
</head>
<body>

<?php

?>

<div style="text-align: center;font-size:30px">

    <?php
        if (isset($_GET['erro']) and $_GET['erro']==1){
            echo ('<h3> Dados Incorretos</h3>');
        }
    ?>

 <?php
 if (!isset($_SESSION['nome'])){
 ?>
<!--SÓ APARECE SE NÃO ESTIVER LOGADO -->
<form action="valida.php" method="post" style="text-align: center; margin-top:30px; color: #fed0bb;">
    <h3>LOGIN</h3>
    <input type="text" placeholder="Nome do usuário" name="login"><br>
    <input type="password" placeholder="Senha" name="senha"><br>
    <input type="submit" value="Entrar">
</form>
</div>
<?php
}else{
?>
<!--SE ESTIVER LOGADO-->
    <p style="color: #fed0bb"> Olá Administrador!<? $_SESSION['nome']?></p>
    <a style="font-size:30px; text-decoration:none; color: #461220;" href="logout.php">Logout</a>
    <?php
}
?>

<div id="rodape">

</div>

</body>
</html>