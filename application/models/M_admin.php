<?php
/**
 *
 */
class M_admin extends CI_Model
{

  function get_list_data()
  {
    $query=$this->db->query("select * from checkout");
    return $query;
  }
  
    function get_list_idBarang()
  {
    $query=$this->db->query("select kode_barang, nama_barang from barang");
    return $query->result();
  }
  
    function get_list_user()
  {
    $query=$this->db->query("select * from pengguna");
    return $query;
  }
  
    function get_list_produk()
  {
    $query=$this->db->query("select * from barang");
    return $query;
  }
  
    function get_list_penjualan()
  {
    $query=$this->db->query("select * from jual");
    return $query;
  }
  
  
  	public function konfirmasi_checkout($data,$id){
		$this->db->where('id', $id);
		$this->db->update('checkout', $data);
	}
	public function hapus ($id){
	    $sql = $this->db->query("DELETE FROM checkout WHERE id = ".intval($id));
    }
    
    public function insert($data){
		$this->db->insert('barang', $data);
	}
	
	public function insert_penjualan($data){
		$this->db->insert('jual', $data);
		return 1;
	}
	
	public function hapus_produk ($id){
	    $sql = $this->db->query("DELETE FROM barang WHERE kode_barang = ".intval($id));
    }
    
   function get_detail_produk($id)
  {
    $query=$this->db->query("select * from barang where kode_barang='$id'");
    return $query;
  }
    
  function update_produk($data)
  {
    $this->db->where('kode_barang', $data['kode_barang']);
    $this->db->update('barang', $data);
  }

}
 ?>
