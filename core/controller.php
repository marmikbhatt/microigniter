<?php
/**** Core Controller ****/
class core_controller{
	public function __construct(){
		
	}
	
	public function load($library_name){
		if(file_exists(app_path.'models/'.$library_name.'.php')){
			require_once app_path.'models/'.$library_name.'.php';
			$this->$library_name = new $library_name;
		}else{
			show_error(500);
		}
	}
	public function view($page = null,$data = null){
		if($data!==null){extract($data);}
		if(file_exists(app_path.'views/'.$page)){
			require_once app_path.'views/'.$page;
		}
	}
}
