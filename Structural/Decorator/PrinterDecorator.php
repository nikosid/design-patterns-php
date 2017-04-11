<?php

namespace DesignPatterns\Structural\Decorator;

abstract class PrinterDecorator
{
    /**
     * @var PrinterInterface
     */
    protected $wrapped;

    public function __construct(PrinterInterface $printer)
    {
        $this->wrapped = $printer;
    }
}
