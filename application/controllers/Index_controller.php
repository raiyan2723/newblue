<?php

class Index_controller extends CI_Controller {

    function __Construct() {
        parent::__Construct();
        $this->load->model('Cms_model');
        $this->load->model('User_model');
        $this->load->model('Wallet_model');
        $this->load->library('email');
    }

    public function index() {
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['home_data'] = $this->Cms_model->get_home_table();
        $data['slider_data'] = $this->Cms_model->get_slider_table();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        //echo "<pre>";
        //print_r($data['footer_about'][0]['content']);die;
        $this->session->flashdata('msg');
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('index');
        $this->load->view('include/Leisure_packages_view');
        $this->load->view('include/Honeymoon_packages_view');
        $this->load->view('include/did_u_know_view');
        $this->load->view('include/footer_view');
    }

    public function leisures() {
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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

    public function delete_active() {
        if ($this->session->userdata('u_id')) {
            $user_type = "user";
            $this->Cms_model->delete_active($this->session->userdata('u_id'), $user_type);
            $user_data = $this->User_model->user_data($this->session->userdata('u_id'));
            if ($user_data['old_wallet'] != 0) {
                $array1 = array(
                    'wallet' => $user_data['old_wallet'],
                    'old_wallet' => 0,
                );
                $this->Cms_model->Update_wallet($this->session->userdata('u_id'), $array1);
            }



            $array = array(
                'old_wallet' => 0,
            );
            $this->Cms_model->Update_wallet($this->session->userdata('u_id'), $array);
            redirect('Index_controller/booking');
        } else {
            $user_type = "guest";
            $this->Cms_model->delete_active($this->session->userdata('guest_id'), $user_type);
            redirect('Index_controller/booking');
        }
    }

    public function cancle_booking() {
        if ($this->session->userdata('u_id')) {
            $user_type = "user";
            $l_id = $this->session->userdata('l_id');
            $booking = $this->Cms_model->get_booking_packages($l_id);
            $check = $this->Cms_model->guest_table_detail($this->session->userdata('u_id'), $user_type);
            //var_dump($check);
            $detail = array(
                'user_id' => $this->session->userdata('u_id'),
                'date' => date('Y-m-d H:i:s'),
                'user_type' => $user_type,
                'package' => $booking['Packages_Name'],
                'person' => $check['person2'],
            );
            $this->Cms_model->cancle_package($detail);
            $this->Cms_model->delete_active($this->session->userdata('u_id'), $user_type);
            redirect('Index_controller/booking', 'refresh');
        } else {
            $user_type = "guest";
            $l_id = $this->session->userdata('l_id');
            $booking = $this->Cms_model->get_booking_packages($l_id);
            $check = $this->Cms_model->guest_table_detail($this->session->userdata('guest_id'), $user_type);
            $detail = array(
                'user_id' => $this->session->userdata('guest_id'),
                'date' => date('Y-m-d H:i:s'),
                'user_type' => $user_type,
                'package' => $booking['Packages_Name'],
                'person' => $check['person2'],
            );
            $this->Cms_model->cancle_package($detail);
            $this->Cms_model->delete_active($this->session->userdata('guest_id'), $user_type);
            redirect('Index_controller/booking');
        }
    }

    public function booking($l_id = null) {
        if ($this->session->userdata('u_id')) {
            $this->session->all_userdata();
            $data['user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
            //echo "<pre>";print_r($data);die;
            $l_id = $this->session->userdata('l_id');
            $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
            $data['menu'] = $this->Cms_model->get_menu_packages();
            $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
            $data['discover_data'] = $this->Cms_model->get_Discover();
            $data['news_data'] = $this->Cms_model->get_news();
            $data['footer_about'] = $this->Cms_model->get_Footer_About();
        } else {
            $data['guest'] = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
            $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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

        if ($this->session->userdata('u_id') || $this->session->userdata('guest_id')) {
            if ($this->input->post()) {
                if ($this->session->userdata('u_id')) {
                    $rand = rand(0000, 9999);
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
                            'night' => $this->input->post('night')[$i],
                            'package' => $this->input->post('productinfo')[$i],
                            'price' => $this->input->post('amount')[$i],
                            'random' => $rand,
                        );
                        $this->Cms_model->add_guest($array);
                    }
                } elseif ($this->session->userdata('guest_id')) {
                    $rand = rand(0000, 9999);
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
                            'night' => $this->input->post('night')[$i],
                            'package' => $this->input->post('productinfo')[$i],
                            'price' => $this->input->post('amount')[$i],
                            'random' => $rand,
                        );
                        $this->Cms_model->add_guest($array);
                    }
                }

                //$this->Cms_model->insert_booking_user();
                redirect('Index_controller/success', 'refresh');
                //$this->success();
            } else {
                echo "error";
            }
        } else {
            redirect('Index_controller/index');
        }
    }

    public function success() {


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
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        if ($this->session->userdata('u_id')) {
            $data['user_data'] = $this->User_model->user_data($this->session->userdata('u_id'));
            $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
            $user_type = "user";
            $data['user'] = $this->Cms_model->guest_booking_user_detail($this->session->userdata('u_id'), $user_type);
        } elseif ($this->session->userdata('guest_id')) {
            $user_type = "guest";
            $data['guest'] = $this->Cms_model->guest_booking_user_detail($this->session->userdata('guest_id'), $user_type);
            $data['user_data2'] = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
        }

        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('success_booking');
        $this->load->view('include/footer_view');
    }

    public function user_details($l_id = null) {
        $l_id = $this->session->userdata('l_id');
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
        //echo "<pre>";print_r($data['booking']);die;
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
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
            $check = $this->Cms_model->guest_login2($this->input->post('email'));
            $check2 = $this->Cms_model->user_login2($this->input->post('email'));
            if ($this->input->post('email') == $check2['email']) {

                $l_id = $this->session->userdata('l_id');
                $data['menu'] = $this->Cms_model->get_menu_packages();
                $data['booking'] = $this->Cms_model->get_booking_packages($l_id);
                //echo "<pre>";print_r($data['booking']);die;
                $data['discover_data'] = $this->Cms_model->get_Discover();
                $data['news_data'] = $this->Cms_model->get_news();
                $data['footer_about'] = $this->Cms_model->get_Footer_About();
                $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
                $data['error'] = "You are register User Please Login To continue";
                $this->load->view('include/head_view', $data);
                $this->load->view('include/top_bar_view');
                $this->load->view('user_details');
                $this->load->view('include/footer_view');
            } elseif ($this->input->post('email') == $check['email']) {
                $this->session->set_userdata('guest_id', $check['id_gstlog']);
                redirect('Index_controller/booking');
            } else {
                $this->Cms_model->insert_gst_details();
                redirect('Index_controller/booking');
            }
        } else {
            echo "guest error";
        }
    }

    public function booked() {
        //$transaction = $_REQUEST['transaction'];
        $data['menu'] = $this->Cms_model->get_menu_packages();
        //echo "<pre>"; print_r($data['menu']);die;
        $data['discover_data'] = $this->Cms_model->get_Discover();
        //echo "<pre>"; print_r($data['discover_data']);die;
        $data['news_data'] = $this->Cms_model->get_news();
        //echo "<pre>"; print_r($data['news_data']);die;
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $data['about'] = $this->Cms_model->get_About();
        $l_id = $this->session->userdata('l_id');
        $booking = $this->Cms_model->get_booking_packages($l_id);
        if ($this->session->userdata('u_id')) {
            $user_data = $this->User_model->user_data($this->session->userdata('u_id'));
            $user_type = "user";
            $user = $this->Cms_model->guest_booking_user_detail($this->session->userdata('u_id'), $user_type);
            $price = $booking['Package_Cast'] + $booking['Online_Charge'] + $booking['Other_Charge'];
            $add = array(
                'first_name' => $user_data['first_name'],
                'last_name' => $user_data['last_name'],
                'phone' => $user_data['phone'],
                'email' => $user_data['email'],
                'address' => $user_data['street_address'],
                'person' => $user['countt'],
                'random' => $user['random'],
                'user_type' => 'user',
                'Packages' => $booking['Packages_Name'],
                'night' => $booking['Total_nights'],
                'Price' => $price,
                'total_price' => $price * $user['countt'],
                'user_id' => $this->session->userdata('u_id'),
                'transaction_id' => $transaction,
                'date' => date('Y-m-d H:i:s'),
            );
            $this->Cms_model->booked($add);
            $change = array(
                'status' => 'Inactive',
            );
            $this->Cms_model->status_chnage_guest($this->session->userdata('u_id'), $change);
            $user_data = $this->User_model->user_data($this->session->userdata('u_id'));
            if ($user_data['old_wallet'] != 0) {
                $array1 = array(
                    'old_wallet' => 0,
                );
                $this->Cms_model->Update_wallet($this->session->userdata('u_id'), $array1);
            }
            $this->session->sess_destroy();
        } else {
            $user_type = "guest";
            $guest = $this->Cms_model->guest_booking_user_detail($this->session->userdata('guest_id'), $user_type);
            $user_data2 = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
            $price = $booking['Package_Cast'] + $booking['Online_Charge'] + $booking['Other_Charge'];
            $add = array(
                'first_name' => $user_data2['fname'],
                'last_name' => $user_data2['lname'],
                'phone' => $user_data2['phone'],
                'email' => $user_data2['email'],
                'address' => $user_data2['address'],
                'person' => $guest['countt'],
                'random' => $guest['random'],
                'user_type' => 'guest',
                'Packages' => $booking['Packages_Name'],
                'night' => $booking['Total_nights'],
                'Price' => $price,
                'total_price' => $price * $guest['countt'],
                'user_id' => $this->session->userdata('guest_id'),
                'transaction_id' => $transaction,
                'date' => date('Y-m-d H:i:s'),
            );
            //var_dump($this->session->userdata('guest_id'));
            $this->Cms_model->booked($add);
            $change = array(
                'status' => 'Inactive',
            );
            $this->Cms_model->status_chnage_guest($this->session->userdata('guest_id'), $change);
            $this->session->sess_destroy();
        }
    }

