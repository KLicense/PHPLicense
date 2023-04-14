<?php

namespace KSeven\License\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Factory.
 *
 * @method static \KSeven\License\KLicense   make(string|null $host = null, string|null $username = null, string|null $password = null): \KSeven\Cpanel\Cpanel
 * @method static \KSeven\License\KLicense   api1(string $user, string $module, string $function, array $args = [])
 * @method static \KSeven\License\KLicense   api2(string $user, string $module, string $function, array $args = [])
 * @method static \KSeven\License\KLicense   setAuth(string $username, string $password): \KSeven\Cpanel\Cpanel
 */
class KLicense extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'KLicense';
    }
}
