<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    /**
     * @var self
     */
    private static $instanse;

    public static function getInstanse()
    {
        if (is_null(self::$instanse)) {
            self::$instanse = new self();
        }
        return self::$instanse;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }
}
