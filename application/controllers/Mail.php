<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

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
//  		$this->load->model('M_project','mail');
 	}

	public function send_mail()
{
  $penerima = $this->session->userdata('email');
	$this->load->library('email');
	$this->email->from('kusumawira98@gmail.com', 'Hayatiid');
	$this->email->to('wirakampit@gmail.com');
	$this->email->subject('Halaman Konfirmasi transfer');
	$link = 'http://facebook.com';
	$isi_email = '<html>
	 <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <title>Demystifying Email Design</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body style="margin: 0; padding: 0;">
	<table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
	 <tr>
	 <td align="center" bgcolor="#222">
	         <h2 style="color :green;">Hayatiid form konfirmasi</h2>
	 </td>
	 </tr>
	 <tr>
	 <td align="center" bgcolor="yellow" style="padding: 5px 0px 5px 0px;">
	   <h3 style="color:yellow;">Link Konfirmasi</h3>
	 	 <h5 style="color:#ffffff;">klik link di bawah ini untuk konfirmasi transfer anda.<br></h5>
	   <a href="'.$link.'"><button class="btn bg-primary text-white">Konfirmasi transfer</button></a>
	 </td>
	 </tr>
	</table>
	</body>
	</html>';
	$this->email->message($isi_email);
	// $this->slack();
	$terkirim = $this->email->send();

	// $this->load->view('welcome');
	if ($terkirim != false){
// 			$this->addMail();
// 			$data['userData'] = $this->session->userdata('userData');
// 			$this->load->view('/user_authentication/profile',$data);
	}
	else {
    	redirect('first');
	}
}

// Public function addMail()
// {
// 	$penerima = $this->getEmail();
// 	$no=0;
// 	$list = array();
// 	foreach ($penerima as $row) {
// 	$list[$no] = $row;
// 		$waktu_kirim = date('Y-m-d H:i:s');
// 		// $email_penerima = $list[$no];
// 				$data = array(
// 					"waktu_kirim" => $waktu_kirim,
// 					"email_penerima" =>  $list[$no],
// 					);
// 				$this->mail->insert($data);
// 				$no++;
// 	}
// }

public function index(){
		$this->send_mail();
}

// public function getEmail(){
// 	$this->load->model('M_mail');
// 	$data = $this->mail->getEmail();
// 	$no=0;
// 	$list = array();
// 	foreach ($data as $row) {
// 		$list[$no] = $row['Email'];
// 		// $status[$no] = $row['status'];
// 		$no++;
// 		}
// 		return $list;
// }

}
