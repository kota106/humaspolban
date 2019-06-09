<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url','security'));
 		$this->load->helper('date');
        $this->load->library(array('form_validation'));
		$this->load->model('M_admin');
		if(!$this->session->userdata('is_admin')){
			redirect(base_url('masuk'));
	    }
	}
		public function index()
	{
		$this->checkout();
	}

	public function checkout()
	{
	    $data['content'] = '/admin/list_checkout.php';
	    $data['active'] = 'checkout';
		$data['checkout']=$this->M_admin->get_list_data();
		$this->load->view('/admin/template_admin',$data);
	}

		public function konfirmasi_pembayaran()
	{
		$id=$this->uri->segment(3);
		$data = array("status_bayar" => 1);
		$data['row_data']=$this->M_admin->konfirmasi_checkout($data, $id);
		echo '<script>alert("Status Pembayaran Berhasi di Update!")</script>';
			redirect('admin', 'refresh');
	}
		public function user()
	{
	    $data['content'] = '/admin/list_pengguna.php';
	    $data['active'] = 'user';
		$data['checkout']=$this->M_admin->get_list_user();
		$this->load->view('/admin/template_admin',$data);
	}

//------------------------------------------------------BAGIAN_PRODUK-------------------------------------------------------------------------------------------------

		public function produk()
	{
	    $data['content'] = '/admin/list_produk.php';
	    $data['active'] = 'produk';
		$data['checkout']=$this->M_admin->get_list_produk();
		$this->load->view('/admin/template_admin',$data);
	}

	public function hapus_produk()
    {
        $id=$this->uri->segment(3);
	    $this->M_admin->hapus_produk($id);
		redirect(base_url('admin/dataproduk'), 'refresh');
    }

    	public function edit_produk()
    {
        $id=$this->uri->segment(3);
        $data['row_data']=$this->M_admin->get_detail_produk($id);
		$data['content']="/admin/v_update_produk.php";
		$this->load->view('/admin/template_admin.php', $data);
    }

    public function input_produk(){
				$config['upload_path'] = './assets/img/store/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite'] = TRUE;
				$config['max_size'] = "4096000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
				$config['min_height'] = "300";
				$config['min_width'] = "300";
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

		if($this->upload->do_upload('userfile'))
		{
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$data = array(
					"nama_barang" => $this->input->post('nama_barang'),
					"jenis" => $this->input->post('jenis'),
					"petani" => $this->input->post('petani'),
                    "lokasi_panen" => $this->input->post('lokasi_panen'),
					"harga" => $this->input->post('harga'),
					"image" => $file_name,
					"stock" => $this->input->post('stock')
					);
				$insert =$this->M_admin->insert($data);
				// $this->load->view('upload_success',$data);
				echo '<script>alert("Upload berhasil!")</script>';
				redirect(base_url('admin/dataproduk'), 'refresh');
		}
		else
		{
				print_r( $this->upload->display_errors());
		}
    }

    	function update()
	{
		$config['upload_path'] = './assets/img/store/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = TRUE;
		$config['max_size'] = "4096000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
		$config['min_height'] = "300";
		$config['min_width'] = "300";
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

        if($this->upload->do_upload('userfile'))
        {
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
        		$data = array(
        			"kode_barang" => $this->input->post('kode_barang'),
        			"nama_barang" => $this->input->post('nama_barang'),
        			"petani" => $this->input->post('petani'),
        			"lokasi_panen" => $this->input->post('lokasi_panen'),
        			"jenis" => $this->input->post('jenis'),
        			"harga" => $this->input->post('harga'),
        			"deskripsi" => $this->input->post('deskripsi'),
        			"image" => $file_name,
        			);
        		$update =$this->M_admin->update_produk($data);
        		// $this->load->view('upload_success',$data);
        		echo '<script>alert("Upload berhasil!")</script>';
        		redirect(base_url('admin/dataproduk'), 'refresh');
        }
	   else{
	          $data = array(
        			"kode_barang" => $this->input->post('kode_barang'),
        			"nama_barang" => $this->input->post('nama_barang'),
        			"petani" => $this->input->post('petani'),
        			"lokasi_panen" => $this->input->post('lokasi_panen'),
        			"jenis" => $this->input->post('jenis'),
        			"harga" => $this->input->post('harga'),
        			"satuan" => $this->input->post('satuan'),
        			"deskripsi" => $this->input->post('deskripsi'),
        			);
        		$update =$this->M_admin->update_produk($data);

                    echo '<script>alert("Upload berhasil!")</script>';
            		redirect(base_url('admin/dataproduk'), 'refresh');


	   }

	}
//--------------------------------------------------------------- Bagian Penjualan----------------------------------------------------------------------------------------
		public function penjualan()
	{
	    $data['content'] = '/admin/list_penjualan.php';
	    $data['active'] = 'penjualan';
	    $data['insert'] = $this->M_admin->get_list_idBarang();
		$data['checkout']= $this->M_admin->get_list_penjualan();
		$this->load->view('/admin/template_admin',$data);
	}

	public function input_penjualan(){
				$config['upload_path'] = './assets/img/penjualan/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite'] = TRUE;
				$config['max_size'] = "4096000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
				$config['min_height'] = "300";
				$config['min_width'] = "300";
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

		if($this->upload->do_upload('userfile'))
		{
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];
				$data = array(
					"barang" => $this->input->post('barang'),
					"pembeli" => $this->input->post('pembeli'),
					"jumlah" => $this->input->post('jumlah'),
					"satuan" => $this->input->post('satuan'),
                    "tgl" => $this->input->post('tanggal_penjualan'),
					"bukti_penjualan" => $file_name,
					);
				$insert = $this->M_admin->insert_penjualan($data);
				// $this->load->view('upload_success',$data);
				if($insert){
				    echo '<script>alert("Upload berhasil!")</script>';
				    redirect(base_url('admin/penjualan'), 'refresh');
				}
				else{
				    echo '<script>alert("Upload gagal!")</script>';
				}

		}
		else
		{
                $data = array(
					"barang" => $this->input->post('barang'),
					"pembeli" => $this->input->post('pembeli'),
					"jumlah" => $this->input->post('jumlah'),
					"satuan" => $this->input->post('satuan'),
                    "tgl" => $this->input->post('tanggal_penjualan'),
					);
				$insert =$this->M_admin->insert_penjualan($data);
				// $this->load->view('upload_success',$data);
				echo '<script>alert("Upload berhasil, tanpa foto!")</script>';
				redirect(base_url('admin/penjualan'), 'refresh');
		}
    }

}
