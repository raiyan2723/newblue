<?php

class Index_controller extends CI_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('Cms_model');
        $this->load->model('User_model');
    }

    public function index() {
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['home_data'] = $this->Cms_model->get_home_table();
        $data['slider_data'] = $this->Cms_model->get_slider_table();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
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

    public function leisures() {
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        //$data['home_data'] = $this->Cms_model->get_packages_table();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('leisures-index');
        $this->load->view('include/footer_view');
    }

    public function i_package($country_name = null) {
        $this->session->all_userdata();
        $data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['booking'] = $this->Cms_model->get_booking_packages();
        //echo "<pre>"; print_r($data['booking']);die;
        $data['home_data'] = $this->Cms_model->get_packages_table($country_name);
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('individual_package');
        $this->load->view('include/footer_view');
    }

    public function contact() {
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $data['contact_details'] = $this->Cms_model->get_contact_data();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('contact');
        $this->load->view('include/footer_view');
    }

    public function about() {
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $data['about'] = $this->Cms_model->get_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('about');
        $this->load->view('include/footer_view');
    }

    public function save_contact() {
        $this->Cms_model->insert_contact();
        redirect('Index_controller/index');
    }

    public function is_login_in($l_id) {
        $is_logged_in = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $this->session->set_userdata('l_id', $l_id);

        //echo "<pre>";print_r($booking);die;
        if (isset($is_logged_in) && $is_logged_in != '') {
            redirect('Index_controller/booking/' . $booking . '');
        } else {
            redirect('Index_controller/user_details/' . $booking . '');
        }
    }

    /*  public function booking($l_id = null)
      {
      $this->session->all_userdata();
      $data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
      //echo "<pre>";print_r($data);die;
      $data['menu']          = $this->Cms_model->get_menu_packages();
      $data['booking']          = $this->Cms_model->get_booking_packages($l_id);
      $data['discover_data'] = $this->Cms_model->get_Discover();
      $data['news_data']     = $this->Cms_model->get_news();
      $data['footer_about']  = $this->Cms_model->get_Footer_About();
      $this->load->view('include/head_view', $data);
      $this->load->view('include/top_bar_view');
      $this->load->view('booking');
      $this->load->view('include/footer_view');

      }
     */

    public function booking($l_id = null) {
        if ($this->session->userdata('u_id')) {
            $this->session->all_userdata();
            $data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
            //echo "<pre>";print_r($data);die;
            $l_id = $this->session->userdata('l_id');
            $data['menu'] = $this->Cms_model->get_menu_packages();
            $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
            $data['discover_data'] = $this->Cms_model->get_Discover();
            $data['news_data'] = $this->Cms_model->get_news();
            $data['footer_about'] = $this->Cms_model->get_Footer_About();
        } else {
            $data['guest'] = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
            $l_id = $this->session->userdata('l_id');
            $data['menu'] = $this->Cms_model->get_menu_packages();
            $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
            $data['discover_data'] = $this->Cms_model->get_Discover();
            $data['news_data'] = $this->Cms_model->get_news();
            $data['footer_about'] = $this->Cms_model->get_Footer_About();
        }
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('booking');
        $this->load->view('include/footer_view');
    }

    public function booking_user() {
        if ($this->input->post()) {
            if ($this->session->userdata('u_id')) {
                for ($i = 0; $i < count($this->input->post('firstname1')); $i++) {
                    $array = array(
                        'first_name' => $this->input->post('firstname1')[$i],
                        'last_name' => $this->input->post('lastname1')[$i],
                        'age' => $this->input->post('age')[$i],
                        'catagory' => $this->input->post('catagory')[$i],
                        'created' => date('Y-m-d H:i:s'),
                        'prefix' => $this->input->post('prefix')[$i],
                        'user_type' => 'user',
                        'user_id' => $this->session->userdata('u_id'),
                        'dob' => $this->input->post('dob')[$i],
                    );
                    $this->Cms_model->add_guest($array);
                }
            } else {

                $check = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
                for ($i = 0; $i < count($this->input->post('firstname1')); $i++) {
                    $array = array(
                        'first_name' => $this->input->post('firstname1')[$i],
                        'last_name' => $this->input->post('lastname1')[$i],
                        'age' => $this->input->post('age')[$i],
                        'catagory' => $this->input->post('catagory')[$i],
                        'created' => date('Y-m-d H:i:s'),
                        'prefix' => $this->input->post('prefix')[$i],
                        'user_type' => 'guest',
                        'user_id' => $this->session->userdata('guest_id'),
                        'dob' => $this->input->post('dob')[$i],
                    );
                    $this->Cms_model->add_guest($array);
                }
            }
            //$this->Cms_model->insert_booking_user();
            //redirect('Index_controller/success');
            $this->success();
        } else {
            echo "error";
        }
    }

    public function success() {

        if (isset($_POST['submit'])) {
            $a['v'] = $this->db->insert_id();
            //echo "<pre>"; print_r($a['v']);die;
            $data['menu'] = $this->Cms_model->get_menu_packages();
            //echo "<pre>"; print_r($data['menu']);die;
            $data['discover_data'] = $this->Cms_model->get_Discover();
            //echo "<pre>"; print_r($data['discover_data']);die;
            $data['news_data'] = $this->Cms_model->get_news();
            //echo "<pre>"; print_r($data['news_data']);die;
            $data['footer_about'] = $this->Cms_model->get_Footer_About();
            $data['about'] = $this->Cms_model->get_About();
            $l_id = $this->session->userdata('l_id');
            $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
            if ($this->session->userdata('u_id')) {
                $data['user_data'] = $this->User_model->user_data($this->session->userdata('u_id'));
                $user_type="user";
                $data['user']=$this->Cms_model->guest_booking_user_detail($this->session->userdata('u_id'),$user_type);
            }
            else
            {
                $user_type="guest";
                $data['guest']=$this->Cms_model->guest_booking_user_detail($this->session->userdata('guest_id'),$user_type);
                $data['user_data2'] = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
            }
            $this->load->view('include/head_view', $data);
            $this->load->view('include/top_bar_view');
            $this->load->view('success_booking');
            $this->load->view('include/footer_view');
        } else {

            $this->leisures();
        }
    }

    public function user_details($l_id = null) {
        $l_id = $this->session->userdata('l_id');
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
        //echo "<pre>";print_r($data['booking']);die;
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('user_details');
        $this->load->view('include/footer_view');
    }

    public function subscribe() {
        $this->Cms_model->insert_subscribe();
        redirect('Index_controller/index');
    }

    public function gst_details() {
        if (isset($_POST['submit'])) {
            $this->Cms_model->insert_gst_details();
            redirect('Index_controller/booking');
        } else {
            echo "guest error";
        }
    }

}
?>




















