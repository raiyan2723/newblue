<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model {

    function checklogin($data) {

        $username = strtolower($data['user_name']);
        $pass = ($data['password']);
        $table_name = "login";
        $type = "user_type";



        if (!empty($username)) {
            $query = $this->db->get_where($table_name, array(
                'email' => $username,
                'u_pass' => $pass
            ));

            //echo "<pre>"; echo $this->db->last_query();exit("here");
            $email = $query->result_array();

            if (!empty($email)) {
                foreach ($query->result_array() as $row) {
                    $user_type = $row[$type];
                    $row = $query->row();
                }
            }

            if ($query->num_rows() > 0) {
                switch ($user_type) {
                    case "admin":
                        $this->session->set_userdata("admin", $row->user_type);
                        $this->session->set_userdata("user_type", $row->user_type);
                        $this->session->set_userdata("email", $row->email);
                        //$this->session->set_userdata("u_id", $row->user_id);
                        break;
                    case "user":
                        $this->session->set_userdata("user", $row->user_type);
                        $this->session->set_userdata("user_type", $row->user_type);
                        $this->session->set_userdata("email", $row->email);
                        $this->session->set_userdata("u_id", $row->u_id);
                        $this->session->set_userdata("first_name", $row->first_name);
                        $this->session->set_userdata("phone", $row->phone);
                        break;
                    case "Agent":
                        $this->session->set_userdata("Agent", $row->user_type);
                        $this->session->set_userdata("user_type", $row->user_type);
                        $this->session->set_userdata("email", $row->email);
                        $this->session->set_userdata("u_id", $row->u_id);
                        $this->session->set_userdata("first_name", $row->first_name);
                        break;
                    case "channel":
                        $this->session->set_userdata("channel", $row->user_type);
                        $this->session->set_userdata("user_type", $row->user_type);
                        $this->session->set_userdata("email", $row->email);
                        $this->session->set_userdata("u_id", $row->user_id);
                    default:
                        break;
                }
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    function change_password($user_type, $pass) {
        $data = array(
            'password' => $pass
        );
        $this->db->where('u_id', $u_id);
        $this->db->where('user_type', '1');
        $res = $this->db->update('login', $data);
        if ($res) {
            return "success";
        } else {
            return "failed";
        }
    }

    function check_email() {
        $this->db->select('u_id,email');
        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get('login');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    function update_rand_pass($u_id, $pass) {
        $data = array(
            'password' => md5($pass)
        );
        $this->db->where('user_id', $user_id);
        $res = $this->db->update('login', $data);
    }

    function get_table_field($tb_nm) {
        $query = $this->db->query("show columns from $tb_nm");
        return $query->result_array();
    }

    function get_table_value($tb_nm) {
        $sql = $this->db->query("select * from $tb_nm");
        return $sql->result_array();
    }

    function get_menus() {
        $sql = $this->db->query("select * from menu_list");
        return $sql->result_array();
    }

    function get_all_tables() {
        $dbname = $this->db->database;
        $query = $this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '$dbname'");
        return $query->result_array();
    }

    function dsn($db) {
        $dri = "mysqli";
        $hst = "localhost";
        $usr = "root";
        $pass = "";
        return sprintf('%s://%s:%s@%s/%s?char_set=utf8&dbcollat=utf8_general_ci&cache_on=true&cachedir=/path/to/cache', $dri, $usr, $pass, $hst, $db);
    }

    function save_signup() {
        $user_type = "user";
        $otp = rand(100000, 999999);
        $data = array(
            'first_name' => $this->input->post('f_name'),
            'last_name' => $this->input->post('l_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'u_pass' => $this->input->post('pass')
        );
        $this->db->insert("login", $data);
        $this->db->where("email", $data['email']);
        $data1 = $this->db->get('login');
        $data = $data1->result_array();
        //$msg2   = "OTP:" . $otp;
        // $output = file_get_contents('http://www.smslane.com/vendorsms/pushsms.aspx?user=jivaji&password=636669&msisdn=91' . $data['contact'] . '&sid=WEBSMS&msg=' . $msg2 . '&fl=0');
        return $data['0'];
    }

    function count_email($email = null) {
        $sql = $this->db->query("select count(*) count from login where email='$email'");
        $data = $sql->result_array();
        return $data['0'];
    }

    function update_signup($password, $u_id) {
        $sql = $this->db->query("UPDATE login SET password='$password' WHERE user_id='$u_id'");
    }

    function get_login($u_id) {
        $sql = $this->db->query("select * from login where u_id='$u_id'");
        return $sql->row_array();
    }

    function change_upass($newpass) {

        $data = array(
            'u_pass' => $newpass,
        );

        $this->db->where(array('u_id' => $this->session->userdata("u_id")));
        $this->db->update('login', $data);
    }

    function change_uemail($email) {

        $data = array(
            'email' => $email,
        );

        $this->db->where(array('u_id' => $this->session->userdata("u_id")));
        $this->db->update('login', $data);
    }

    // echo "<pte>";print_r($data);die;
    //echo $this->db->last_query();    die;
}
?>




