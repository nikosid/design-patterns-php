<?php

namespace DesignPatterns\Creational\FactoryMethod;

class SimpleEvent implements EventInterfase
{
    const TYPE = 'simpleEvent';

    public function getType()
    {
        return self::TYPE;
    }
}
