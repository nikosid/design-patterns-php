<?php

namespace DesignPatterns\Creational\FactoryMethod;

class BannerFactory
{
    public function create($type)
    {
        if (ImageBanner::TYPE == $type) {
            return new ImageBanner();
        } else if (SwfBanner::TYPE == $type) {
            return new SwfBanner();
        } else if (CodeBanner::TYPE == $type) {
            return new CodeBanner();
        }

        throw new \InvalidArgumentException('Unsupported banner type');
    }
}
