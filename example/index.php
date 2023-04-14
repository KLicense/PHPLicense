<?php
    ini_set ( 'display_errors' , 1);
    error_reporting (E_ALL); 

    require_once 'vendor/autoload.php';

    use KSeven\License\KLicense;

    $Lic = new KLicense();

    $Result = $Lic->checkConnection();

    echo "<pre>";
    var_dump($Result);
    echo "</pre>";
