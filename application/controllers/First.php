<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_store','m_store',TRUE);

	}

	public function index(){
	    $data['list_brg']=$this->m_store->get_list_data();
		$data['content'] = '/laman/home.php';
		$this->load->view('/laman/template_laman',$data);
	}

	public function faq(){
	    $data['content'] = '/laman/faq.php';
		$this->load->view('/laman/template_laman',$data);
	}
    public function about(){
        $data['content'] = '/laman/about.php';
		$this->load->view('/laman/template_laman',$data);
    }
    public function privacy(){
        $data['content'] = '/laman/privacy.php';
		$this->load->view('/laman/template_laman',$data);
    }

    public function registration_success(){
        $data['content'] = '/laman/regis_success.php';
		$this->load->view('/laman/template_laman',$data);
    }

    public function masuk(){
        $this->load->view('masuk');
    }
    public function admin(){
        $this->load->view('admin_hayati');
    }

    public function dashboard(){
        if($this->session->userdata('is_login')){
        $this->load->view('dashboard');
        }
        else{
          redirect('masuk');
        }
    }
	public function invest(){
		$this->load->view('dashboard_my-invest');
	}

	public function contact(){
	     $email = $this->input->post('email');
	     $subject = $this->input->post('subject');
	     $message = $this->input->post('message');
	     $penerima = $this->session->userdata('email');
        	$this->load->library('email');
        	$this->email->from('kusumawira98@gmail.com', 'Hayatiid');
        	$this->email->to('hayati.invest@gmail.com');
        	$this->email->subject($subject);
        		$link = 'http://facebook.com';
            	$isi_email = '<h2>pesan dari"'.$email.'"</h2><br>
            	              <h3>Isi Pesan :"'.$message.'"</h3>';
            $this->email->message($isi_email);
    	$terkirim = $this->email->send();
	if ($terkirim != false){
// 			$this->addMail();
// 			$data['userData'] = $this->session->userdata('userData');
// 			$this->load->view('/user_authentication/profile',$data);
        	echo '<script>alert("Email Terkirim, Terimakasih")</script>';
        	redirect('first', 'refresh');
	}
	else {
    	redirect('first');
	}
	}
}
