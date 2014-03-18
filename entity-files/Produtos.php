<?php

/**
 * Class Produtos
 *
 * @Entity
 * @Table(name="produtos")
 */
class Produtos extends AbstractModel
{
    /**
     * Primary Key column.
     *
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /**
     * Data de cadastro
     * @Column(type="datetime")
     */
    protected $datcad;

    /**
     * @Column(type="string", length=100, nullable=true)
     */
    protected $descricao;

    /**
     * @Column(type="decimal")
     */
    protected $preco;

    /**
     * @Column(type="integer")
     */
    protected $grupo_id;

    /**
     * @ManyToOne(targetEntity="Grupos")
     * @JoinColumn(name="grupo_id", referencedColumnName="id")
     */
    private $grupo;

} 