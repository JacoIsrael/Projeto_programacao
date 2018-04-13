<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:33
 */

require_once 'DBConnection.php';
require_once 'Categoria.php';

class CrudCategoria
{
    private $conexao;
    //getCattegorias() - retorna uma lista de objetos de todas as categorias
    public function getCategorias(){
        //CONEXAO
        $this->conexao = DBConnection::getConexao();

        //SELECT
        $sql = 'select * from categoria';
        $resultado = $this->conexao->query($sql);

        //resultset do BD
        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria) {
            $listaCategorias[] = new Categoria($categoria['nome_categoria'], $categoria['descricao_categoria'], $categoria['id_categoria']);
        }
        return $listaCategorias;
    }

    public function getCategoria(int $id){
        //recebe um $id inteiro e retorna o objeto categoria correspondente

        //faz a conexao
        $this->conexao = DBConnection::getConexao();

        //criando a consulta
        $sql = "select * from categoria where id_categoria=".$id;

        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);

        //transformar o resultado em um array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        //instanciar um tipo categoria com os valores recebidos
        $objcat = new Categoria($categoria["id_categoria"].$categoria["nome_categoria"].$categoria["descricao_categoria"]);

        //retorna o objeto categoria criado
        return $objcat;

        }



    public function insertCategoria(Categoria $cat){

        $this->conexao = DBConnection::getConexao();
        $sql = "insert into categoria (nome_categoria, descricao_categoria) values ('$cat->getNome()', '$cat->getDescricao')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateCategoria(Categoria $cat){

        $this->conexao = DBConnection::getConexao();
        $sql = "update categoria set (nome_categoria $cat->getNome()', descricao_categoria'$cat->getDescricao') where (id_categoria'$cat->getId')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteCategorias(int $id){
        $sql = "DELETE FROM categoria WHERE (id_categoria->$id)";
        $this->conexao->exec($sql);
    }
    //get Categorias(1) - retorna o objeto da categoria correspondente
}

$crud = new CrudCategoria();
$cats = $crud->getCategorias();