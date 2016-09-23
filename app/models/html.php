<?php
class html{
	
	public function link_css($path = null){
		$output = "<link rel='stylesheet' href='$path' type='text/css' />";
		return $output;
	}
}