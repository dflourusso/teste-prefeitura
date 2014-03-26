<?php

/**
 * Class FornecedoresProdutos
 */
class FornecedoresProdutos
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

} 