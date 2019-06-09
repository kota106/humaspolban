<?php
	foreach ($row_data ->result()as $row) {?>


	<form class="form-horizontal" id="crud-form" method="post" action="<?php echo base_url('C_admin/update')?>" enctype="multipart/form-data">
		<div class="row form-group">
			<div class="col-md-8">
				<label>kode_barang</label>
				<input methods="post" name="kode_barang" type="text" readonly="true" class="form-control input-md" value="<?php echo $row->kode_barang?>"/>
			</div>
					<div class="col-md-8">
						<label>Nama Barang</label>
						<input id="nama_barang" methods="post" name="nama_barang" type="text" class="form-control input-md" placeholder="nama_barang" value="<?php echo $row->nama_barang?>"/>
					</div>
					<div class="col-md-8">
						<label>petani</label>
						<input id="harga" name="petani" type="text" class="form-control input-md" placeholder="harga" value="<?php echo $row->petani?>"/>
					</div>
					<div class="col-md-8">
						<label>lokasi_panen</label>
						<input id="stock" name="lokasi_panen" type="text" class="form-control input-md" placeholder="stock" value="<?php echo $row->lokasi_panen?>"/>
					</div>
                  <div class="col-md-8">
        			    <label>jenis</label>
                        <input id="stock" name="jenis" type="number" class="form-control input-md" placeholder="diskon" value="<?php echo $row->jenis?>"/>
                  </div>
                  <div class="col-md-8">
        			    <label>harga</label>
                        <input id="stock" name="harga" type="text" class="form-control input-md" placeholder="diskon" value="<?php echo $row->harga?>"/>
                  </div>
                  <div class="col-md-8">
        			    <label>deskripsi</label>
                        <input id="stock" name="deskripsi" type="text" class="form-control input-md" placeholder="diskon" value="<?php echo $row->deskripsi?>"/>
                  </div>
					<div class="col-md-8">
						<img class="img image img-responsive" src="<?php echo base_url("/assets/img/store/".$row->image); ?>" alt="kosong" width="10%">
						<input id="userfile" name="userfile" type="file" class="form-control input-md" />
					</div><br>
          <div class="col-md-12">
            <input type='submit' class="subm" name='submit' value='update' /></div>
      </div>
	</form>
<?php }
 ?>