//    public function pay_u() {
//        $data['menu'] = $this->Cms_model->get_menu_packages();
//        $data['discover_data'] = $this->Cms_model->get_Discover();
//        $data['news_data'] = $this->Cms_model->get_news();
//        $data['footer_about'] = $this->Cms_model->get_Footer_About();
//        $data['about'] = $this->Cms_model->get_About();
//        $l_id = $this->session->userdata('l_id');
//        $booking = $this->Cms_model->get_booking_packages($l_id);
//        if ($this->session->userdata('u_id')) {
//            $user_data = $this->User_model->user_data($this->session->userdata('u_id'));
//            $user_type = "user";
//            $user = $this->Cms_model->guest_booking_user_detail($this->session->userdata('u_id'), $user_type);
//            $price = $booking['Package_Cast'] + $booking['Online_Charge'] + $booking['Other_Charge'];
//            header("location:http://localhost/payufornoravillas/PayUMoney_form.php");
//        } else {
//            $user_type = "guest";
//            $guest = $this->Cms_model->guest_booking_user_detail($this->session->userdata('guest_id'), $user_type);
//            $user_data2 = $this->Cms_model->guest_detail($this->session->userdata('guest_id'));
//            $price = $booking['Package_Cast'] + $booking['Online_Charge'] + $booking['Other_Charge'];
//            header("location:http://localhost/payufornoravillas/PayUMoney_form.php");
//        }
//    }
    public function pay_u() {
        if ($this->session->userdata('u_id')) {
            $l_id = $this->session->userdata('l_id');
            $booking = $this->Cms_model->get_booking_packages($l_id);
            $main = $_REQUEST['amount'];
            $user_type = "user";
            $user = $this->Cms_model->guest_booking_user_detail($this->session->userdata('u_id'), $user_type);
            $Total_cost = $booking['Package_Cast'] + $booking['Other_Charge'] + $booking['Online_Charge'];
            $amount = $Total_cost;
            $count = $user['countt'];
            $check = $count * $amount;
            // var_dump($check);
            if ($main != $check) {
                $a = $check - $main;
                $array = array(
                    'wallet' => 0,
                    'old_wallet' => $a,
                );
                $this->Cms_model->Update_wallet($this->session->userdata('u_id'), $array);
            }
        }
        $this->load->view('payufornoravillas/PayUMoney_form.php');
    }

    public function pay_u_sucess() {
        $this->load->view('payufornoravillas/success.php');
    }

    public function pay_u_failure() {
        $this->load->view('payufornoravillas/success.php');
    }

    public function change_pass() {
        $data['top_user'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $data['menu'] = $this->Cms_model->get_menu_packages();
        $data['discover_data'] = $this->Cms_model->get_Discover();
        $data['news_data'] = $this->Cms_model->get_news();
        $data['footer_about'] = $this->Cms_model->get_Footer_About();
        $data['about'] = $this->Cms_model->get_About();
        $this->load->view('include/head_view', $data);
        $this->load->view('include/top_bar_view');
        $this->load->view('change');
        $this->load->view('include/footer_view');
    }

    public function sendemail() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'maildemo33@gmail.com',
            'smtp_pass' => '64146364',
        );
        $this->load->initialize($config);
        $this->load->library('email ', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('your email@gmail.com', 'your Name');
        $this->email->to('’email@yahoo.com');
        $this->email->subject(' Your Subject here.. ');
        $this->email->message('Your Message here..');
        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
        } else {
            echo 'Your e-mail has been sent!';
        }
    }

    public function money_added() {
        $transaction = $_REQUEST['transaction'];
        $amount = $_REQUEST['amount'];
        $wallet = $this->Cms_model->user_wallet_detail($this->session->userdata('u_id'));
        $new_amount = $wallet['wallet'] + $amount;
        $data1 = array(
            'amount' => $amount,
            'transaction_id' => $transaction,
            'user_id' => $this->session->userdata('u_id'),
            'created' => date('Y-m-d H:i:s'),
        );
        $this->Wallet_model->insert_add_money_detail($data1);
        $update = array(
            'wallet' => $new_amount,
        );
        $this->Cms_model->Update_wallet($this->session->userdata('u_id'), $update);
        var_dump($new_amount);
    }

}
?>




















