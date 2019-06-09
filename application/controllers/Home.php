<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url','security'));
    $this->load->library(array('form_validation'));
	}

	public function index()
	{
    $data['content'] = '/home/index.php';
    $this->load->view('/template/template',$data);
	}

  public function login()
  {
    $data['content'] = '/home/index.php';
    $this->load->view('/template/template',$data);
  }
}
