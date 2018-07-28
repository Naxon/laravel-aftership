<?php

namespace Naxon\AfterShip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Notifications
 * @package Naxon\AfterShip\Facades
 *
 * @method static array create($slug, $trackingNumber, array $params = array())
 * @method static array createById($trackingId, array $params = array())
 * @method static array delete($slug, $trackingNumber, array $params = array())
 * @method static array deleteById($trackingId, array $params = array())
 * @method static array get($slug, $trackingNumber, array $params = array())
 * @method static array getById($trackingId, array $params = array())
 */
class Notifications extends Facade
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
        return 'aftership.notifications';
    }
}