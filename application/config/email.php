<?php

/* application/config/email.php */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| SendGrid Setup
|--------------------------------------------------------------------------
|
| All we have to do is configure CodeIgniter to send using the SendGrid
| SMTP relay:
*/
$config = array(
  'protocol' 	=> 'smtp' ,
  'smtp_host' => 'ssl://smtp.googlemail.com' ,
  'smtp_port' => 465 ,
  'smtp_user' => 'kusumawira98@gmail.com' ,
  'smtp_pass' => 'Katlant1s',
  'mailtype'	=> 'html',
  'charset' 	=> 'utf-8',
  'newline' 	=> "\r\n",
  'wordwrap' 	=> TRUE
  );
?>
