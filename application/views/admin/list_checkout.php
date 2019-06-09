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
		<i class="fas fa-table"></i> Data Checkout Member</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
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
							<td><strong>Email</strong></td>
							<td><strong>Nominal</strong></td>
							<td><strong>Status</strong></td>
							<td><strong>Waktu Checkout</strong></td>
							<td><strong>Foto Bukti</strong></td>
							<td><strong>Waktu Upload</strong></td>
							<td><strong>Konfirmasi</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php
	                    foreach ($checkout ->result()as $row) {
                        ?>
							<tr>
								<td>
									<?php echo $row->email; ?>
								</td>
								<td>
									<?php echo $row->nominal; ?>
								</td>
								<td>
									<?php echo $row->status_bayar; ?>
								</td>
								<td>
									<?php echo $row->waktu; ?>
								</td>
								<td>
									<?php if($row->upload == null){?>
									<p>Belum Upload/Tunai</p>
									<?php } else {?><a class="btn btn-info" style="width:100px;" role="button" href="<?php base_url('') ?>/payment/<?php echo $row->upload; ?>" scope="col-1" target="_blank">Lihat</a>
									<?php } ?> </td>
								<td>
									<?php echo $row->waktu_upload; ?>
								</td>
								<td>
									<?php if($row->status_bayar == 0){?><a class="btn btn-danger" style="width:100px;" role="button" href="<?php echo 'C_admin/konfirmasi_pembayaran/'.$row->id;?>" scope="col-1">Unpaid</a>
									<?php } elseif ($row->status_bayar == 1) {?><a class="btn btn-success" style="width:100px;" role="button" href="" scope="col-1">Paid</a>
									<?php } ?> </td>
							</tr>
							<?php }?>
					</tbody>
				</table>
