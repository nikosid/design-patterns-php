<?php

namespace DesignPatterns\Structural\Decorator;

class PrinterEOL extends PrinterDecorator implements PrinterInterface
{
    public function printMessage()
    {
        return $this->wrapped->printMessage() . PHP_EOL;
    }
}
