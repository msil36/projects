<?php
require 'environment.php';

define("BASE_URL", "http://localhost/mvc");

global $config;
$config = array();
if(ENVIRONMENT == "development") {
    //Servidor interno
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost:3307';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
} else {
    //Servidor externo
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost:3307';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}
?>