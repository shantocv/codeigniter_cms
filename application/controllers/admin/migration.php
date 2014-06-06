<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration extends Admin_Controller {

	function  __construct() {
		parent::__construct();
		//$this->load->model('_model');
	}

	public function index(){
		$this->load->library('migration');
		if (!$this->migration->current())
		{
			show_error($this->migration->error_string());
		}else{
			echo 'Successfully migrated';
		}
	}

}