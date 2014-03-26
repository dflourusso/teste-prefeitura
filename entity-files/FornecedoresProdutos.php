<?php

/**
 * Class FornecedoresProdutos
 *
 * @Entity
 * @Table(name="fornecedoresprodutos")
 */
class FornecedoresProdutos extends AbstractModel
{
    /**
     * Primary Key column.
     *
     * @Id
     * @Column(type="integer")
     */
    protected $produto_id;

    /**
     * Primary Key column.
     *
     * @Id
     * @Column(type="integer")
     */
    protected $fornecedor_id;

    /**
     * @ManyToOne(targetEntity="Produtos")
     * @JoinColumn(name="produto_id", referencedColumnName="id")
     */
    private $produto;

    /**
     * @ManyToOne(targetEntity="Fornecedores")
     * @JoinColumn(name="fornecedor_id", referencedColumnName="id")
     */
    private $fornecedor;

    /**
     * Atribui valor para a targetEntity Fornecedores
     *
     * @param Fornecedores $fornecedor
     */
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * Obtem a targetEntity Fornecedores
     *
     * @return Fornecedores
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * Atribui valor para a propriedade fornecedor_id
     *
     * @param int $fornecedor_id
     */
    public function setFornecedorId($fornecedor_id)
    {
        $this->fornecedor_id = $fornecedor_id;
    }

    /**
     * Obtem o valor da propriedade fornecedor_id
     *
     * @return int
     */
    public function getFornecedorId()
    {
        return $this->fornecedor_id;
    }

    /**
     * Atribui valor para a targetEntity Produtos
     *
     * @param Produtos $produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    /**
     * Obtem a targetEntity Produtos
     *
     * @return Produtos
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Atribui valor para a propriedade produto_id
     *
     * @param int $produto_id
     */
    public function setProdutoId($produto_id)
    {
        $this->produto_id = $produto_id;
    }

    /**
     * Obtem o valor da propriedade produto_id
     *
     * @return int
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

} 