<?php

namespace DesignPatterns\Creational\FactoryMethod;

class EventFactory
{
    public function create($type)
    {
        if (Cinema::TYPE == $type) {
            return new Cinema();
        } else if (SimpleEvent::TYPE == $type) {
            return new SimpleEvent();
        }

        throw new \InvalidArgumentException('Unsupported event type');
    }
}
