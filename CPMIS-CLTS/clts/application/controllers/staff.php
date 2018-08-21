<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Staff extends CI_Controller
{
  	function __construct()
  	{
		parent::__construct();
		$this->load->database();
       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');

    }

    /***default function, redirects to login page if no staff logged in yet***/
    public function index()
    {
        if ($this->session->userdata('staff_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('staff_login') == 1)
            redirect(base_url() . 'index.php?staff/dashboard', 'refresh');
    }


} //end of class
