<?php

use Doctrine\Common\Collections\ArrayCollection;

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
     * @ManyToMany(targetEntity="Produtos", mappedBy="fornecedores")
     */
    private $produtos;

    /**
     * Inicia a propriedade produtos
     */
    public function init()
    {
        $this->produtos = new ArrayCollection();
    }

    /**
     * Obtem a lista de entidades (Produtos)
     *
     * @return ArrayCollection
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * Atribui valor para a propriedade id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Obtém o valor da propriedade id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Atribui valor para a propriedade nomraz
     *
     * @param string $nomraz
     */
    public function setNomraz($nomraz)
    {
        $this->nomraz = $nomraz;
    }

    /**
     * Obtém o valor da propriedade nomraz
     *
     * @return string
     */
    public function getNomraz()
    {
        return $this->nomraz;
    }

    /**
     * Retorna uma instancia do Fornecedor
     *
     * @param int $id
     *
     * @return Fornecedores
     */
    public static function find($id)
    {
        return parent::find($id);
    }

} 