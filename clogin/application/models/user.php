<?php
class User extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function user_verify($username,$password)
	{ 
		$this->db->select();
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		 $query = $this->db->get();

		 if($query->num_rows()==1)
		 {
		 	return $query->result_array();
		 }
		 else
		 {
		 	return false;
		 }

	}
}

?>