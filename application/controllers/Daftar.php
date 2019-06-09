<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

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
 	    $this->load->helper(array('form','url','security'));
 		$this->load->helper('date');
         $this->load->library('form_validation');
 		$this->load->model('M_sign','sign');
 	}


	public function index(){
	   	$this->tambah();
        redirect('daftar/sign_up');
	}

    Public function sign_up()
    {
		$this->form_validation->set_rules('fname', 'fname', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lname', 'lname', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email', 'email', 'required|min_length[8]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('confirm_password', 'confirm_password', 'required|min_length[6]|max_length[20]');

	//			$this->form_validation->set_rules('cekpassword', 'cekpassword', 'trim|required|xss_clean');
		$this->form_validation->set_rules('job', 'job', 'required|min_length[3]');
		$this->form_validation->set_rules('phone', 'phone', 'required|min_length[8]');
		if ($this->form_validation->run() == FALSE) {
			$this->tambah();
		} else {
    $data = array(
    "nama_depan" => $this->input->post('fname'),
    "nama_belakang" => $this->input->post('lname'),
    "email" => $this->input->post('email'),
    "password" => md5($this->input->post('password')),
    "pekerjaan" => $this->input->post('job'),
    "phone" => $this->input->post('phone')
    );
    $result = $this->sign->sign_up($data);
		if ($result == TRUE) {
			echo '<script>alert("Anda sudah terdaftar silahkan refresh untuk ke halaman login")</script>';
			redirect('registration_success', 'refresh');
		} else {
			$data = array(
					'fname' => set_value('fname', ''),
					'lname' => set_value('lname', ''),
					'email' => set_value('email', ''),
					'password' => set_value('password', ''),
					'job' => set_value('job', ''),
					'phone' => set_value('phone', ''),
					'email_exist' => set_value('email_exist', 'Email ini sudah terdaftar!')
			);
			$this->load->view('daftar', $data);
		}
    }
	}

	    public function tambah() {
	        $this->load->library('form_validation');
	        $data = array(
	            'fname' => set_value('fname', ''),
	            'lname' => set_value('lname', ''),
	            'email' => set_value('email', ''),
							'password' => set_value('password', ''),
							'job' => set_value('job', ''),
							'phone' => set_value('phone', ''),
	        );

	        $this->load->view('daftar', $data);
	    }

}
