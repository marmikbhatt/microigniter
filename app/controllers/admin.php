<?php
class admin extends core_controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		echo "Admin Index";
	}
	public function dashboard($parameters = null,$page = 'mainpage'){
		//echo "Dashboard<br/>Parameters: $parameters";
		$data['title'] = 'MicroIgniter';
		$this->view('mainpage.php',$data);
	}
} 