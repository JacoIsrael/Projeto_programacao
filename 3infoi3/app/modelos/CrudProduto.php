<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/04/18
 * Time: 08:25
 */

class CrudProduto
{
    private $conexao;
    //getCattegorias() - retorna uma lista de objetos de todas os produtos
    public function getProdutos(){
        //CONEXAO
        $this->conexao = DBConnection::getConexao();

        //SELECT
        $sql = 'select * from produto';
        $resultado = $this->conexao->query($sql);

        //resultset do BD
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaProdutos = [];
        foreach ($produtos as $produto) {
            $listaProdutos[] = new Produtos($produto['nome_produto'], $produto['descricao_produto'], $produto['id_produto']);
        }
        return $listaProdutos;
    }

    public function getProduto(int $id){
        //recebe um $id inteiro e retorna o objeto produto correspondente

        //faz a conexao
        $this->conexao = DBConnection::getConexao();

        //criando a consulta
        $sql = "select * from produto where id_produto=".$id;

        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);

        //transformar o resultado em um array
        $produto = $result->fetch(PDO::FETCH_ASSOC);

        //instanciar um tipo produtos com os valores recebidos
        $objcat = new Produtos($produto["id_produto"].$produto["nome_produto"].$produto["descricao_produto"]);

        //retorna o objeto produto criado
        return $objcat;

    }



    public function insertProduto(Produtos $pro){

        $this->conexao = DBConnection::getConexao();
        $sql = "insert into produto (nome_produto, descricao_produto) values ('".$pro->getNome()."', '".$pro->getDescricao()."')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateProduto(Produtos $pro){

        $this->conexao = DBConnection::getConexao();
        $sql = "update produto set (nome_produto = '".$pro->getNome()."', descricao_produto = '".$pro->getDescricao."') where (id_produto'$pro->getId')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteProduto(int $id){
        $sql = "DELETE FROM produto WHERE (id_produto->$id)";
        $this->conexao->exec($sql);
    }
    //get Produto(1) - retorna o objeto da produto correspondente
}

$crud = new CrudProduto();
$cats = $crud->getProduto();
