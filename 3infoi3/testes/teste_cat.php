<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 09:00
 *
 * criar instância da Categoria
 *
 * Testar funções get set
 *
 * var_dump
 */

require_once "../app/modelos/Categoria.php";

$t1 = new Categoria();
$t1->setId(1);
$t1->setNome('Esportes');
$t1->setDescricao('Tudo para seu esporte');
var_dump($t1);

$t2 = new Categoria($_POST['nome'], $_POST['descricao'], $_POST['id']);
var_dump($t2);

