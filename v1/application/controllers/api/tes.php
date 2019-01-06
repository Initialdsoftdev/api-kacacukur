<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
