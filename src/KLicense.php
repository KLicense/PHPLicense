<?php

namespace KSeven\License;


use KSeven\License\Config\License;
use KSeven\License\System\BaseLib;

class KLicense extends BaseLib
{

    public function __construct()
    {

        $config = new License();

        $SSL = $config->SSL;

        $Date = [
            "PRODUCTID" => $config->ProductID,
            "URL"   => $config->URL,
            "KEY"   => $config->KEY,
            "LANGUAGE"  => $config->Lang,
            "VERSION"   => $config->Version,
            "ENVATO" => $config->Envato,
            "VARIFICATION" => $config->Verification
        ];

        parent::__construct($Date, $SSL);
    }

    public function checkFile()
    {
        return $this->check_local_license_exist();
    }

    public function getVersion()
    {
        return $this->get_current_version();
    }

    public function checkConnection()
    {
        return $this->check_connection();
    }

    public function getLastVersion()
    {
        return $this->get_latest_version();
    }

    public function active(string $License, string $User, bool $CreateFile = TRUE)
    {
        return $this->activate_license($License, $User, $CreateFile);
    }
    
    public function desactive(string $License, string $User)
    {
        return $this->deactivate_license($License, $User);
    }
    
    public function verify($License = FALSE, $User = FALSE, $checkTime = FALSE)
    {
        return $this->verify_license($checkTime, $License, $User);
    }

    public function checkUpdate()
    {
        return $this->check_update();
    }

    public function downloadUpdate($updateID, $Type, $Version, $License = FALSE, $User = FALSE, $dbImport = FALSE)
    {
        return $this->download_update($updateID, $Type, $Version, $License, $User, $dbImport);
    }

}
