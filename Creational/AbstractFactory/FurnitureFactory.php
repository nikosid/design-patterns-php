<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class FurnitureFactory
{
    public abstract function getTable();
    public abstract function getChair();
    public abstract function getWardobe();
}
