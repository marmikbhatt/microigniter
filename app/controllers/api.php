<?php
class api extends core_controller{
	public function __construct(){
		parent::__construct();
	}
	public function index($param=null){
		$data['params'] = $param;
		$this->view('api.php',$data);
	}
	public function json($parameters = null,$page = 'mainpage'){
		$data['params'] = $parameters;
		$this->view('api.php',$data);
	}
} 
