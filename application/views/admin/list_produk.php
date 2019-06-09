<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php base_url('') ?>/admin">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Data Checkout</li>
	</ol>
	<div class="card mb-3">
		<div class="card-header">
		<i class="fas fa-table"></i> Data Produk</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5">Insert New Produk</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#insert">Tambah Produk</button></span>
                  <!--<span class="float-right">-->
                  <!--  <i class="fas fa-angle-right"></i>-->
                  <!--</span>-->
                </a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">Fitur Segera Hadir!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5">Fitur Segera Hadir!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<div class="mr-5">Fitur Segera Hadir!</div>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
						</div>
					</div>
				</div>
				<table id="dataTable" align="center" class="table table-bordered table-hover display">
					<thead>
						<tr>
							<td><strong>No</strong></td>
							<td><strong>Nama Barang</strong></td>
							<td><strong>Harga</strong></td>
							<td><strong>Deskripsi</strong></td>
							<!--<td><strong>Pembelian</strong></td>-->
							<td><strong>Petani</strong></td>
                            <td><strong>Lahan</strong></td>
							<td><strong>Tgl masuk</strong></td>
							<td><strong>Gambar</strong></strong></td>
							<td><strong>Manage</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$this->load->helper('nominal');
						$no = 0;
	                    foreach ($checkout ->result()as $row) {
	                        $no++;
                        ?>
							<tr>
							    <td>
									<?php echo $no; ?>
								</td>
								<td>
									<?php echo $row->nama_barang; ?>
								</td>
								<td>
									<?php echo rupiah($row->harga)."/".$row->satuan; ?>
								</td>
								<td>
									<?php echo $row->deskripsi; ?>
								</td>
								<td>
									<?php echo $row->petani; ?>
								</td>		
								<td>
									<?php echo $row->lokasi_panen; ?>
								</td>
								<td>
									<?php echo $row->waktu; ?>
								</td>
								<td>
									<?php if($row->image == null){?>
									<p>Belum tersedia</p>
									<?php } else {?><a class="btn btn-info" style="width:100px;" role="button" href="<?php base_url('') ?>/assets/img/store/<?php echo $row->image; ?>" scope="col-1" target="_blank">Lihat</a>
									<?php } ?>
								</td>
			                	<td>
			                	    <a class="btn btn-primary" style="width:100px;" role="button" href="<?php echo base_url('C_admin/edit_produk/'.$row->kode_barang);?>" scope="col-1">update</a>
				                    <a class="btn btn-danger" style="width:100px;" role="button" href="<?php echo base_url('C_admin/hapus_produk/'.$row->kode_barang);?>" scope="col-1">delete</a></td>
								</td>
							</tr>
							<?php }?>
					</tbody>
				</table>

<div class="modal" id="insert">
  <div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" id="crud-form" method="post" action="<?php echo base_url('C_admin/input_produk')?>" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Sesuaikan Data Produk</h4>
          </div>
          <div class="modal-body">
        	 <div class="form-group">
               <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
             </div>
              <div class="form-group">
               <input type="text" class="form-control" name="petani" placeholder="petani" value="Brenjonk">
             </div>
            <div class="form-group">
               <input type="text" class="form-control" name="lokasi_panen" placeholder="lokasi panen" value="Mojokerto">
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="jenis" placeholder="jenis" hidden="true" value="1">
             </div>
             <div class="form-group col-sm-16">
                <input type="number" class=" col-sm-6" name="harga" placeholder="harga Barang"><strong>/</strong>
                <input type="text" class=" col-sm-4" name="satuan" placeholder="EX : 500gr">

             </div>
             <div class="form-group">
               <input type="number" class="form-control" name="stock" placeholder="Stock Barang" hidden="true" value="100">
             </div>
             <div class="form-group">
             <label>Insert gambar utama</label>
             <input type="file" class="form-control" name="userfile" placeholder="Gambar utama">
              <!--<label>Insert gambar pendukung</label>-->
              <!--<input type="file" class="form-control" name="add_image1" placeholder="Gambar pendukung">-->
              <!--<input type="file" class="form-control" name="add_image2" placeholder="Gambar pendukung">-->
             </div>
	      </div>
    	<div class="modal-footer">
    	  <button type="submit" class="subm">Tambah</button>
    	   <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    	</div>
	    </form>
    </div>
 </div>
</div>
