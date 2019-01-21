<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('api/m_rest');
    }

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function get_users()
    {
        $rest = $this->m_rest->get_users();

        echo json_encode($rest);
    }

    public function post_user()
    {
        $table = 'tb_users';
        $data = array(
            'user_name' => 'Tes',
            'email' => 'tes@email.com',
            'phone' => '098491734',
            'user_group' => '3',
            // 'rating' => '',
            // 'sold' => '',
            // 'is_open' => '',
            // 'is_active' => '',
            // 'service_time_open' => '',
            // 'service_time_close' => ''
        );
        $qry = $this->m_rest->simple_post($table, $data);
        echo json_encode($qry);
    }

    public function put_user()
    {
        $table = 'tb_users';
        $id = 5;
        $data = array(
            'user_name' => 'Tes tes',
            'email' => 'tes@email.com',
            'phone' => '098491734',
            'user_group' => '3',
            // 'rating' => '',
            // 'sold' => '',
            // 'is_open' => '',
            // 'is_active' => '',
            // 'service_time_open' => '',
            // 'service_time_close' => ''
        );
        $qry = $this->m_rest->simple_put($table, $data, $id);
        echo json_encode($qry);
    }

    public function del_user()
    {
        $table = 'tb_users';
        $id = 5;
        $qry = $this->m_rest->simple_delete($table, $id);
        echo json_encode($qry);
    }
}

// $field_tb_users = array(
//     'user_name' => 'Tes',
//     'email' => 'tes@email.com',
//     'phone' => '098491734',
//     'user_group' => '3',
//     'rating' => '',
//     'sold' => '',
//     'is_open' => '',
//     'is_active' => '',
//     'service_time_open' => '',
//     'service_time_close' => ''
// );
