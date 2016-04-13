<?php
class Action extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cms_model');

    }
	 public function Update_Package($id=null)
    {
		$query =$this->Cms_model->Get_update_Ldata($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update',$data);
        $this->load->view('cms/include/footer_view');
    }
	
	 public function Update_data($id=null)
    {
		$link = $this->upload_large_image();
		$this->Cms_model->update_Ldata($id,$link);
		redirect("Cms/View_Package_table","refresh");
    }
	
	 public function Delete_Package($id=null)
    {
		$query =$this->Cms_model->Delete_Ldata($id);
		$data['menu'] = $this->Cms_model->get_menu_packages();
		
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/datatable_view',$data);
        $this->load->view('cms/include/footer_view');
		 
    }
	
	  function upload_large_image()
    {
        $img_url = $this->input->post("fileinput");
        if ($_FILES['fileinput']['name'] != " " && $_FILES['fileinput']['name'] != null && $_FILES['fileinput']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr        = $_FILES['fileinput']['name'];
            $path_parts = pathinfo($arr);
            $ext        = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['fileinput']['name'] = rand() . '.' . $ext;
            $config['upload_path']       = 'uploads/leisure_packages';
            $config['allowed_types']     = '*';
            $config['max_size']          = '00';
            $config['max_width']         = '00';
            $config['max_height']        = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("fileinput")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link = $config['upload_path'] . '/' . $_FILES['fileinput']['name'];
            }
        } else {
            return $link = $img_url;
        }
    }
	
	
	 public function Update_Home($id=null)
    {
		$query =$this->Cms_model->Get_update_Hdata($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_home_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	 public function Update_home_data($id=null)
    {
		$link_home_packages = $this->upload_thumb_image();
		$this->Cms_model->update_Hdata($id,$link_home_packages);
		redirect("Cms/View_Home_table","refresh");
    }
	 function upload_thumb_image()
    {
        $img_url = $this->input->post("fileinput");
        if ($_FILES['fileinput']['name'] != " " && $_FILES['fileinput']['name'] != null && $_FILES['fileinput']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr        = $_FILES['fileinput']['name'];
            $path_parts = pathinfo($arr);
            $ext        = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['fileinput']['name'] = rand() . '.' . $ext;
            $config['upload_path']           = 'uploads/Home_upload';
            $config['allowed_types']         = '*';
            $config['max_size']              = '00';
            $config['max_width']             = '00';
            $config['max_height']            = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("fileinput")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link_home_packages = $config['upload_path'] . '/' . $_FILES['fileinput']['name'];
            }
        } else {
            return $link_home_packages = $img_url;
        }
    }
	public function Delete_Home($id=null)
    {
		$query =$this->Cms_model->Delete_Hdata($id);
		$data['menu'] = $this->Cms_model->get_home_table();
		
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/home_view',$data);
        $this->load->view('cms/include/footer_view');
		 
    }
	 public function Update_slider($id=null)
    {
		$query =$this->Cms_model->Get_update_Sdata($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_slider_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Update_slider_data($id=null)
    {
		$link_slider_image = $this->upload_slider_image();
		$this->Cms_model->update_Sdata($id,$link_slider_image);
		redirect("Cms/View_slider_table","refresh");
    }
 function upload_slider_image()
    {
        $img_url = $this->input->post("fileinput");
        if ($_FILES['fileinput']['name'] != " " && $_FILES['fileinput']['name'] != null && $_FILES['fileinput']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr        = $_FILES['fileinput']['name'];
            $path_parts = pathinfo($arr);
            $ext        = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['fileinput']['name'] = rand() . '.' . $ext;
            $config['upload_path']           = 'uploads/slider';
            $config['allowed_types']         = '*';
            $config['max_size']              = '00';
            $config['max_width']             = '00';
            $config['max_height']            = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("fileinput")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link_slider_image = $config['upload_path'] . '/' . $_FILES['fileinput']['name'];
            }
        } else {
            return $link_slider_image = $img_url;
        }
    }
	public function Delete_slider($id=null)
    {
		$query =$this->Cms_model->Delete_Sdata($id);
		$data['menu'] = $this->Cms_model->get_slider_table();
		
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/slider_view',$data);
        $this->load->view('cms/include/footer_view');
		 
    }
	 public function Update_Location($id=null)
    {
		$query =$this->Cms_model->Get_update_location($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_location_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	 public function Update_location_data($id=null)
    {
	
		$this->Cms_model->update_L_data($id);
		redirect("Cms/View_Location_table","refresh");
    }
	
	public function Delete_Location($id=null)
    {
		$query =$this->Cms_model->Delete_Location($id);
		$data['menu'] = $this->Cms_model->get_Location();
		
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/location_data_view',$data);
        $this->load->view('cms/include/footer_view');
		 
    }
	
	 public function Update_Discover($id=null)
    {
		$query =$this->Cms_model->Get_update_Discover($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_discover_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	 public function Update_Discover_data($id=null)
    {
	
		$this->Cms_model->update_Discover_data($id);
		redirect("Cms/View_Discover_table","refresh");
    }
	public function Delete_Discover($id=null)
    {
		$query =$this->Cms_model->delete_discover($id);
		$data['menu'] = $this->Cms_model->get_Discover();
		
       redirect("Cms/View_Discover_table","refresh");
		 
    }
	public function Update_Tnews($id=null)
    {
		$query =$this->Cms_model->update_tnews($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_Tnews_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	
	public function Update_Tnews_data($id=null)
    {
		$link = $this->news_image();
		$this->Cms_model->update_tnews_data($id,$link);
		redirect("Cms/View_Travel_News_table","refresh");
    }
	function news_image()
    {
        $img_url = $this->input->post("Image");
        if ($_FILES['Image']['name'] != " " && $_FILES['Image']['name'] != null && $_FILES['Image']['name'] != "") 
		{
            if ($img_url != " " && $img_url != "" && $img_url != null)
			{
                if (file_exists($img_url)) 
				{
                    unlink($img_url);
                }
            }
            $arr        = $_FILES['Image']['name'];
            $path_parts = pathinfo($arr);
            $ext        = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['Image']['name'] = rand() . '.' . $ext;
            $config['upload_path']       = 'uploads/News';
            $config['allowed_types']     = '*';
            $config['max_size']          = '00';
            $config['max_width']         = '00';
            $config['max_height']        = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("Image")) 
			{
                echo ($this->upload->display_errors());
                return;
            } else 
			{
                return $link = $config['upload_path'] . '/' . $_FILES['Image']['name'];
            }
        } else 
		{
            return $link = $img_url;
        }
    }
	
	public function Delete_Tnews($id=null)
    {
		$query =$this->Cms_model->delete_tnews($id);
		$data['menu'] = $this->Cms_model->get_news();
		redirect("Cms/View_Travel_News_tables","refresh");
	 }
	
	public function Update_Footer_About($id=null)
    {
		$query =$this->Cms_model->update_footer_about($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_footer_about_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Update_footer_data($id=null)
    {
		$this->Cms_model->update_footer_data($id);
		redirect("Cms/View_Footer_About","refresh");
    }
	
	public function Delete_Footer_About($id=null)
    {
		$query =$this->Cms_model->delete_footer_about($id);
		 redirect("Cms/View_Footer_About","refresh");
	 }
	 
	 public function Update_Contact($id=null)
    {
		$query =$this->Cms_model->get_contact_data($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_contact_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Update_contact_data($id=null)
    {
		$this->Cms_model->update_contact_details($id);
		redirect("Cms/View_contact_details","refresh");
    }
	
	public function Delete_Contact($id=null)
    {
		$query =$this->Cms_model->Delete_Contact_details($id);
		 redirect("Cms/View_contact_details","refresh");
	 }
	 
	  public function Update_About($id=null)
    {
		$query =$this->Cms_model->about_data($id);
		  $data['employee'] = $query;
		  //echo "<pre>"; print_r($data);
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/update_about_view',$data);
        $this->load->view('cms/include/footer_view');
		$this->load->view('cms/form/s_form_view');
    }
	public function Update_about_data($id=null)
    {
		$this->Cms_model->Update_about_details($id);
		redirect("Cms/View_About","refresh");
    }
	public function Delete_About($id=null)
    {
		$query =$this->Cms_model->Delete_About_details($id);
		 redirect("Cms/View_About","refresh");
	 }
}









