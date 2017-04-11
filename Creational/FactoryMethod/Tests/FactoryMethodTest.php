<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\Cinema;
use DesignPatterns\Creational\FactoryMethod\EventFactory;
use DesignPatterns\Creational\FactoryMethod\SimpleEvent;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @var EventFactory
     */
    private $eventFactory;

    protected function setUp()
    {
        parent::setUp();
        $this->eventFactory = new EventFactory();
    }


    public function testCreateCinema()
    {
        $event = $this->eventFactory->create(Cinema::TYPE);

        $this->assertInstanceOf(Cinema::class, $event);
    }

    public function testCreateSimpleEvent()
    {
        $event = $this->eventFactory->create(SimpleEvent::TYPE);

        $this->assertInstanceOf(SimpleEvent::class, $event);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unsupported event type
     */
    public function testUnknownType()
    {
        $this->eventFactory->create('sometype');
    }
}
