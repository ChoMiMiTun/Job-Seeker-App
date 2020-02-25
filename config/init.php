<?php

//Start Session
session_start();

//Config file
require_once 'config.php';

//Include Helper
require_once 'helpers/system_helper.php';

//Autoload function
function __autoload($calss_name)
{
    require_once 'lib/' . $calss_name. '.php';
}
