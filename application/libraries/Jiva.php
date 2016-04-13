<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class jiva
{
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->library('email');
        $this->CI->load->database();
    }
    function save($info, $data)
    {
        $CI =& get_instance();
        $row_id   = $info['row_id'];
        $row_name = $info['row_name'];
        $table    = $info['table'];
        if ($table != "") {
            if ($row_id == " " || $row_id == null) {
                $this->CI->db->insert($table, $data);
            } else {
                $this->CI->db->where($row_name, $row_id);
                $this->CI->db->update($table, $data);
            }
            return 1;
        } else {
            return 0;
        }
    }
    function edit_data($data)
    {
        $CI =& get_instance();
        $table      = $data['table'];
        $primary_id = $data['value'];
        $column     = $data['col_name'];
        if ($table != "") 
		{
            if ($primary_id == "") 
			{
                $query = $this->CI->db->query("SELECT * FROM $table");
                foreach ($query->list_fields() as $field) {
                    $fdata[$field] = "";
                }
                return $fdata;
            }
			else if ($primary_id != "") 
			{
                $sql = $this->CI->db->query("select * from $table where $column='$primary_id' ");
                $arr = $sql->row_array();
                return $arr;
            }
        }
    }
    function get_row($data)
    {
        $table  = $data['table'];
        $column = $data['col_name'];
        $val    = $data['value'];
        $CI =& get_instance();
        if (count($data) > 0) {
            $sql = $this->CI->db->query("select * from $table where $column='$val'");                                   
            return $sql->row_array();
        }
    }
    function get_m_row($data)
    {
        $table  = $data['table'];
        $column = $data['col_name'];
        $val    = $data['value'];
        $CI =& get_instance();
        if (count($data) > 0) {
            $sql = $this->CI->db->query("select * from $table where $column='$val'");
            return $sql->result_array();
        }
    }
    function update($data,$update_data)
    {
        $table      = $data['table'];
        $column     = $data['col_name'];
        $value      = $data['value'];
        $sql_delete = $this->CI->db->where($column,$value)->update($table,$update_data);
    }
    function delete_record($data)
    {
        $table      = $data['table'];
        $column     = $data['col_name'];
        $value      = $data['value'];
        $sql_delete = $this->CI->db->query("delete from $table where $column='$value'");
    }
    function get_all($table)
    {
        $sql = $this->CI->db->query("select * from $table");
        return $sql->result_array();
    }
    function count($data)
    {
        $table  = $data['table'];
        $column = $data['col_name'];
        $value  = $data['value'];
        $CI =& get_instance();
        $sql  = $this->CI->db->query("select count(*) count from $table where $column='$value'");
        $data = $sql->result_array();
        return $data[0]['count'];
    }
    function send_mail($data)
    {
        $from    = $data['from'];
        $to      = $data['to'];
        $subject = $data['subject'];
        $message = $data['message'];
        $CI =& get_instance();
        $config = Array();
        $msg    = $message;
        $this->CI->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['mailtype'] = 'html';
        $config['charset']  = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $this->CI->email->initialize($config);
        $this->CI->email->set_newline("\r\n");
        $this->CI->email->from($from);
        $this->CI->email->to($to);
        $this->CI->email->subject($subject);
        $this->CI->email->message($msg);
        if ($this->CI->email->send()) {
            $data = "Message sent successfully";
            return $data;
        } else {
            show_error($this->CI->email->print_debugger());
            $data = "Mail not sent successfully";
            return $data;
        }
    }
    function send_sms($data)
    {
        $mobile  = '91' . $data['mobile'];
        $message = $data['message'];
        $message = str_replace(" ", "%20", $message);
        $CI =& get_instance();
        $output = file_get_contents('http://www.smslane.com/vendorsms/pushsms.aspx?user=jivaji&password=636669&msisdn=' . $mobile . '&sid=WEBSMS&msg=' . $message . '&fl=0');
        return $output;
    }
    function forgot_password($data)
    {
        $data = array(
            'table' => 'login',
            'col_name' => 'email',
            'value' => $data['email']
        );
        $rand = md5(rand(99999, 999999));
        $data = $this->get_row($data);
        if (empty($data)) {
            $msg = "Invalid Email Address";
            return $msg;
        }
        $rand     = rand(99999, 999999);
        $arr      = array(
            'table' => 'login',
            'row_name' => key($data),
            'row_id' => $data[key($data)]
        );
        $password = array(
            'password' => md5($rand)
        );
        $this->save($arr, $password);
        $msg         = "Dear " . $data['first_name'] . " " . $data['last_name'] . " your id: " . $data['email'] . " and password: " . $rand;
        $arr         = array(
            'mobile' => $data['contact'],
            'message' => $msg,
            'from' => $data['email'],
            'to' => $data['email'],
            'subject' => 'Password Reset'
        );
        $sms_output  = $this->send_sms($arr);
        $mail_output = $this->send_mail($arr);
    }
}
?>