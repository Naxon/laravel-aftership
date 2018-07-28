<?php

namespace Naxon\AfterShip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Couriers
 * @package Naxon\AfterShip\Facades
 *
 * @method static array get()
 * @method static array all()
 * @method static array detect($trackingNumber, array $params = array())
 */
class Couriers extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'aftership.couriers';
    }
}