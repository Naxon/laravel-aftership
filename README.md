# Laravel AfterShip


[![GitHub release](https://img.shields.io/github/release/naxon/laravel-aftership.svg)](https://github.com/Naxon/laravel-aftership)
[![StyleCI](https://github.styleci.io/repos/142675159/shield?branch=master)](https://github.styleci.io/repos/142675159)
[![Github All Releases](https://img.shields.io/github/downloads/naxon/laravel-aftership/total.svg)](https://github.com/Naxon/laravel-aftership)

This package provides an AfterShip PHP SDK wrapper for Laravel.

## Installation

Install the package through composer:

```bash
composer require naxon/laravel-aftership:^1.0.0
```

Then publish the config file:

```bash
php artisan vendor:publish --provider="Naxon\AfterShip\AfterShipServiceProvider" --tag="config"
```

And finally, add your AfterShip API Key to your `.env` file:

```bash
AFTERSHIP_API_KEY=xxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx
```

## Usage

The four classes provided by the sdk are available as facades:

```php
<?php

use Naxon\AfterShip\Facades\Couriers;
use Naxon\AfterShip\Facades\LastCheckPoint;
use Naxon\AfterShip\Facades\Notifications;
use Naxon\AfterShip\Facades\Trackings;

$allTrackings = Trackings::all();
$allCouriers = Couriers::all();
$lastCheckPoint = LastCheckPoint::getById('123123');
$notification = Notifications::getById('123123');
```

For further usage information please read the documentation below.

## Documentation

Available in the [official sdk repository](https://github.com/AfterShip/aftership-sdk-php#couriers) and the [official documentation](https://docs.aftership.com/api/4/overview)

## Testing

Coming soon...

## Credits

- [Daniel Naxon](https://github.com/naxon)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.