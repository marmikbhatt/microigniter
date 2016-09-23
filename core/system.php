<?php
/**** System File ****/
defined('app_path') OR define('app_path','app/');
defined('app_config') OR define('app_config','app/config/');
//Required files
require_once 'exception.php';
require_once 'routes.php';
//Include the Config File
if(file_exists(app_config.'config.php')){require_once app_config.'config.php';}else{show_error(500);}
//Include Database file
if(file_exists(app_config.'database.php')){require_once app_config.'database.php';}else{show_error(500);}
//Core Controllers
if(file_exists(syscore.'controller.php')){require_once syscore.'controller.php';}else{show_error(500);}
//Adding predefined Routes
if(file_exists(app_config.'routes.php')){
	require_once app_config.'routes.php';
	Routes::add($routes);
	$actual_route =& Routes::route($origin);
	$current_route =& explode('/',$actual_route);
	if(count($current_route)>0){
		$class =& $current_route[0];
		if(count($current_route)>1 && !empty($current_route[1])){
			$method = $current_route[1];
		}else{
			$method = 'index';
		}
	}else{
		$class =& $origin;
		$method = 'index';
	}
	//Executing the route
	if(file_exists(app_path.'controllers/'.$class.'.php')){
		require_once app_path.'controllers/'.$class.'.php';
		$instance =& new $class;
		$parameters = null;
		
		if($method!=='index'){
			if(method_exists($instance,$method)){
				//$instance->$method();
				if(count($current_route)>1){
					$parameters =& $current_route;
					unset($parameters[0]);
					unset($parameters[1]);
					$params = implode(',',$parameters);
					//echo $params;
					$instance->$method($params);
				}
			}else{
				show_error(404);
			}
		}else{
			$instance->index();
		}
	}else{
		show_error(404);
	}
}else{show_error(500);}
//Include Libraries and Helpers