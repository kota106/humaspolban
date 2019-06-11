<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

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
 	    $this->load->helper(array('form','url','security','date'));
         $this->load->library(array('form_validation','session'));
 		// $this->load->model('M_sign','sign');
 	}


	public function index(){
		$this->load->view('login/index');
	}

  function login()
  {
    $email = $this->input->post('email');
	$password =  md5($this->input->post('password'));
    $where = array(
      'email' => $email,
      'password' => $password
    );
    $data = $this->sign->cek_login("pengguna",$where);
    foreach ($data as $row) {$status = $row['status'];}

		if($data != null){
		    $this->session->set_userdata('email', $email);
			$this->session->set_userdata('is_login', true);
            if($status == 1){
                $this->session->set_userdata('is_admin', true);
                if(!$this->session->userdata('project')){
					redirect(base_url('C_admin'));
                }else{
                    $this->load->view('project');
                    redirect(base_url('project'));
                }
            }
            else {
                if(!$this->session->userdata('project')){
					redirect(base_url(''));
                }else{
		            $this->load->view('project',$data);
                    redirect(base_url('project'));
                }
            }

		}else{
		    echo '<script>alert("Email atau Password yang anda masukan salah !")</script>';
			redirect('masuk', 'refresh');
		}
  }
    function logout(){
		$this->session->sess_destroy();
		redirect('masuk');
	}

    Public function sign_in()
    {
    $data = array(
    "nama_depan" => $this->input->post('fname'),
    "nama_belakang" => $this->input->post('lname'),
    "email" => $this->input->post('email'),
    "password" => md5($this->input->post('password')),
    "pekerjaan" => $this->input->post('job'),
    "phone" => $this->input->post('phone')
    );
    $result = $this->sign->insert($data);
     echo '<script>alert("Anda sudah terdaftar silahkan Login")</script>';
    redirect('masuk');

    }


}
