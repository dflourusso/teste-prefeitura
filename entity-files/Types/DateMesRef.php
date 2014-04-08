<?php

namespace Types;

use Doctrine\DBAL\Types\DateType,
    Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Class DateMesRef
 *
 * @package Types
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

    /**
     * Obtem a data no formato do banco de dados.
     *
     * @see Doctrine\DBAL\Types.DateType::convertToDatabaseValue()
     *
     * @param mixed $value
     * @param AbstractPlatform $platform
     *
     * @return string
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value) {
            return $value->format('Y-m-01');
        }
        return null;
    }

} 