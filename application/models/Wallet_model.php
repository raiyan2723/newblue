<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wallet_model extends CI_Model {
    public function insert_add_money_detail($data) {
       return $this->db->insert('user_wallet_detail',$data);
    }    
    
}