<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       $this->load->model('Cms_model');
	   	 $this->load->library('form_validation');
		  // $this->load->model('users_model', 'um');

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
		$this->Cms_model->Delete_contact_data($id);
		redirect('User/contact_user');
		 
    }
	public function Subscribe()
    {
		
		$data['menu'] = $this->Cms_model->Subscription();
		$this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/subscribe',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Delete_Subscription($id=null)
    {
		$query =$this->Cms_model->Delete_Subscription_data($id);
	redirect('User/Subscribe');
		 
    }
	public function Register_User()
    {
		$url="User/Register_User";
		$table="login";
		$perpage=6;
		$offset=10;
		$limit=$this->uri->segment(3);
		$data['menu'] = $this->Cms_model->register_data($offset,$limit);
		$data['link']=$this->box->pagining($url, $table,$perpage);
		$this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/register',$data);
        $this->load->view('cms/include/footer_view');
    }
	public function Register_details($id=null) 
    {
		$data['menu'] = $this->Cms_model->get_view_user($id);
		$this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/register_data_view',$data);
        $this->load->view('cms/include/footer_view');
    }
		public function delete_register($id=null)
    {
		$this->Cms_model->delete_register_data($id);
		redirect('User/Register_User');
		 
    }
}

                                    