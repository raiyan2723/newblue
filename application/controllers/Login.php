<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_model');
        $this->load->library('jiva');
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Cms_model');
    }

    function index() {
        $this->user_type();
    }

    function user_type() {
        if ($this->session->userdata('email')) {
            $user_type = $this->session->userdata('user_type');
            switch ($user_type) {
                case "admin":
                    redirect("Cms/index", 'refresh');
                    break;
                    die;
                case "user":
                    redirect("User_login/User_account", 'refresh');
                    break;
                    die;
                case "Agent":
                    redirect("Agent/index", 'refresh');
                    break;
                    die;
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

    function check_user() {
        $data['user_name'] = $this->input->post('email');
        $data['password'] = $this->input->post('pass');
        //echo "<pre>"; print_r($this->input->post()); die;
        // $data['user_type'] = $this->input->post('user_type');
        $res = $this->Login_model->checklogin($data);
        if ($res) {
            $this->user_type();
        } else {
            //  print_r($count);die;
            $this->session->set_flashdata('msg2', array('message' => 'Incorrect Email or Password.', 'class' => 'success'));
            redirect("Index_controller/index", 'refresh');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Index_controller/index', 'refresh');
    }

    function signup() {
        //$this->load->view('include/top_bar_view');
    }

    function save_signup() {
        $count = $this->Login_model->count_email($_POST['email']);
        if ($count['count'] > 0) {
            $data['msg'] = "This Email Id already registered, please signup with differant Email.";
            //  print_r($count);die;
            $this->session->set_flashdata('msg', array('message' => 'This Email_Id already registered, please signup with differant Email.', 'class' => 'success'));
            redirect("Index_controller/index", 'refresh');

//            $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
//            $data['menu'] = $this->Cms_model->get_menu_packages();
//            $data['home_data'] = $this->Cms_model->get_home_table();
//            $data['slider_data'] = $this->Cms_model->get_slider_table();
//            $data['discover_data'] = $this->Cms_model->get_Discover();
//            $data['news_data'] = $this->Cms_model->get_news();
//            $data['footer_about'] = $this->Cms_model->get_Footer_About();
//            //echo "<pre>";
//            //print_r($data['footer_about'][0]['content']);die;
//            $this->load->view('include/head_view', $data);
//            $this->load->view('include/top_bar_view', $data);
//            $this->load->view('index');
//            $this->load->view('include/Leisure_packages_view');
//            $this->load->view('include/Honeymoon_packages_view');
//            $this->load->view('include/did_u_know_view');
//            $this->load->view('include/footer_view');
        } else {
            $user_type = "user";
            $otp = rand(100000, 999999);
            $data = array(
                'first_name' => $this->input->post('f_name'),
                'last_name' => $this->input->post('l_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'u_pass' => $this->input->post('pass')
            );
            $this->session->set_userdata("data", $data);
            //$msg2   = "OTP:" . $otp;
            //$output = file_get_contents('http://www.smslane.com/vendorsms/pushsms.aspx?user=jivaji&password=636669&msisdn=91' . $data['contact'] . '&sid=WEBSMS&msg=' . $msg2 . '&fl=0');
            $arr = array(
                'from' => 'develpers@softbunch.com',
                'to' => $data['email'],
                'subject' => 'OTP from Bluesky'
                    // 'message' => $msg2
            );
            // $this->load->view('include/head_view', $data);
            $d = $this->Login_model->save_signup();
            $data['data'] = $d;
            $data['msg'] = "You Are Successfully Registered To Bluesky";
            redirect('User_login/User_account', 'refresh');
        }
    }

    function mobile_verification() {
        $data = $this->session->userdata("data");
        $password = $this->input->post('password');
        $password_r = $this->input->post('password_r');
        $otp = $this->input->post('otp');
        if ($password = $password_r) {
            if ($otp = $data['otp']) {
                $d = array(
                    'password' => md5($password)
                );
                $data = array_merge($data, $d);
                $arr = array(
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
        $d = $this->login_model->save_signup();
        $data['msg'] = "You Are Successfully Registered To apple Diagnostics";
        $this->load->view('user/otp_view', $data);
    }

    function forgot_password() {
        if (empty($_POST)) {
            $this->load->view('user/forgot_view');
        }
        if (!empty($_POST)) {
            $this->jiva->forgot_password($_POST);
            $data['msg'] = "Username and password Sent successful";
            $this->load->view('user/login_view', $data);
        }
    }

    public function change_p() {

        $oldpass = $this->input->post('oldpass');
        $newpass = $this->input->post('newpass');
        $c_pass = $this->input->post('c_pass');

        $check = $this->Login_model->get_login($this->session->userdata('u_id'));

        if ($check['u_pass'] == $oldpass) {
            $this->Login_model->change_upass($newpass);
            echo "<script>
						alert('Are You sure You want to change Your Password');
					</script>";
            redirect('User_login/User_account/#profile', 'refresh');
        } else {
            echo "<script>
				alert('Password Dose Not Match Please Enter Your Old Password');
				</script>";
        }

        redirect('User_login/User_account/#settings', 'refresh');
    }

    public function change_email() {

        $oldemail = $this->input->post('oldemail');
        $email = $this->input->post('uemail');


        $check = $this->Login_model->get_login($this->session->userdata('u_id'));

        if ($check['email'] == $oldemail) {
            echo "<script>
						alert('Are You sure You want to change Your Password');
					</script>";
            $this->Login_model->change_uemail($email);
            redirect('User_login/User_account/#profile', 'refresh');
        } else {
            echo "<script>
				alert('Email Dose Not Match Please Enter Your Old Email');
				</script>";
        }

        redirect('User_login/User_account/#settings', 'refresh');
    }

}
?>




