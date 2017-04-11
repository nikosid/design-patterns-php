<?php

namespace DesignPatterns\Structural\Decorator;

class PrinterText implements PrinterInterface
{
    /**
     * @var string
     */
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function printMessage()
    {
        return $this->message;
    }
}
