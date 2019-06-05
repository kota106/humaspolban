<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url','security'));
 		$this->load->helper('date');
        $this->load->library(array('form_validation'));
	}
	public function index()
	{
		$this->load->view('/template/template');
	}
}
