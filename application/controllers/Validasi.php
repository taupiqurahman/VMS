<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->view('v_validasi');
	}
}