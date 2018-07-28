<?php

namespace Naxon\AfterShip\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Trackings.
 *
 * @method static array create($trackingNumber, array $params = array())
 * @method static array delete($slug, $trackingNumber)
 * @method static array deleteById($trackingId)
 * @method static array all(array $params = array())
 * @method static array get($slug, $trackingNumber, array $params = array())
 * @method static array getById($trackingId, array $params = array())
 * @method static array update($slug, $trackingNumber, array $params = array())
 * @method static array updateById($trackingId, array $params = array())
 * @method static array retrack($slug, $trackingNumber)
 * @method static array retrackById($trackingId)
 */
class Trackings extends Facade
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
        return 'aftership.trackings';
    }
}
