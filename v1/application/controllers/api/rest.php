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
        $qry = $this->m_rest->post_user($data);
        echo json_encode($qry);
    }
}
