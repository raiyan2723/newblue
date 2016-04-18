<?php
class Box {
	

	function __construct() {
      $this->conn = & get_instance();
	}
	
	function pagining($url,$table,$per_page)
	{

		$config['base_url']        = base_url("index.php/".$url."");
		$config['total_rows']      = $this->conn->db->count_all($table);
		$config['prev_link']       = '<i class="fa fa-chevron-left"></i>';
		$config['next_link']       = '<i class="fa fa-chevron-right"></i>';
		$config['first_link']      = 'First';
		$config['last_link']       = 'Last';
		$config['attributes']      = array('class' => 'btn btn-default');
		$config['cur_tag_open']    = '<span class="btn btn-warning active">';
		$config['cur_tag_close']   = '</span>';
		$config['per_page']        = $per_page; 
		$this->conn->load->library('pagination',$config);		
		return $this->conn->pagination->create_links();	
	}
	
	function check_book($in_date, $out_date)
    {
        $buffer    = array();
        $i         = 0;
        $begin     = new DateTime(date('m/d/Y', strtotime($in_date)));
        $s_end     = new DateTime(date('m/d/Y', strtotime($out_date)));
        $end       = $s_end->modify('+1 day');
        $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
        foreach ($daterange as $date) {
            if (strtotime($date->format("m-d-Y")) >= strtotime(date("m-d-Y"))) {
                $buffer[$i] = $date->format("m-d-Y");
                $i++;
            }
        }
        if ($buffer) {
            $data = array_intersect($buffer, $this->get_booked_date_array());
            return array_values($data);
        }
        return array();
    }	
}

?>