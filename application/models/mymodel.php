<?php
class Mymodel extends CI_Model
{
	public function my_insert()
	{
		if($this->input->post('submit'))
		{
			$query=array(
				'donorname'=>$this->input->post('donorname'),
				'address'=>$this->input->post('address'),
				'phone'=>$this->input->post('phone'),
				'birthday'=>$this->input->post('birthday'),
				'district'=>$this->input->post('district'),
				'bloodgroup'=>$this->input->post('bloodgroup')
			);
			$this->db->insert('users',$query);
		}
	}
	
}