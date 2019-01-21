<?php
class M_rest extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function get_users(){
		$query = $this->db->get('tb_users');
        return $query->result_array();
    }
    
    function simple_post($table, $data)
    {
        $qry = $this->db->insert($table, $data);
        if ($qry) {
            $msg = array('status'=> 'Success', 'code'=>201); //201 Created
        }else{
            $msg = array('status'=> 'Failed', 'code'=>400); // 400 Bad request
        }
        return $msg;
    }

    function simple_put($table, $data, $id)
    {
        $this->db->where('id', $id);
        
        $qry = $this->db->update($table, $data);
        if ($qry) {
            $msg = array('status'=> 'Success', 'code'=>202); //202 Accepted
        }else{
            $msg = array('status'=> 'Failed', 'code'=>406); //406 Not acceptable
        }
        return $msg;
    }

    function simple_delete($table, $id)
    {
        $qry = $this->db->delete($table, array('id' => $id));
        if ($qry) {
            $msg = array('status'=> 'Success', 'code'=>200); //202 OK
        }else{
            $msg = array('status'=> 'Failed', 'code'=>400);
        }
        return $msg;
    }

    function truncate($table)
    {
        $qry = $this->db->truncate($table);
        if ($qry) {
            $msg = array('status'=> 'Success', 'code'=>200); // 200 OK
        }else{
            $msg = array('status'=> 'Failed', 'code'=>400);
        }
        return $msg;
    }
}
?>