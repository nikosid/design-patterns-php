<?php

namespace DesignPatterns\Creational\FactoryMethod;

class SwfBanner implements BannerInterfase
{
    const TYPE = 'swfBanner';

    public function show()
    {
        return self::TYPE;
    }
}
