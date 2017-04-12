<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\Metal\MetalChair;
use DesignPatterns\Creational\AbstractFactory\Metal\MetalFactory;
use DesignPatterns\Creational\AbstractFactory\Metal\MetalTable;
use DesignPatterns\Creational\AbstractFactory\Metal\MetalWardobe;
use DesignPatterns\Creational\AbstractFactory\Wood\WoodenChair;
use DesignPatterns\Creational\AbstractFactory\Wood\WoodenTable;
use DesignPatterns\Creational\AbstractFactory\Wood\WoodenWardobe;
use DesignPatterns\Creational\AbstractFactory\Wood\WoodFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testMetalFactory()
    {
        $factory = new MetalFactory();

        $table = $factory->getTable();
        $chair = $factory->getChair();
        $wardobe = $factory->getWardobe();

        $this->assertInstanceOf(MetalTable::class, $table);
        $this->assertInstanceOf(MetalChair::class, $chair);
        $this->assertInstanceOf(MetalWardobe::class, $wardobe);
    }
    public function testWoodFactory()
    {
        $factory = new WoodFactory();

        $table = $factory->getTable();
        $chair = $factory->getChair();
        $wardobe = $factory->getWardobe();

        $this->assertInstanceOf(WoodenTable::class, $table);
        $this->assertInstanceOf(WoodenChair::class, $chair);
        $this->assertInstanceOf(WoodenWardobe::class, $wardobe);
    }
}
