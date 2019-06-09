<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hayati ID - Panel Petani Hebat</title>
    <link href="https://hayati.id/assets/dasbor/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://hayati.id/assets/dasbor/css/datepicker3.css" rel="stylesheet">
    <link href="https://hayati.id/assets/dasbor/css/dasbor.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Panel <span>Hayati</span></a>
            </div>
        </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Username</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href="../dashboard.php"><em class="fa fa-dashboard">&nbsp;</em>Profile</a></li>
            <li><a href="../project.php"><em class="fa fa-calendar">&nbsp;</em>Lihat Investasi</a></li>
            <li><a href="../my-invest.php"><em class="fa fa-bar-chart">&nbsp;</em>Investasi Anda</a></li>
            <li class="active"><a href="../partnership.php"><em class="fa fa-toggle-off">&nbsp;</em>Gabung Mitra</a></li>
            <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        </ul>
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
                <li class="active">Gabung Mitra</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gabung Mitra</h1>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-lg-12">
                <div class="partner">
                    <h3><strong>Jadi Mitra Hayati untuk Kolaborasi !</strong></h3>
                    <p class="being-partner">Kirimkan proposalmu melalui kolom dibawah</p>
                    <img class="img-howto" src="https://hayati.id/assets/img/regis.png" alt="" style="max-width:40%;">
                    <br>
                    <div class="upload-btn-wrapper">
                        <button class="btn">Pilih Proposal</button>
                        <input type="file" name="myfile" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://hayati.id/assets/dasbor/js/jquery-1.11.1.min.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/bootstrap.min.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/bootstrap-datepicker.js"></script>
    <script src="https://hayati.id/assets/dasbor/js/custom.js"></script>

</body>

</html>
