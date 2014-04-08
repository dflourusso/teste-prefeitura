<?php

namespace types;

use Doctrine\DBAL\Types\DateType;

/**
 * Tipo customizado
 *
 * Class DateMesRef
 *
 * @package types
 */
class DateMesRef extends DateType
{
    /**
     * Constante com o nome do type
     */
    const TYPE = 'datemesref';

    /**
     * Obtem o nome do type
     * @return string
     */
    public function getName()
    {
        return static::TYPE;
    }

} 