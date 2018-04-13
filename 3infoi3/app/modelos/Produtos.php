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

    public function __construct($id = null, $nome = null, $descricao = null, $id_categoria = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
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
}


