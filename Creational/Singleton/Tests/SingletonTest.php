<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $firstCall = Singleton::getInstanse();
        $secondCall = Singleton::getInstanse();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    /**
     * @expectedException \Error
     */
    public function testDirectCreatingSingleton()
    {
        new Singleton();
    }

    /**
     * @expectedException \Error
     */
    public function testCloneSingleton()
    {
        $firstCall = Singleton::getInstanse();
        $secondCall = clone $firstCall;
    }
}
