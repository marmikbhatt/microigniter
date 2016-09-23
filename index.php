<?php
/**** Shree Ganeshay Namaha ****/
defined('ENVIRONMENT') OR define('ENVIRONMENT','TEST');

//Setting Request URI
$request_string = !empty($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'home'; //str_replace($_SERVER['PHP_SELF'],'',$_SERVER['REQUEST_URI']);
$origin = substr($request_string,1,strlen($request_string));

//Setting Work ENVIRONMENT
define('base_path','');
define('app_path','app/');
define('app_config','app/config/');
define('syscore','core/');
//Execution
require_once syscore.'system.php';

//Route Testing
/*
echo '<hr/>Origin: ' . $origin . '<br/>';
echo 'Reroute: ' . Routes::route( $origin ) .'<br/>';
echo "Class: $class | Method: $method";*/
