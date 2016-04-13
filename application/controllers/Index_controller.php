<?php
class Index_controller extends CI_Controller
{
    function __Construct()
    {
        parent::__Construct();
        $this->load->model('Cms_model');
		$this->load->model('User_model');
    }
    public function index()
    {
        $data['menu']          = $this->Cms_model->get_menu_packages();
        $data['home_data']     = $this->Cms_model->get_home_table();
        $data['slider_data']   = $this->Cms_model->get_slider_table();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data']     = $this->Cms_model->get_news();
        $data['footer_about']  = $this->Cms_model->get_Footer_About();
        //echo "<pre>";
        //print_r($data['footer_about'][0]['content']);die;
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('index');
        $this->load->view('include/Leisure_packages_view');
        $this->load->view('include/Honeymoon_packages_view');
        $this->load->view('include/did_u_know_view');
        $this->load->view('include/footer_view');
    }
    public function leisures()
    {
        $data['menu']          = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data']     = $this->Cms_model->get_news();
        $data['footer_about']  = $this->Cms_model->get_Footer_About();
        //$data['home_data'] = $this->Cms_model->get_packages_table();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('leisures-index');
        $this->load->view('include/footer_view');
    }
    public function i_package($country_name = null)
    {
		$this->session->all_userdata();
		$data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $data['menu']          = $this->Cms_model->get_menu_packages();
		$data['booking']          = $this->Cms_model->get_booking_packages();
		$data['home_data']     = $this->Cms_model->get_packages_table($country_name);
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data']     = $this->Cms_model->get_news();
        $data['footer_about']  = $this->Cms_model->get_Footer_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('individual_package');
        $this->load->view('include/footer_view');
    }
    public function contact()
    {
        $data['menu']            = $this->Cms_model->get_menu_packages();
        $data['discover_data']   = $this->Cms_model->get_Discover();
        $data['news_data']       = $this->Cms_model->get_news();
        $data['footer_about']    = $this->Cms_model->get_Footer_About();
        $data['contact_details'] = $this->Cms_model->get_contact_data();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('contact');
        $this->load->view('include/footer_view');
    }
    public function about()
    {
        $data['menu']          = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data']     = $this->Cms_model->get_news();
        $data['footer_about']  = $this->Cms_model->get_Footer_About();
        $data['about']         = $this->Cms_model->get_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('about');
        $this->load->view('include/footer_view');
    }
   
    public function booking($country_name = null)
    {
			$this->session->all_userdata();
			$data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
			//echo "<pre>";print_r($data);die;
			$data['menu']          = $this->Cms_model->get_menu_packages();
			$data['booking']          = $this->Cms_model->get_booking_packages($country_name);
			$data['discover_data'] = $this->Cms_model->get_Discover();
			$data['news_data']     = $this->Cms_model->get_news();
			$data['footer_about']  = $this->Cms_model->get_Footer_About();
			$this->load->view('include/head_view', $data);
			$this->load->view('include/top_bar_view');
			$this->load->view('booking');
			$this->load->view('include/footer_view');
      
  }
    public function save_contact()
    {
        $this->Cms_model->insert_contact();
        redirect('Index_controller/index');
    }
	
	public function booking_user()
    {
		
	
		if (isset($_POST['submit']))
		{
			$this->Cms_model->insert_booking_user();
			//redirect('Index_controller/success');
		$this->success();
		}
		else{
			echo "error";
		}
    }
	  
	    public function success()
    {
		
			if (isset($_POST['submit']))
			{
		$a['v']=	$this->db->insert_id();
		//echo "<pre>"; print_r($a['v']);die;
			$data['menu']          = $this->Cms_model->get_menu_packages();
				//echo "<pre>"; print_r($data['menu']);die;
			$data['discover_data'] = $this->Cms_model->get_Discover();
				//echo "<pre>"; print_r($data['discover_data']);die;
			$data['news_data']     = $this->Cms_model->get_news();
			//echo "<pre>"; print_r($data['news_data']);die;
			$data['footer_about']  = $this->Cms_model->get_Footer_About();
			$data['about']         = $this->Cms_model->get_About();
                        $this->load->model('User_model');
                        $id=$this->session->userdata('u_id');
                        $data['user_data']=$this->user_model->user_data($id);
                        
			$this->load->view('include/head_view', $data);
			$this->load->view('include/top_bar_view');
			$this->load->view('success_booking');
			$this->load->view('include/footer_view');
			}
		else{
		
			$this->leisures();
			}
	}
}
?>




















 