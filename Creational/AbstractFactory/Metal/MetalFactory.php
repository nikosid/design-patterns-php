<?php

namespace DesignPatterns\Creational\AbstractFactory\Metal;

use DesignPatterns\Creational\AbstractFactory\FurnitureFactory;

class MetalFactory extends FurnitureFactory
{

    public function getTable()
    {
        return new MetalTable();
    }

    public function getChair()
    {
        return new MetalChair();
    }

    public function getWardobe()
    {
        return new MetalWardobe();
    }
}
