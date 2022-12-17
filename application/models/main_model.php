<?php

class Main_model extends CI_Model
{

	
	function fetch_data()
	{
		$this->db->select()->from('tbl_user');
		$query = $this->db->get();
		return $query;
	}

	function is_email_available($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get("register");
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}

?>







