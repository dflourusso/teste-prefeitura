<?php

/**
 * Class Fornecedores
 */
class Fornecedores
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
     * @Column(type="string", length=70, nullable=true)
     */
    protected $nomraz;

} 