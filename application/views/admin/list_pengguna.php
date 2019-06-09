<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php base_url('') ?>/admin">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Data Pengguna</li>
	</ol>
	<div class="card mb-3">
		<div class="card-header">
		<i class="fas fa-table"></i> Data Pengguna</div>
		<div class="card-body">
			<div class="table-responsive">
	    <table id="dataTable" align="center" class="table table-bordered table-hover display">
	    <thead> 
		<tr>
			<th>Nama</strong></th>
			<th>Email</strong></th>
			<th>Pekerjaan</strong></th>
			<th>No.HP</strong></th>
			<th>status</strong></th>
			<th>keterangan</strong></th>
		</tr>
	    </thead>	
		<tbody>
			<?php
	        foreach ($checkout ->result()as $row) {
            ?>
				<tr>
					<td><?php echo $row->nama_depan." ".$row->nama_belakang; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->pekerjaan; ?></td>
					<td><?php echo $row->phone; ?></td>
					<td><?php if($row->status == 1) {echo "admin";} else {echo "investor";} ?></td>
					<td><?php echo $row->keterangan; ?></td>
					<!--<td><img class="img-responsive" style="height:150px; widht:10px;" src="./identitas/<?php echo $row->upload; ?>"  alt="Belum Upload"></td>-->
				</tr>
				<?php } ?>
		</tbody>
	</table>