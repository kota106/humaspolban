<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if (!function_exists('nominal')) {
    function rupiah($angka){
    	
    	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    	return $hasil_rupiah;
     
    }
}