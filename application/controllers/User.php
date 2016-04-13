<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       $this->load->model('Cms_model');

    }
    public function contact_user()
	{
		$data['menu'] = $this->Cms_model->get_contact_details();
		$this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/contact_us_view',$data);
        $this->load->view('cms/include/footer_view');
	}
    	public function Contact_Details($id=null)
    {
		
		$data['menu'] = $this->Cms_model->get_view_contact($id);
		$this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/contact_details_view',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Delete_Contact($id=null)
    {
		$query =$this->Cms_model->Delete_contact_data($id);
		redirect('User/contact_user');
		 
    }
}
	