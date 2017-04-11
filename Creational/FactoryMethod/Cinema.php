<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Cinema implements EventInterfase
{
    const TYPE = 'cinema';

    public function getType()
    {
        return self::TYPE;
    }
}
