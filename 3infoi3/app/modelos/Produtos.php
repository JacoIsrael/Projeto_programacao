<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 08:56
 * Classe que representa a entidade produto
 */

class Produtos
{
    private $id;
    private $nome;
    private $descricao;
    private $id_categoria;
    private $foto_produto;
    private $preco_produto;

    public function __construct($id = null, $nome = null, $descricao = null, $foto_produto = null, $preco_produto = null, $id_categoria = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->foto_produto = $foto_produto;
        $this->preco_produto = $preco_produto;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param null $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return null
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param null $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id_categoria
     */
    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    /**
     * @return null
     */
    public function getFotoProduto()
    {
        return $this->foto_produto;
    }

    /**
     * @param null $foto_produto
     */
    public function setFotoProduto($foto_produto)
    {
        $this->foto_produto = $foto_produto;
    }

    /**
     * @return null
     */
    public function getPrecoProduto()
    {
        return $this->preco_produto;
    }

    /**
     * @param null $preco_produto
     */
    public function setPrecoProduto($preco_produto)
    {
        $this->preco_produto = $preco_produto;
    }


}


