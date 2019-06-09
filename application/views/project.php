<html lang="en">

<head>
	<link rel="icon" type="image/png" href="/hayati-ico.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Hayati ID - Investasi Pertanian Organik</title>
	<link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/core.min.css">
	<link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/full-slider.css">
	<link rel="stylesheet" href="<?php base_url('') ?>/assets/bootstrap/hayati.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
		<a class="icon" href="<?php base_url('') ?>/">
                <img class="icon-hayati" src="<?php base_url('') ?>/assets/img/lg-hd-hayati.png" alt="Hayati ID" height="95%" >
            </a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ml-auto">
			    <li class="nav-item">
					<a class="nav-link" href="<?php base_url('') ?>/store">Pasar Hayati</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php base_url('') ?>/about">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php base_url('') ?>/faq">FAQ</a>
				</li>
			</ul>
			</div>
	</nav><br><br>
<?php
$this->load->helper('nominal');
foreach ($row_data as $row) {?>
	<section id="project-review">
		<div class="container project-detail">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h4 class="section-heading text-uppercase"><?php echo $row->nama_barang?></h4>
					<div class="subheading-divider"></div>
					<br>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-6">
					<img class="img-fluid rounded" src="<?php echo base_url('') ?>/assets/img/store/<?php echo $row->image?>" alt="" style="max-height: 350px;"><br>
					<div class="subheading-divider"></div>
					<p style="text-align: justify;"><?php echo $row->deskripsi?></p><br>
				</div>
				<div class="col-md-6">
					<div class="card">
						<h5 class="project-capt">Detail Produk</h5>
						<div class="card-body">
							<div clas="row text-center">
								<table class="table table-hover" style="text-align: justify;">
									<tbody>
										<tr>
											<td>Produk</td>
											<td></td>
											<td><?php echo $row->nama_barang?></td>
										</tr>
										<tr>
											<td>Jenis</td>
											<td></td>
											<td><strong><?php if($row->jenis == 1){
									    echo " Organik tersertifikasi";}
									    else{ echo " Organik tidak tersertifikasi";}?></strong></td>
										</tr>
										<tr>
											<td>Harga</td>
											<td></td>
											<td><?php echo rupiah($row->harga)."/".$row->satuan; ?></td>
										</tr>
										<tr>
											<td>Lokasi Panen</td>
											<td></td>
											<td><?php echo $row->lokasi_panen?></td>
										</tr>
										<tr>
											<td>Petani</td>
											<td></td>
											<td><?php echo $row->petani?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="project-btn">
						<a class="about" href="https://hayati.id/store"><button class="more" type="button">Lihat Produk Lainnya</button></a>
						<a class="about" href="https://wa.me/6281278392024?text=Halo%2C%20Hayati%21%20Saya%20mau%20pesan%20..." target="blank"><button class="subm"  type="button">Beli Sekarang!</button></a>
					</div>
				</div>
			</div>

		</div>
	</section>
<?php } ?>

	<!--<div id="investNow" class="modal fade" role="dialog">-->
	<!--	<div class="modal-dialog">-->
	<!--		<div class="modal-content">-->
	<!--			<div class="modal-header">-->
	<!--				<button type="button" class="close" data-dismiss="modal"></button>-->
	<!--				<h4 class="modal-title">Budidaya Jahe Gajah</h4>-->
	<!--			</div>-->

	<!--			<div class="modal-body card">-->

	<!--				<?php if(!$this->session->userdata('is_checkout')){ ?>-->

	<!--				<p>Silahkan Transfer ke Rekening berikut<br></p>-->
	<!--				<p>Bank : MANDIRI<br></p>-->
	<!--				<p>No rek : 169-00-0105027-4<br></p>-->
	<!--				<p>A/N : Muhammad Sanjaya<br></p>-->
	<!--				<form method='post' action="<?php echo base_url('C_project/get_transfer');?>" onSubmit="return validasi()">-->
	<!--					<div class="form-group">-->
	<!--						<input type="text" readonly="true" name="email" value="<?php echo $this->session->userdata('email');?>" />-->
	<!--					</div>-->
	<!--					<div class="form-grup">-->
	<!--						<h5>Silahkan Masukan Nominal yang Ingin di Transfer</h5><br>-->
	<!--						<span>Rp. <input type="number" min="100000" name="nominal" step="1000"/></span>-->
	<!--						<span style="color: red;">Minimum nominal investasi sebesar Rp. 100.000</span>-->
	<!--					</div>-->
	<!--					<div class="modal-footer">-->
	<!--						<button type="button" class="dismiss" data-dismiss="modal">Close</button>-->
	<!--						<input type="submit" value="Submit" class="subm">-->
	<!--					</div>-->
	<!--				</form>-->

	<!--				<?php } else { ?>-->
	<!--				<div class="row text-center">-->
	<!--					<form method='post' action="<?php echo base_url('C_project/upload_image');?>" enctype="multipart/form-data">-->
	<!--						<div class="form-grup">-->
	<!--							<h5>Selesaikan Pembayaran Investasi Anda!</h5><br>-->
	<!--							<p>Silahkan Transfer ke Rekening berikut<br></p>-->
	<!--							<p>Bank : MANDIRI<br></p>-->
	<!--							<p>No rek : 169-00-0105027-4<br></p>-->
	<!--							<p>A/N : Muhammad Sanjaya<br></p>-->
	<!--							<input type='file' name='userfile' />-->
	<!--							<span style="color: red;">Ukuran Foto Maksimal 2 MB!</span>-->
	<!--						</div>-->
	<!--						<div class="modal-footer">-->
	<!--							<button type="button" class="dismiss" data-dismiss="modal">Close</button>-->
	<!--							<input type='submit' class="subm" name='submit' value='upload' />-->
	<!--						</div>-->
	<!--					</form>-->
	<!--				</div>-->
	<!--				<?php } ?>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="row">
						<div class="message">
							<form action="#" method="post" onSubmit="return validasi()">
								<div>
									<input type="text" placeholder="E-Mail" />
								</div>
								<div>
									<input type="text" placeholder="Subjek" />
								</div>
								<textarea name="message" rows="3" cols="20" placeholder="Pesan"></textarea>
								<div>
									<input type="submit" value="KIRIM" class="subm">
								</div>
							</form>
						</div>
					</div>
				</div>
								<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Informasi Lain</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php base_url('') ?>/about">Tentang Kami</a></li>
						<li><a href="<?php base_url('') ?>/faq">FAQ</a></li>
						<li><a href="#">Kebijakan Privasi</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Hubungi Kami <br></h5>
					<p class="text-muted">contact@hayati.id</p>
					<p class="text-muted">Surabaya, Jawa Timur, Indonesia</p>
					<p> </p>
					<div class="social-footer">
						<!--<a href="#" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-fb.png" alt="" width="35"></a>&nbsp;
						<a href="#" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-yt.png" alt="" width="35"></a> !-->
						<p class="text-muted"><a href="https://instagram.com/hayati.organik" target="_blank"><img src="<?php base_url('') ?>/assets/img/ft-ig.png" alt="" width="35"></a> : hayati.organik</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Aug 23, 2018 15:37:25").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get todays date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Output the result in an element with id="demo"
			document.getElementById("demo").innerHTML = hours + " : " +
				minutes + " : " + seconds;

			// If the count down is over, write some text 
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "EXPIRED";
			}
		}, 1000);

	</script>
	<script src="<?php base_url('') ?>/assets/bootstrap/jquery.min.js"></script>
	<script src="<?php base_url('') ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="<?php base_url('') ?>/assets/bootstrap/jquery.easing.min.js"></script>
</body>

</html>
