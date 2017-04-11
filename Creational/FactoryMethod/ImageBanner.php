<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ImageBanner implements BannerInterfase
{
    const TYPE = 'imageBanner';

    public function show()
    {
        return self::TYPE;
    }
}
