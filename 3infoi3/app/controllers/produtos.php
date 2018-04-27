<?php

require_once "../modelos/CrudProduto.php";

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index';
        $crud = new CrudProduto();
        $produtos = $crud->getProdutos();
        echo ('<pre>');
        include "../views/templates/cabecalho.php";
        include "../views/categorias/index.php";
        include "../views/templates/rodape.php";
        break;

    case 'inserir';
        if (!isset($_POST['gravar'])){
            include "../views/templates/cabecalho.php";
            include "../views/categorias/inserir.php";
            include "../views/templates/rodape.php";
        }else{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Produtos($nome, $descricao);
            $crud = new CrudProduto();
            $crud->insertProduto($novaCat);
            header('Location: produtos.php');
        }
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudProduto();
        $produtos = $crud->getProduto($id);
        include "../views/templates/cabecalho.php";
        include '../views/categorias/exibir.php';
        include "../views/templates/rodape.php";
        break;

    case 'inserir';
        if (!isset($_POST['gravar'])){
            $id = $_GET['id'];
            $crud = new CrudProduto();
            $produtos = $crud->updateProduto();
            include "../views/templates/cabecalho.php";
            include "../views/categorias/inserir.php";
            include "../views/templates/rodape.php";
        }else{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Produtos($nome, $descricao);
            $crud = new CrudProduto();
            $crud->insertProduto($novaCat);
            header('Location: produtos.php');
        }
        break;

    default:
        echo "Ação inválida";

}