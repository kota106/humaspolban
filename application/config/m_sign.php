<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sign extends CI_Model {

	public function insert($data){
		$this->db->insert('pengguna', $data);
	}

	public function select(){
		$data = $this->db->get('log_mail')->result_array();
		$r = 0;
		foreach ($data as $value) {
			$data_conv[$r][0] = $value['id'];
			$data_conv[$r][1] = $value['waktu_kirim'];
			$data_conv[$r][2] = $value['penerima'];
			$r++;
		}
		return $data_conv;
	}

	public function select_where_id($id){
		return $this->db->get_where('log_mail', array('id' => $id))->result();
	}

}
?>
