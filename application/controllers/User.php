<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form','security'));
    $this->load->library(array('form_validation'));
	}
	public function index()
	{
		$this->load->view('/template/template');
	}
}
