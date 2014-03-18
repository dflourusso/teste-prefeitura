<?php

class EM
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    public static $instance;

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public static function instance()
    {
        return static::$instance;
    }
}