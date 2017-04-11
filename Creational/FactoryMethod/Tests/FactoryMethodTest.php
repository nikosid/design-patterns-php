<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\CodeBanner;
use DesignPatterns\Creational\FactoryMethod\ImageBanner;
use DesignPatterns\Creational\FactoryMethod\BannerFactory;
use DesignPatterns\Creational\FactoryMethod\SwfBanner;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @var BannerFactory
     */
    private $bannerFactory;

    protected function setUp()
    {
        parent::setUp();
        $this->bannerFactory = new BannerFactory();
    }


    public function testCreateImageBanner()
    {
        $event = $this->bannerFactory->create(ImageBanner::TYPE);

        $this->assertInstanceOf(ImageBanner::class, $event);
    }

    public function testCreateCodeBanner()
    {
        $event = $this->bannerFactory->create(CodeBanner::TYPE);

        $this->assertInstanceOf(CodeBanner::class, $event);
    }

    public function testCreateSwfBanner()
    {
        $event = $this->bannerFactory->create(SwfBanner::TYPE);

        $this->assertInstanceOf(SwfBanner::class, $event);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Unsupported banner type
     */
    public function testUnknownType()
    {
        $this->bannerFactory->create('sometype');
    }
}
