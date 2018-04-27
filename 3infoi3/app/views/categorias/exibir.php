<html>

<head>
</head>

<body>
    <h1>Detalhes da categoria - <?= $categorias->getNome();?> </h1>
    <p>Descrição: <?= $categorias->getDescricao();?></p>

    <a href="categorias.php?acao=alterar<?php  ?>">Editar a Categoria</a>
    <br>
    <a href="categorias.php?acao=excluir">Excluir a Categoria</a>


    <h1>Detalhes da Produto - <?= $produtos->getNome();?> </h1>
    <p>Descrição: <?= $produtos->getDescricao();?></p>

    <a href="produtos.php?acao=alterar<?php  ?>">Editar a Categoria</a>
    <br>
    <a href="produtos.php?acao=excluir">Excluir a Categoria</a>

</body>
</html>