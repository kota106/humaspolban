<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="image/png" href="/hayati-ico.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hayati ID - Panel Petani Hebat</title>
	<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="<?php base_url('') ?>/assets/dasbor/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php base_url() ?>/assets/dasbor/css/dataTables.bootstrap4.css">
	<link href="<?php base_url('') ?>/assets/dasbor/css/sb-admin.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="index.html">Panel Hayati ID</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

		<!-- Navbar Search -->
		<!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
				</div>
			</div>
		</form>

		<!-- Navbar
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Settings</a>
					<a class="dropdown-item" href="#">Activity Log</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>  !-->
	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php base_url('') ?>/admin/datacheckout">
                    <i class="fas fa-handshake"></i>
                    <span>Data Checkout</span>
                 </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php base_url('') ?>/admin/datauser">
                <i class="fas fa-users"></i>
            <span>Data User</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php base_url('') ?>/admin/penjualan">
                <i class="fas fa-store"></i>
            <span>Data penjualan</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php base_url('') ?>/admin/dataproduk">
                <i class="fas fa-hand-holding-usd"></i>
            <span>Data Produk</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">Login Screens:</h6>
					<a class="dropdown-item" href="login.html">Login</a>
					<a class="dropdown-item" href="register.html">Register</a>
					<a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Other Pages:</h6>
					<a class="dropdown-item" href="404.html">404 Page</a>
					<a class="dropdown-item" href="blank.html">Blank Page</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php base_url('') ?>/masuk/logout">
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
						<span>© 2018 <strong><a href="<?php base_url('') ?>">Hayati ID</a></strong> </span>
					</div>
				</div>
	</footer>

	<script src="<?php base_url('') ?>/assets/dasbor/js/jquery.min.js"></script>
	<script src="<?php base_url('') ?>/assets/dasbor/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php base_url('') ?>/assets/dasbor/js/jquery.easing.min.js"></script>
    <script src="<?php base_url('') ?>/assets/dasbor/js/sb-admin.js"></script>

	<!-- Page level plugin JavaScript-->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>/assets/dasbor/js/dataTables.bootstrap4.js"></script>
	<script>
		$(document).ready(function() {
			$('#dataTable').DataTable();
		});
	</script>
</body>


</html>
