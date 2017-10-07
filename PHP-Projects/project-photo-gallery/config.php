<?php
require 'environment.php';

define("BASE_URL", "http://localhost/galeria-de-fotos");

global $config;
$config = array();
if(ENVIRONMENT == "development") {
    //Servidor interno
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'xxx';
    $config['dbpass'] = 'xxx';
} else {
    //Servidor externo
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'xxx';
    $config['dbpass'] = 'xxx';
}
?>