<?php

/**
 * Class AbstractModel
 */
class AbstractModel
{
    /**
     * Função que realiza a população dos registros nas tabelas.
     *
     * @param null $data
     */
    public function __construct($data = null)
    {
        if (null !== $data) {
            foreach ($data as $k => $v) {
                if (substr($k, -3) == '_id') {
                    $table  = ucfirst(substr($k, 0, -3));
                    $method = "set$table";
                    $this->{$method}($table::find($v));
                }
                $this->{$k} = $v;
            }
        }
    }

    /**
     * Busca um registro na tabela tendo como base o parâmetro id
     *
     * @param $id
     *
     * @return AbstractModel
     */
    public static function find($id)
    {
        if (!$id) {
            return null;
        }

        return EM::instance()->find(get_called_class(), $id);
    }

    /**
     * Salva a instância do objeto
     */
    public function save()
    {
        EM::instance()->persist($this);
        EM::instance()->flush($this);
    }

    /**
     * Apaga o registro do objeto instanciado
     */
    public function delete()
    {
        EM::instance()->remove($this);
        EM::instance()->flush($this);
    }
}
