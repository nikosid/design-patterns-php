<?php

require_once 'vendor/autoload.php';

use \DesignPatterns\Structural\Decorator\PrinterText;
use \DesignPatterns\Structural\Decorator\PrinterEOL;
use \DesignPatterns\Structural\Decorator\PrinterQuotes;
use \DesignPatterns\Structural\Decorator\PrinterExclamation;

$printer = new PrinterEOL(new PrinterQuotes(new PrinterExclamation(new PrinterText('Привет'))));

echo $printer->printMessage();
