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
        include "../views/categorias/index.php";
        break;

    case 'inserir';
        echo 'Você escolheu INSERIR';
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new CrudCategoria();
        $categorias = $crud->getCategoria($id);
        include '../views/categorias/exibir.php';
        break;

    default:
        echo "Ação inválida";

}