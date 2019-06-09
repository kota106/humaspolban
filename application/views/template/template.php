<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel Admin</title>
	<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="<?php echo base_url('') ?>assets/dasbor/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('') ?>assets/dasbor/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" >
	<link href="<?php echo base_url('') ?>assets/dasbor/css/sb-admin.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="index.html">Chatbot Informasi Kampus</a>

		</ul>
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">

						<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
				        <i class="fas fa-bars"></i>
				      </button>
			</div>
		</form>
	</nav>

<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('') ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('') ?>history">
            <i class="fas fa-history"></i>
            <span>Riwayat</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('') ?>pesan">
            <i class="fas fa-comment-dots"></i>
            <span>Pesan</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('') ?>knowledge">
            <i class="fas fa-cogs"></i>
            <span>Kelola Pengetahuan</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('') ?>masuk/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span></a>
			</li>
		</ul>


		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view($content); ?>
			</div>
		</div>

</div>


	<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="text-center my-auto">
						<span>© 2019 <strong><a href="<?php base_url('') ?>">KoTA 106</a></strong> </span>
					</div>
				</div>
	</footer>

	<script src="<?php echo base_url('') ?>/assets/dasbor/js/jquery.min.js"></script>
	<script src="<?php echo base_url('') ?>/assets/dasbor/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('') ?>/assets/dasbor/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('') ?>/assets/dasbor/js/sb-admin.js"></script>

	<!-- Page level plugin JavaScript-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>/assets/dasbor/js/dataTables.bootstrap4.js"></script>
	<script>
		$(document).ready(function() {
			$('#dataTable').DataTable();
		});
	</script>
</body>


</html>
