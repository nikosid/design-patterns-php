<?php

namespace DesignPatterns\Creational\AbstractFactory\Wood;

use DesignPatterns\Creational\AbstractFactory\FurnitureFactory;

class WoodFactory extends FurnitureFactory
{

    public function getTable()
    {
        return new WoodenTable();
    }

    public function getChair()
    {
        return new WoodenChair();
    }

    public function getWardobe()
    {
        return new WoodenWardobe();
    }
}
