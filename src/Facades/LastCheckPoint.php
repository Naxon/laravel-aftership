<?php

namespace Naxon\AfterShip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LastCheckPoint.
 *
 * @method static array get($slug, $trackingNumber, array $params = array())
 * @method static array getById($trackingId, array $parrams = array())
 */
class LastCheckPoint extends Facade
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
        return 'aftership.lastCheckPoint';
    }
}
