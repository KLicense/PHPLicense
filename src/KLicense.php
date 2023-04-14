<?php

namespace KSeven\License;

//declare(strict_types=1);

use Exception;
use KSeven\License\Config\Config;
use KSeven\License\System\BaseLib;

class KLicense extends BaseLib
{

    /**
     * @throws Exception
     */
    public function __construct()
    {

        //$config = new Config();

        $SSL = Config::$SSL; // $config->SSL;

        $Date = [
            "PRODUCTID" => "F45F54B3",
            "URL"   => "manager.kseven.dev.br", // Sem http e barra final
            "KEY"   => "BCAF5CC39EB38ED14BC1",
            "LANGUAGE"  => Config::$Lang, // $config->Lang,
            "VERSION"   => Config::$Version, // $config->Version,
            "ENVATO" => Config::$Envato, // $config->Envato,
            "VARIFICATION" => Config::$Verification, // $config->Verification,
            "PATH" => realpath(__DIR__),
        ];

        if (!$SSL) {
            throw new Exception('Option SSL not defined.');
        }

        if (!$Date["PRODUCTID"]) {
            throw new Exception('ID of product not defined.');
        }

        if (!$Date["URL"]) {
            throw new Exception('URL of API not defined.');
        }

        if (!$Date["KEY"]) {
            throw new Exception('API KEY of connection not defined.');
        }

        if (!$Date["LANGUAGE"]) {
            throw new Exception('Language not defined.');
        }
        
        if (!$Date["VERSION"]) {
            throw new Exception('Version of product not defined.');
        }
        
        if (!$Date["ENVATO"]) {
            throw new Exception('Option envato not defined.');
        }
        
        if (!$Date["VARIFICATION"]) {
            throw new Exception('Option of verification not defined.');
        }

        parent::__construct($Date, $SSL);
    }

    /**
     * @return $this
     */
    public function checkFile(): KLicense
    {
        $this->check_local_license_exist();
        return $this;
    }

    /**
     * @return $this
     */
    public function getVersion(): KLicense
    {
        $this->get_current_version();
        return $this;
    }

    /**
     * @return $this
     */
    public function checkConnection(): KLicense
    {
        $this->check_connection();
        return $this;
    }

    /**
     * @return $this
     */
    public function getLastVersion(): KLicense
    {
        $this->get_latest_version();
        return $this;
    }

    /**
     * @param string $License Code of license
     * @param string $User Login
     * @param bool $CreateFile Create file .key
     * 
     * @return $this
     */
    public function active(string $License, string $User, bool $CreateFile = TRUE): KLicense
    {
        $this->activate_license($License, $User, $CreateFile);
        return $this;
    }
    
    /**
     * @param string $License Code of license
     * @param string $User Login
     * 
     * @return $this
     */
    public function desactive(string $License, string $User): KLicense
    {
        $this->deactivate_license($License, $User);
        return $this;
    }
    
    /**
     * @param bool $checkTime Check time
     * @param bool|string $License Code of license
     * @param bool|string $User Login
     * 
     * @return $this
     */
    public function veryfy($checkTime = FALSE, $License = FALSE, $User = FALSE): KLicense
    {
        $this->verify_license($checkTime, $License, $User);
        return $this;
    }

    /**
     * @return $this
     */
    public function checkUpdate(): KLicense
    {
        $this->check_update();
        return $this;
    }

    /**
     * @param string $updateID ID of db
     * @param bool $Type Type od update
     * @param string $User Version od update
     * @param bool|string $License Code of license
     * @param bool|string $User Login
     * @param bool|array $dbImport Import DB
     * 
     * @return $this $update_id, $type, $version, $license = false, $client = false, $db_for_import = false
     */ 
    public function downloadUpdate($updateID, $Type, $Version, $License = FALSE, $User = FALSE, $dbImport = FALSE): KLicense
    {
        $this->download_update($updateID, $Type, $Version, $License, $User, $dbImport);
        return $this;
    }

}
