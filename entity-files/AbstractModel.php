<?php

/**
 * Class AbstractModel
 */
class AbstractModel
{
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
}
