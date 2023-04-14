<?php

namespace KSeven\License\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Factory.
 *
 * @method static \KSeven\License\KLicense   checkFile()
 * @method static \KSeven\License\KLicense   getVersion()
 * @method static \KSeven\License\KLicense   checkConnection()
 * @method static \KSeven\License\KLicense   getLastVersion()
 * @method static \KSeven\License\KLicense   active(string $License, string $User, bool $CreateFile = TRUE)
 * @method static \KSeven\License\KLicense   desactive(string $License, string $User)
 * @method static \KSeven\License\KLicense   verify($checkTime = FALSE, $License = FALSE, $User = FALSE)
 * @method static \KSeven\License\KLicense   checkUpdate()
 * @method static \KSeven\License\KLicense   downloadUpdate($updateID, $Type, $Version, $License = FALSE, $User = FALSE, $dbImport = FALSE)
 */
class KLicense extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'KLicense';
    }
}
