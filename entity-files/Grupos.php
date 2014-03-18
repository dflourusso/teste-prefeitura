<?php

/**
 * Class Grupos
 *
 * @Entity
 * @Table(name="grupos")
 */
class Grupos extends AbstractModel
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

}
