<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_model');
        $this->load->library('jiva');
    }
    function index()
    {
        $this->user_type();
    }
    function user_type()
    {
        if ($this->session->userdata('email')) 
		{
            $user_type = $this->session->userdata('user_type');
			
			switch ($user_type) {
            case "admin":
                redirect("Cms/index", 'refresh');
                break;die;
            case "user":
                redirect("User_login/User_account", 'refresh');
                break;die;
			case "Agent":
                redirect("Agent/index", 'refresh');
                break;die;
            
            case "channel":
                redirect("channel/index", 'refresh');
            default:
                redirect("Index_controller/index", 'refresh');
                break;
            }
        } else {
			 redirect("Index_controller/index", 'refresh');
        }
    }
    function check_user()
    {

        $data['user_name'] = $this->input->post('email');
        $data['password']  = $this->input->post('pass');
				//echo "<pre>"; print_r($this->input->post()); die;
       // $data['user_type'] = $this->input->post('user_type');
        $res               = $this->Login_model->checklogin($data);
        if ($res) {
            $this->user_type();
        } else {
            
            redirect("Index_controller/index", 'refresh');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Index_controller/index', 'refresh');
    }
    function signup()
    {
        //$this->load->view('include/top_bar_view');
    }
    function save_signup()
    {
        $count  = $this->Login_model->count_email($_POST['email']);
 
        if ($count['count'] > 0) {
          echo  $data['msg'] = "This Email_Id already registered, please signup with differant Email.";
          redirect("Index_controller/index", 'refresh');
            die;
        }
        $user_type = "user";
        $otp       = rand(100000, 999999);
        $data      = array(
            'first_name' => $this->input->post('f_name'),
            'last_name' => $this->input->post('l_name'),
            'email' => $this->input->post('email'),
			'u_pass' => $this->input->post('pass')
           
        );
        $this->session->set_userdata("data", $data);
        //$msg2   = "OTP:" . $otp;
        //$output = file_get_contents('http://www.smslane.com/vendorsms/pushsms.aspx?user=jivaji&password=636669&msisdn=91' . $data['contact'] . '&sid=WEBSMS&msg=' . $msg2 . '&fl=0');
        $arr    = array(
            'from' => 'develpers@softbunch.com',
            'to' => $data['email'],
            'subject' => 'OTP from Bluesky',
            'message' => $msg2
        );
       // $this->load->view('include/head_view', $data);
        $d            = $this->Login_model->save_signup();
        $data['data'] = $d;
        $data['msg']  = "You Are Successfully Registered To Bluesky";
        redirect('Login/User_account', 'refresh');
    }
    function mobile_verification()
    {
        $data       = $this->session->userdata("data");
        $password   = $this->input->post('password');
        $password_r = $this->input->post('password_r');
        $otp        = $this->input->post('otp');
        if ($password = $password_r) {
            if ($otp = $data['otp']) {
                $d    = array(
                    'password' => md5($password)
                );
                $data = array_merge($data, $d);
                $arr  = array(
                    'table' => 'login',
                    'row_id' => '',
                    'row_name' => ''
                );
                $this->jiva->save($arr, $data);
                $data1['msg'] = "Registration successful, please login";
                $this->load->view('user/login_view', $data1);
                exit();
            } else {
                $data['msg'] = "OTP not matched";
                $this->load->view('user/otp_view', $data);
                exit();
            }
        } else {
            $data['msg'] = "Password not matched";
            $this->load->view('user/otp_view', $data);
            exit();
        }
        $d           = $this->login_model->save_signup();
        $data['msg'] = "You Are Successfully Registered To apple Diagnostics";
        $this->load->view('user/otp_view', $data);
    }
    function forgot_password()
    {
        if (empty($_POST)) {
            $this->load->view('user/forgot_view');
        }
        if (!empty($_POST)) {
            $this->jiva->forgot_password($_POST);
            $data['msg'] = "Username and password Sent successful";
            $this->load->view('user/login_view', $data);
        }
    }
	public function User_account()
	{
		$this->load->view('include/head_view');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('dashboard/s_dashboard_view');
	}
}
?>





