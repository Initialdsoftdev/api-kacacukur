<?php
class M_rest extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function get_users(){
		$query = $this->db->get('tb_users');
        return $query->result_array();
    }
    
    function get_user($merchant_code){
		$this->db->where("tb_vendor.f_code_vendor", $merchant_code);
		$vendors = $this->getVendor();
		if ($vendors){
			return $vendors[0];
		}else{
			return FALSE;
		}
    }
    
    function post_user($data)
    {
        $qry = $this->db->insert('tb_users', $data);
        if ($qry) {
            $msg = array('status'=> 'Success', 'code'=>201);
        }else{
            $msg = array('status'=> 'Failed', 'code'=>400);
        }
        return $msg;
    }
}
?>