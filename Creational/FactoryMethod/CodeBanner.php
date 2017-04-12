<?php

namespace DesignPatterns\Creational\FactoryMethod;

class CodeBanner implements BannerInterfase
{
    const TYPE = 'codeBanner';

    public function show()
    {
        return '<script>...</script>';
    }
}
