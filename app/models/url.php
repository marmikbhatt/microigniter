<?php
class url{
	public function project_url(){
		$path = 'http://'.$_SERVER['SERVER_NAME'].str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
		return $path;
	}	 
}