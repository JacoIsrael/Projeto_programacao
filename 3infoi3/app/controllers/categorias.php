<?php

require_once "../modelos/CrudCategoria.php";

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index';
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        echo ('<pre>');
        include "../views/templates/cabecalho.php";
        include "../views/categorias/index.php";
        include "../views/templates/rodape.php";
        break;

    case 'inserir';
        include "../views/templates/cabecalho.php";
        include "../views/categorias/inserir.php";
        include "../views/templates/rodape.php";
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudCategoria();
        $categorias = $crud->getCategoria($id);
        include "../views/templates/cabecalho.php";
        include '../views/categorias/exibir.php';
        include "../views/templates/rodape.php";
        break;

    default:
        echo "Ação inválida";

}