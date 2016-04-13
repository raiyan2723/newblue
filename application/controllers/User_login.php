<?php
class User_login extends CI_Controller {
	
	 function __Construct()
    {
        parent::__Construct();
        $this->load->model('Cms_model');
		 $this->load->model('User_model');
		 if ($this->session->userdata('user_type')!="user") 
		  {
			redirect("Index_controller/index", 'refresh');
		  }
    }
	public function User_account()

	{
		$this->session->all_userdata();
		$data['menu'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
		//echo "<pre>";print_r($data);die;
		//$data['username']=$this->session->userdata('fisrt_name');
		$this->load->view('include/head_view',$data);
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('dashboard/footer_view');
		$this->load->view('dashboard/s_dashboard_view');
	}
	
	public function get_sess()

	{
		$data['menu'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
		echo "<pre>";print_r($data);die;
	}
		
	public function update_profile($id=null)

    {
		$link = $this->upload_user_image();
		$data['employee']=$this->User_model->Get_update_profile($id,$link);
		//echo "<pte>";print_r($data);die;
		
		 redirect("User_login/User_account", 'refresh');
     
    }
	 function upload_user_image()
    {
        $img_url = $this->input->post("user_image");
        if ($_FILES['user_image']['name'] != " " && $_FILES['user_image']['name'] != null && $_FILES['user_image']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr        = $_FILES['user_image']['name'];
            $path_parts = pathinfo($arr);
            $ext        = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['user_image']['name'] = rand() . '.' . $ext;
            $config['upload_path']           = 'uploads/User_image';
            $config['allowed_types']         = '*';
            $config['max_size']              = '00';
            $config['max_width']             = '00';
            $config['max_height']            = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("user_image")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link = $config['upload_path'] . '/' . $_FILES['user_image']['name'];
            }
        } else {
            return $link = $img_url;
        }
    }
	
}





