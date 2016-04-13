<?php
class User_model extends CI_Model
{
	
 function get_ssesion_data($id=null)
 {
	   $this->db->select('u_id,first_name,last_name,u_pass,email,user_type,country,phone,DOB,Address,yourself,image');
        $query = $this->db->get_where('login', array('u_id' => $id));
        return $query->row_array();
 }
	function Get_update_profile($id,$link)
    {
        $data = array(
			'first_name' => $this->input->post('f_name'),
			'last_name' => $this->input->post('l_name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('p_no'),
			'DOB' => $this->input->post('dob'),
			'Address' => $this->input->post('Address'),
			'yourself' => $this->input->post('description'),
			'image' => $link
        );
	
        $this->db->where('u_id', $id);
		//echo $this->db->last_query();    die;
        $this->db->update('login', $data);
		
    }
	public function user_data($id)
    {
       $sql="Select * from login where u_id=$id"; 
       $query=  $this->db->query($sql);
      return $query->row_array();
       
    }

}


