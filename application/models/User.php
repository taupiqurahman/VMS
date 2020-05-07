<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_all_visitor(){
	    return $this->db->query("SELECT * FROM tes ORDER BY id DESC LIMIT 1");
}

function get_visitor()
{
	return $this->db->query("  SELECT * FROM tes WHERE nomer_id='$_POST[nomer_id]'");
}
	
  

	public function insert($data)
	{
		$this->db->insert('tes', $data);
		return $this->db->insert_id();
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */