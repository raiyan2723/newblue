<?php

class Cms extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Cms_model');
        //	echo "<pre>"; print_r($this->session->all_userdata()); die;

        if ($this->session->userdata('user_type') != "admin") {
            redirect("Index_controller/index", 'refresh');
        }
    }

    public function index() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/index/index_view');
        $this->load->view('cms/include/footer_view');
    }

    public function Packages() {
        $data['menu'] = $this->Cms_model->get_Location();
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_view_leisure', $data);
        //echo "<pre>";print_r($data);die;
        $this->load->view('cms/include/footer_view');
        $this->load->view('cms/form/s_form_view', $data);
    }

    public function Home_Packages() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_view_home');
        $this->load->view('cms/include/footer_view');
    }

    /* public function Packages1()
      {
      $this->load->view('cms/include/head_view');
      $this->load->view('cms/include/top_view');
      $this->load->view('cms/include/slide-bar_view');
      $this->load->view('cms/form/form2_view');
      $this->load->view('cms/include/footer_view');
      } */

    public function Slider_Image() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_view_slider');
        $this->load->view('cms/include/footer_view');
    }

    function insert_leisure_packages() {
        $link = $this->upload_large_image();
        $this->Cms_model->insert_leisure_data($link);
        redirect('Cms/View_Package_table');
    }

    function upload_large_image() {
        $img_url = $this->input->post("fileinput");
        if ($_FILES['fileinput']['name'] != " " && $_FILES['fileinput']['name'] != null && $_FILES['fileinput']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr = $_FILES['fileinput']['name'];
            $path_parts = pathinfo($arr);
            $ext = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['fileinput']['name'] = rand() . '.' . $ext;
            $config['upload_path'] = 'uploads/leisure_packages';
            $config['allowed_types'] = '*';
            $config['max_size'] = '00';
            $config['max_width'] = '00';
            $config['max_height'] = '00';
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

    function insert_home_packages() {
        $link_home_packages = $this->upload_thumb_image();
        $this->Cms_model->insert_home_data($link_home_packages);
        redirect('Cms/View_Home_table');
    }

    function upload_thumb_image() {
        $img_url = $this->input->post("fileinput");
        if ($_FILES['fileinput']['name'] != " " && $_FILES['fileinput']['name'] != null && $_FILES['fileinput']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr = $_FILES['fileinput']['name'];
            $path_parts = pathinfo($arr);
            $ext = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['fileinput']['name'] = rand() . '.' . $ext;
            $config['upload_path'] = 'uploads/Home_upload';
            $config['allowed_types'] = '*';
            $config['max_size'] = '00';
            $config['max_width'] = '00';
            $config['max_height'] = '00';
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

    function insert_slider_image() {
        $link_slider_image = $this->upload_slider_image();
        $this->Cms_model->insert_slider_data($link_slider_image);
        redirect('Cms/View_slider_table');
    }

    function upload_slider_image() {
        $img_url = $this->input->post("slider_image");
        if ($_FILES['slider_image']['name'] != " " && $_FILES['slider_image']['name'] != null && $_FILES['slider_image']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr = $_FILES['slider_image']['name'];
            $path_parts = pathinfo($arr);
            $ext = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['slider_image']['name'] = rand() . '.' . $ext;
            $config['upload_path'] = 'uploads/slider';
            $config['allowed_types'] = '*';
            $config['max_size'] = '00';
            $config['max_width'] = '00';
            $config['max_height'] = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("slider_image")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link_slider_image = $config['upload_path'] . '/' . $_FILES['slider_image']['name'];
            }
        } else {
            return $link_slider_image = $img_url;
        }
    }

    public function View_slider_table() {
        $data['menu'] = $this->Cms_model->get_slider_table();

        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/slider_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function View_Home_table() {
        $data['menu'] = $this->Cms_model->get_home_table();

        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/home_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function View_Package_table() {
        $data['menu'] = $this->Cms_model->get_menu_packages();

        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/datatable_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function leisure_data_view($id = null) { // function body
        $data['menu'] = $this->Cms_model->get_view_packages($id);
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/leisure_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Home_data($id = null) { // function body
        $data['menu'] = $this->Cms_model->get_view_home($id);
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/Home_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Slider_data($id = null) { // function body
        $data['menu'] = $this->Cms_model->get_view_slider($id);
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/Slider_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Location_Name() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_view_location');
        $this->load->view('cms/include/footer_view');
    }

    function insert_location() {

        $this->Cms_model->insert_location_data();
        redirect('Cms/View_Location_table');
    }

    public function View_Location_table() {
        $data['menu'] = $this->Cms_model->get_Location();

        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/location_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Discover() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_Discover_view');
        $this->load->view('cms/include/footer_view');
    }

    function insert_Discover() {

        $this->Cms_model->insert_Discover_data();
        redirect('Cms/View_Discover_table');
    }

    public function View_Discover_table() {
        $data['menu'] = $this->Cms_model->get_Discover();

        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/Discover_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Travel_News() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_travel_view');
        $this->load->view('cms/include/footer_view');
    }

    function Insert_News() {
        $link = $this->news_image();
        $this->Cms_model->insert_news($link);
        redirect('Cms/View_Travel_News_table');
    }

    function news_image() {
        $img_url = $this->input->post("Image");
        if ($_FILES['Image']['name'] != " " && $_FILES['Image']['name'] != null && $_FILES['Image']['name'] != "") {
            if ($img_url != " " && $img_url != "" && $img_url != null) {
                if (file_exists($img_url)) {
                    unlink($img_url);
                }
            }
            $arr = $_FILES['Image']['name'];
            $path_parts = pathinfo($arr);
            $ext = $path_parts['extension'];
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                echo "filetype not allowed";
            }
            $_FILES['Image']['name'] = rand() . '.' . $ext;
            $config['upload_path'] = 'uploads/News';
            $config['allowed_types'] = '*';
            $config['max_size'] = '00';
            $config['max_width'] = '00';
            $config['max_height'] = '00';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload("Image")) {
                echo ($this->upload->display_errors());
                return;
            } else {
                return $link = $config['upload_path'] . '/' . $_FILES['Image']['name'];
            }
        } else {
            return $link = $img_url;
        }
    }

    public function View_Travel_News_table() {

        $data['menu'] = $this->Cms_model->get_news();
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/news_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Footer_About() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/about_footer_view');
        $this->load->view('cms/include/footer_view');
    }

    function Insert_Footer_About() {

        $this->Cms_model->insert_footer_about();
        redirect('Cms/View_Footer_About');
    }

    public function View_Footer_About() {

        $data['menu'] = $this->Cms_model->get_Footer_About();
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/footer_about_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Add_Contact() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/form_contact_view');
        $this->load->view('cms/include/footer_view');
    }

    function Insert_Contact() {

        $this->Cms_model->insert_contact_data();
        redirect('Cms/View_contact_details');
    }

    public function View_contact_details() {

        $data['menu'] = $this->Cms_model->get_contact_data();
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/contact_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function Add_About() {
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/form/about_view');
        $this->load->view('cms/include/footer_view');
        $this->load->view('cms/form/s_form_view');
    }

    function insert_about() {

        $this->Cms_model->insert_about_data();
        redirect('Cms/View_About');
    }

    public function View_About() {

        $data['menu'] = $this->Cms_model->get_About();
        //echo "<pre>"; print_r($data);die;
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/about_data_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function All_booking() {
        $url = "Cms/All_booking";
        $table = "booking";
        $perpage = 6;
        $offset = 6;
        $limit = $this->uri->segment(3);
        //echo "<pre>"; print_r($data);die;
        $data['booking'] = $this->Cms_model->booking_data($offset, $limit);
        $data['link'] = $this->box->pagining($url, $table, $perpage);
        //var_dump($data['link']);die();
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/index/booking_view', $data);
        $this->load->view('cms/include/footer_view');
    }

    public function booking_user_view() {

        //echo "<pre>"; print_r($data);die;
        $u_id=$_GET['id'];
        $user_type=$_GET['user_type'];
        $random=$_GET['number'];
        if($user_type=='guest'){
        $data['booking'] = $this->Cms_model->booking_user_view($u_id,$user_type,$random);
        }
        else
        {
            $data['booking2'] = $this->Cms_model->booking_user_view($u_id,$user_type,$random);
        }
        $this->load->view('cms/include/head_view');
        $this->load->view('cms/include/top_view');
        $this->load->view('cms/include/slide-bar_view');
        $this->load->view('cms/table/booking_user_view', $data);
        $this->load->view('cms/include/footer_view');
    }

}
