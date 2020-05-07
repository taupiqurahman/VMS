<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cek extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User');
	}

	public function index()
	{
		$data["get_visitor"] = $this->User->get_visitor()->result();
		$this->load->view('v_cek', $data);
	}
}