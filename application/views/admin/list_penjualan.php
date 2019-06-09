<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php base_url('') ?>/admin">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Data Penjualan</li>
	</ol>
	<div class="card mb-3">
		<div class="card-header">
		<i class="fas fa-table"></i> Data Penjualan</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5">Insert Penjualan</div>
							</div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                              <!--<span class="float-left">-->
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#insert">Tambah Produk</button>
                              <!--</span>-->
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
								<div class="mr-5">Insert dari Excel</div>
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
								<div class="mr-5">Grafik Penjualan</div>
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
								<div class="mr-5">Eksport PDF</div>
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
							<td><strong>no</strong></td>
							<td><strong>barang</strong></td>
							<td><strong>pembeli</strong></td>
							<td><strong>jumlah</strong></td>
							<td><strong>tanggal</strong></td>
							<td><strong>bukti</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 0;
	                    foreach ($checkout ->result()as $row) {
	                        $no++;
                        ?>
							<tr>
							    <td>
									<?php echo $no; ?>
								</td>
								<td>
									<?php echo $row->barang; ?>
								</td>
								<td>
									<?php echo $row->pembeli; ?>
								</td>
								<td>
									<?php echo $row->jumlah; echo $row->satuan; ?>
								</td>
								<td>
									<?php echo $row->tgl; ?>
								</td>
								<td>
									<?php if($row->bukti_penjualan == null){?>
									<p>Belum Upload bukti</p>
									<?php } else {?><a class="btn btn-info" style="width:100px;" role="button" href="<?php base_url('') ?>/assets/img/penjualan/<?php echo $row->bukti_penjualan; ?>" scope="col-1" target="_blank">Lihat</a>
									<?php } ?>
								</td>
							</tr>
							<?php }?>
					</tbody>
				</table>
				
<div class="modal" id="insert">
  <div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" id="crud-form" method="post" action="<?php echo base_url('C_admin/input_penjualan')?>" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Insert Data Penjualan</h4>
          </div>
          <div class="modal-body">
        	<div class="form-group">
                <label>Pilih Barang Pembelian</label>
                   <select class="form-control" name="barang">
                        <?php
    	                    foreach ($insert as $row) {
                        ?>
                      <option value="<?php echo $row->nama_barang; ?>"><?php echo $row->nama_barang; ?></option>
                      <?php
    	                    }
    	               ?>
                    </select>
            </div>
               <div class="form-group">
               <input type="text" class="form-control" name="pembeli" placeholder="pembeli">
            </div>
            <div class="form-group">
               <input type="number" class="form-control" name="jumlah" placeholder="jumlah">
            </div>
            <div class="form-group">
                <label>Satuan jumlah Pembelian</label>
                   <select class="form-control" name="satuan">
                      <option value="Gr">gr</option>
                      <option value="Kg">kg</option>
                      <option value="Ton">ton</option>
                    </select>
            </div>
            <div class="form-group">
               <label>Tanggal Pembelian</label>
               <input type="date" class="form-control" name="tanggal_penjualan">
            </div>
            <div class="form-group">
               <label>Insert bukti transaksi</label>
               <input type="file" class="form-control" name="userfile" placeholder="Gambar utama">
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
