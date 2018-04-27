
    <h1>Categorias</h1>
    <a href="?acao=inserir">Inserir Categoria</a>

    <table>
        <tr>
            <th>#</th>
            <th>Nome da Categoria</th>

        </tr>

        <?php foreach($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria->getId(); ?></td>
            <td><a href="?acao=exibir&id=<?= $categoria->getId();?>"><?= $categoria->getNome(); ?></a></td>
        </tr>

        <?php endforeach; ?>
    </table>

    <h1>Produtos</h1>
    <a href="?acao=inserir">Inserir Produto</a>

    <table>
        <tr>
            <th>#</th>
            <th>Nome do Produto</th>

        </tr>

        <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto->getId(); ?></td>
                <td><a href="?acao=exibir&id=<?= $produto->getId();?>"><?= $produto->getNome(); ?></a></td>
            </tr>

        <?php endforeach; ?>
    </table>

