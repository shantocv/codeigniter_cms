<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function  __construct() {
		parent::__construct();
		//$this->load->model('_model');
	}

	public function index(){
		echo $this->config->item('site_name');;
	}

}