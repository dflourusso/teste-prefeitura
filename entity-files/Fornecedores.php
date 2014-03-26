<?php

/**
 * Class Fornecedores
 *
 * @Entity
 * @Table(name="fornecedores")
 */
class Fornecedores extends AbstractModel
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

    /**
     * Atribui valor para a propriedade id
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Obtém o valor da propriedade id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Atribui valor para a propriedade nomraz
     * @param string $nomraz
     */
    public function setNomraz($nomraz)
    {
        $this->nomraz = $nomraz;
    }

    /**
     * Obtém o valor da propriedade nomraz
     * @return string
     */
    public function getNomraz()
    {
        return $this->nomraz;
    }

} 