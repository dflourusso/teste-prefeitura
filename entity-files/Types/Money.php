<?php

namespace Types;

use Doctrine\DBAL\Types\FloatType,
    Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * Class Money
 *
 * @package Types
 */
class Money extends FloatType
{
    /**
     * Constante com o nome do type
     */
    const TYPE = 'money';

    /**
     * Obtem o nome do type
     *
     * @return string
     */
    public function getName()
    {
        return static::TYPE;
    }

    /**
     * Obtem o decimal no formato do banco de dados.
     *
     * @param double           $value
     * @param AbstractPlatform $platform
     *
     * @return double
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value) {
            return round($value, 2);
        }

        return null;
    }

    /**
     * Obtem o decimal no formato PHP
     *
     * @param double           $value
     * @param AbstractPlatform $platform
     *
     * @return double
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if ($value == null) {
            return null;
        }

        return (double)$value;
    }

} 