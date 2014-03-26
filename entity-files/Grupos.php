<?php

use Doctrine\Common\Collections\ArrayCollection;

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

    /**
     * @OneToMany(targetEntity="Produtos", mappedBy="grupo")
     **/
    private $produtos;

    public function init()
    {
        $this->produtos = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * Atribui valor para a coluna id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Obtém a coluna id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Atribui valor para a coluna datcad
     *
     * @param DateTime $datcad
     */
    public function setDatcad($datcad)
    {
        $this->datcad = $datcad;
    }

    /**
     * Obtém a coluna datcad
     *
     * @return DateTime
     */
    public function getDatcad()
    {
        return $this->datcad;
    }

    /**
     * Atribui valor para a coluna descrição
     *
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Obtém a coluna descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Retorna uma instancia do Grupo
     *
     * @param int $id
     *
     * @return Grupos
     */
    public static function find($id)
    {
        return parent::find($id);
    }

}
