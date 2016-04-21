<?php

class Wallet extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cms_model');
        $this->load->model('User_model');
        $this->load->model('Wallet_model');
        $this->load->library('form_validation');
        // $this->load->model('users_model', 'um');
    }

    public function error_wallet() {
        
    }

    public function add_money_form() {
        $data['menu'] = $this->User_model->get_ssesion_data($this->session->userdata("u_id"));
        $id = $this->session->userdata("u_id");
        $data['booking'] = $this->Cms_model->User_booking($id);
        //echo "<pre>";print_r($data['booking'] );die;
        $this->load->view('include/head_view', $data);
        $this->load->view('dashboard/dashboard_view');
        $this->load->view('dashboard/footer_view');
        $this->load->view('dashboard/s_dashboard_view');
    }

}
