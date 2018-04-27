ALTERAR
<form method="post" action="?acao=inserir">

    <label for="nome">Nome</label>
    <input type="hidden" value="<?= $categoria->getId(); ?>" >
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome() ?>"/>
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3"><?= $categoria >

    </textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar"/>
</form>

