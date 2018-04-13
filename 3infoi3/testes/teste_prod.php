<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:03
 */

require_once "../app/modelos/Produtos.php";

$t1 = new Categoria();
$t1->setId(1);
$t1->setNome('Esportes');
$t1->setDescricao('Tudo para seu esporte');
var_dump($t1);

$t2 = new Categoria(2, 'Móveis', "Móveis para sua casa");
var_dump($t2);