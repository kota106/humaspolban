<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
 		parent::__construct();
 		$this->load->helper('url');
 		$this->load->helper('date');
 		$this->load->model('m_sign','sign');
 	}

Public function daftar()
{
				$data = array(
					"nama_depan" => $this->input->get('fname'),
					"nama_belakang" => $this->input->get('lname'),
          "email" => $this->input->get('email'),
          "password" => $this->input->get('password'),
          "pekerjaan" => $this->input->get('job'),
          "phone" => $this->input->get('phone'),
					);
				$this->sign->insert($data);
}


}
