<?php

namespace DesignPatterns\Structural\Decorator;

class PrinterQuotes extends PrinterDecorator implements PrinterInterface
{
    public function printMessage()
    {
        return '"' . $this->wrapped->printMessage() . '"';
    }
}
