<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" href="/hayati-ico.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Hayati - Pangan Organik Segar dari Petani Lokal</title>
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/bootstrap/core.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>/assets/bootstrap/hayati.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
		<a class="icon" href="<?php echo base_url('') ?>">
                <img class="icon-hayati" src="<?php echo base_url('') ?>/assets/img/lg-hd-hayati.png" alt="Hayati ID" height="95%" >
        </a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="<?php echo base_url('') ?>/store">Pasar Hayati</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="<?php echo base_url('') ?>/about">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="<?php echo base_url('') ?>/faq">FAQ</a>
				</li>
				<?php if(!$this->session->userdata('is_login')){ ?>
				<?php } else { ?>
				<li class="nav-item">
					<div class="dropdown">
						<a class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i></a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="<?php echo base_url('') ?>/masuk/logout">Keluar</a>
						</div>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</nav><br>

	<?php $this->load->view($content); ?>

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
				    <h5>Sampaikan Saranmu!</h5>
					<div class="row">
						<div class="message">
							<form action="<?php echo base_url('First/contact');?>" method="post" onSubmit="return validasi()">
								<div>
									<input type="text" name="email" placeholder="E-Mail" />
								</div>
								<div>
									<input type="text" name="subject" placeholder="Subjek" />
								</div>
								<textarea name="message" rows="3" cols="20" placeholder="Pesan"></textarea>
								<input type="submit" value="KIRIM" class="subm">
							</form>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Informasi Lain</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo base_url('') ?>about">Tentang Kami</a></li>
						<li><a href="<?php echo base_url('') ?>faq">FAQ</a></li>
						<li><a href="<?php echo base_url('') ?>privacy">Kebijakan Privasi</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Hubungi Kami <br></h5>
					<p class="text-muted">contact@hayati.id</p>
					<p class="text-muted">Surabaya, Jawa Timur, Indonesia</p>
					<p> </p>
					<div class="social-footer">
						<!--<a href="#" target="_blank"><img src="<?php echo base_url('') ?>/assets/img/ft-fb.png" alt="" width="35"></a>&nbsp;
						<a href="#" target="_blank"><img src="<?php echo base_url('') ?>/assets/img/ft-yt.png" alt="" width="35"></a> !-->
						<a href="https://instagram.com/hayati.organik" target="_blank"><img src="<?php echo base_url('') ?>/assets/img/ft-ig.png" alt="" width="35"></a>&nbsp;<a href="https://facebook.com/hayatiid.organik" target="_blank"><img src="<?php echo base_url('') ?>/assets/img/ft-fb.png" alt="" width="35"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="<?php echo base_url('') ?>/assets/bootstrap/jquery.min.js"></script>
	<script src="<?php echo base_url('') ?>/assets/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url('') ?>/assets/bootstrap/jquery.easing.min.js"></script>
	<script src="<?php echo base_url('') ?>/assets/bootstrap/hayati.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	<script>
		var typed = new Typed('#typed', {
			stringsElement: '#typed-strings'
		});

	</script>
</body>

</html>
