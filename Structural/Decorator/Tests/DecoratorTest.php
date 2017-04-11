<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\PrinterEOL;
use DesignPatterns\Structural\Decorator\PrinterQuotes;
use DesignPatterns\Structural\Decorator\PrinterText;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @var PrinterText
     */
    private $printerText;

    protected function setUp()
    {
        $this->printerText = new PrinterText('foobar');
        parent::setUp();
    }

    public function testPrinterText()
    {
        $this->assertEquals('foobar', $this->printerText->printMessage());
    }

    public function testPrinterEOL()
    {
        $printerQuotes = new PrinterEOL($this->printerText);

        $this->assertEquals('foobar' . PHP_EOL, $printerQuotes->printMessage());
    }

    public function testPrinterQuotes()
    {
        $printerQuotes = new PrinterQuotes($this->printerText);

        $this->assertEquals('"foobar"', $printerQuotes->printMessage());
    }
}
